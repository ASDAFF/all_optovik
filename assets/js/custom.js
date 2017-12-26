$(function () {
    $('#js-preview-pictures').on('change', function() {
        var maxLength = 5;
        if(this.files.length > maxLength)
        {
            $.fancybox.open('<div style="padding:25px;margin:25px"><h4>Внимание!</h4>Загрузятся только первые ' +
                maxLength +
                ' файлов!</div>');
        }
    });
    $('form.js-profile-form').on('submit', function (e) {

        e.preventDefault();

        var curForm = $(this),
            formData = new FormData(curForm.get(0)),
            waitElement = curForm.find('input[type="submit"], button[type="submit"]').get(0),
            pictures = document.getElementById('js-pictures').files,
            cntPictures = pictures.length,
            prevPictures = document.getElementById('js-preview-pictures').files,
            cntPrevPictures = pictures.length;

        for (var x = 0; x < cntPictures; ++x)
            formData.append('pictures[' + x + ']', pictures[x]);
        for (var x = 0; x < cntPrevPictures; ++x)
            formData.append('preview_pictures[' + x + ']', prevPictures[x]);

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
                        '<div style="margin:20px;padding:15px;color:red;">' +
                        '<b>Пожалуйста, исправьте следующие ошибки:</b><br><br>' +
                        $.map(ans.errors, function (e) {
                            return e;
                        }).join('<br>') +
                        '</div>'
                    )
                }
                else {
                    //show success message
                    $.fancybox.open('<div style="margin:20px;padding:15px;color:green;text-align:center;">Ваша заявка принята</div>');
                }

                BX.closeWait(waitElement);
            }
        });
        return false;
    })
});