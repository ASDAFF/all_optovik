$(function () {
    //check count of preview pictures for upload
    $('#js-preview-pictures').on('change', function () {
        var maxLength = 1 * $('#max_files').val();
        if (this.files.length > maxLength) {
            $.fancybox.open('<div style="padding:35px;margin:25px"><h4>Внимание!</h4>Загрузятся только первые ' +
                maxLength +
                ' файлов!</div>');
        }
    });

    //ajax handler for profile page
    $('form.js-profile-form').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            formData = new FormData(curForm.get(0)),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0),
            pictures = document.getElementById('js-pictures').files,
            cntPictures = pictures.length,
            prevPictures = document.getElementById('js-preview-pictures').files,
            cntPrevPictures = prevPictures.length;

        for (var x = 0; x < cntPictures; ++x)
            formData.append('pictures[' + x + ']', pictures[x]);
        for (var y = 0; y < cntPrevPictures; ++y)
            formData.append('preview_pictures[' + y + ']', prevPictures[y]);

        BX.showWait(waitElement);

        $.ajax({
            method: curForm.attr('method'),
            url: curForm.attr('action'),
            dataType: 'json',
            data: formData,
            async: false,
            cache: false,
            processData: false,
            contentType: false,
            success: function (ans) {

                curForm.find('.core__form__input__log_danger').empty();

                if (ans && ans['errors']) {
                    //show errors on inputs
                    for (var inputName in ans.errors) {
                        curForm
                            .find('[name="' + inputName + '"]')
                            .closest('.js-field-block')
                            .find('.core__form__input__log_danger')
                            .html(ans['errors'][inputName]);
                    }
                    //show message with errors
                    $.fancybox.open(
                        '<div style="margin:25px;padding:35px;color:red;">' +
                        '<b>Пожалуйста, исправьте следующие ошибки:</b><br><br>' +
                        $.map(ans.errors, function (e) {
                            return e;
                        }).join('<br>') +
                        '</div>'
                    )
                }
                else {
                    //show success message
                    $.fancybox.open('<div style="margin:25px;padding:35px;color:green;text-align:center;">Данные успешно сохранены</div>');
                }

                BX.closeWait(waitElement);
            }
        });
        return false;
    });

    //add opt user id to request form
    $('.js-request-send').on('click', function () {
        $('input[name="opt_user_id"]').val($(this).data('user-id'));
        $('input[name="element_id"]').val($(this).data('element-id'));
    });

    //ajax handler for request form
    $('form.js-request-form').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0);

        BX.showWait(waitElement);

        $.post($(this).attr('action'), $(this).serialize(), function (ans) {

            BX.closeWait(waitElement);

            curForm.find('.core__form__input__log_danger').empty();

            if (ans && ans['errors']) {
                //show errors on inputs
                for (var inputName in ans.errors) {
                    curForm
                        .find('[name="' + inputName + '"]')
                        .closest('.js-field-block')
                        .find('.core__form__input__log_danger')
                        .html(ans['errors'][inputName]);
                }
                //show message with errors
                $.fancybox.open(
                    '<div style="margin:25px;padding:35px;color:red;">' +
                    '<b>Пожалуйста, исправьте следующие ошибки:</b><br><br>' +
                    $.map(ans.errors, function (e) {
                        return e;
                    }).join('<br>') +
                    '</div>'
                )
            }
            else {
                //show success message
                $.fancybox.open('<div style="margin:25px;padding:35px;color:green;text-align:center;">Ваша заявка принята</div>');
            }

        }, 'json');
        return false;
    });

    $('.js-back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

    if (!$('.js-product-photos a.hidden').length)
        $('.js-show-more').addClass('inactive');

    $('.js-show-more').on('click', function (e) {
        e.preventDefault();

        if ($(this).hasClass('inactive'))
            return false;

        var photoBlock = $('.js-product-photos'),
            photoLinks = photoBlock.find('a'),
            lastShowIndex = null,
            pageSize = photoBlock.data('page-count') * 1;

        photoLinks.each(function (i, el) {
            if ($(el).is(':visible'))
                return;
            if (!lastShowIndex)
                lastShowIndex = i + pageSize;
            if (i < lastShowIndex)
                $(el).show('slow');
        });
        if (lastShowIndex >= photoLinks.length) {
            $(this).addClass('inactive');
            lastShowIndex = null;
        }
    })

});