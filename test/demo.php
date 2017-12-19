<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <!--Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>***</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/style.min.css" rel="stylesheet" />
    <!-- JS Files -->
</head>
<body class="body-content">
<header>
    <!-- MOBILE MENU -->
    <div class="menu__button"></div>
    <div class="menu__mobile__alert">
        <!-- После адоптации - это меню откроется  -->
        <div class="menu__mobile__alert__list">
            <ul>
                <li>
                    <a href="" title="">Меню 1</a>
                </li>
            </ul>
        </div>
        <div class="menu__mobile__alert_footer">
            Текст под меню
        </div>
    </div>
    <!-- END MOBILE MENU -->


</header>
<div class="wraps" role="main">
    <!-- CONTENT -->

    <div class="temp__slider">
        <div class="temp__slider__item">
            <img src="assets/img/bg/bg1.jpg">
        </div>

        <div class="temp__slider__item">
            <img src="assets/img/bg/bg3.jpg">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Заголовок 1</h1>
                <h2>Заголовок 2</h2>
                <h3>Заголовок 3</h3>
                <h4>Заголовок 4</h4>
                <h5>Заголовок 5</h5>
                <h6>Заголовок 6</h6>
            </div>
            <div class="col-16">
                <p class="blockquote blockquote_primary">
                    Несмотря на то, что стандарт HTML5 официально не утвержден, использовать его можно уже сейчас.
                    <br><br>
                    <small>small</small>
                </p>
                <p class="text">
                    Несмотря на то, что стандарт HTML5 официально не утвержден, использовать его можно уже сейчас.
                </p>
                <p class="text text_primary">
                    Несмотря на то, что стандарт HTML5 официально не утвержден, использовать его можно уже сейчас.
                </p>
                <p class="text text_info">
                    Несмотря на то, что стандарт HTML5 официально не утвержден, использовать его можно уже сейчас.
                </p>
            </div>
        </div>

        <h4>Кнопки</h4>
        <button class="button button_primary" type="button">Default</button>
        <button class="button button_primary button_round" type="button">Round</button>
        <button class="button button_primary button_round" type="button"><i class="icon icon_like ui-2_favourite-28"></i>С иконкой</button>
        <button class="button button_primary button_icon button_round button_icon" type="button"><i class="icon icon_like ui-2_favourite-28"></i></button>
        <button class="button button_primary button_simple button_round" type="button">Simple</button>

        <h4>Размеры</h4>
        <button class="button button_primary button_sm">Small</button>
        <button class="button button_primary">Regular</button>
        <button class="button button_primary button_lg">Large</button>

        <h4>Цвет</h4>
        <button class="button">Default</button>
        <button class="button button_primary">Primary</button>
        <button class="button button_info">Info</button>
        <button class="button button_success">Success</button>
        <button class="button button_warning">Warning</button>
        <button class="button button_danger">Danger</button>

        <h4>Ссылки</h4>
        <a class="button button_link">Default</a>
        <a class="button button_link button_primary ">Primary</a>
        <a class="button button_link button_info">Info</a>
        <button class="button button_link button_success">Success</button>
        <button class="button button_link button_warning">Warning</button>
        <button class="button button_link button_danger">Danger</button>

        <h4>Поля</h4>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="input">
                    <input type="text" value="" placeholder="Regular" class="input__control">
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="input has_success">
                    <input type="text" value="Success" class="input__control input__control_success">
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="input has_danger">
                    <input type="email" value="Error Input" class="input__control input__control_danger">
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="input input_addon">
                    <div class="input__group">
                        <span class="input__addon">
                        <i class="icon icon_like ui-2_favourite-28"></i>
                     </span>
                        <input type="text" class="input__control" placeholder="">
                    </div>
                    <div class="input__log">
                        Вы введи неправильный адресс
                    </div>
                </div>
            </div>

        </div>

        <h4>Чекбоксы</h4>
        <div class="row">
            <div class="col-6">
                <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">
                        Unchecked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox2" type="checkbox" checked="">
                    <label for="checkbox2">
                        Checked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox3" type="checkbox" disabled="">
                    <label for="checkbox3">
                        Disabled unchecked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox4" type="checkbox" checked="" disabled="">
                    <label for="checkbox4">
                        Disabled checked
                    </label>
                </div>
            </div>
            <div class="col-6">
                <div class="radio">
                    <input type="radio" name="radio1" id="radio1" value="option1">
                    <label for="radio1">
                        Radio is off
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                    <label for="radio2">
                        Radio is on
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio3" id="radio3" value="option3" disabled="">
                    <label for="radio3">
                        Disabled radio is off
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio4" id="radio4" value="option4" checked="" disabled="">
                    <label for="radio4">
                        Disabled radio is on
                    </label>
                </div>
            </div>
            <div class="col-6">
                <div class="toggle">
                    <input type="checkbox" name="toggle" id="toggle1" value="option1">
                    <label for="toggle1">
                        Radio is off
                    </label>
                </div>
                <div class="toggle">
                    <input type="checkbox" name="toggle" id="toggle2" value="option1" checked>
                    <label for="toggle2">
                        Radio is off
                    </label>
                </div>
                <div class="toggle">
                    <input type="checkbox" name="toggle" id="toggle3" value="option1">
                    <label for="toggle3">
                        Radio is off
                    </label>
                    <span class="toggle__text"></span>
                </div>
                <div class="toggle">
                    <input type="checkbox" name="toggle" id="toggle4" value="option1" disabled>
                    <label for="toggle4">
                        Radio is off
                    </label>
                    <span class="toggle__text"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>

</footer>
</body>
<!-- Libs JS Files -->
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/anime.js" type="text/javascript"></script>
<script src="./assets/js/core/slick.js" type="text/javascript"></script>

<!-- Core JS Files -->
<script src="./assets/js/scripts.js" type="text/javascript"></script>
<script src="./assets/js/main.js" type="text/javascript"></script>
</html>