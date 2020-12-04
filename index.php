<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/index.css">


    <script type="text/javascript" src="js/generate.js"></script>


    <title>Генератор особистості</title>
    <link rel="shortcut icon" href="/image/ico.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

<header>
    <?php

    include "template/interface/header.php";

    ?>
</header>


<FORM action="index.php" method=get>
    <div class="generator">
        <br>

        <input name="all" type="hidden" value="find">



        <div class="demo">
            <input type="checkbox" id="hd-1" class="hide"/>
            <label for="hd-1" >Натисніть для перегляду інформації про сторінку</label>
            <div>
                Ця сторінка створена для генерації певної інформації для обраного поля, або всієї інформації за допомогою кнопки внизу. <br>Кнопка "copy" скопіює текст з полю яке знаходиться під нею
                </div>
            <br/>
            <br/>
        </div>






        <a>Оберіть стать:</a>
        <input type="radio" name="course" value="1"/><abbr title="Чоловіча"> Ч. </abbr>
        <input type="radio" name="course" value="2"/><abbr title="Жіноча"> Ж. </abbr>
        <input type="radio" name="course" checked value="3"/>Випадкова


        <div class="fio">
            <input type="submit" name="fio_btn" id="fio_btn" value="Оновити ПІБ">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('fio_text')"></div>
            <input type="text" name="fio_text" id="fio_text"/>
        </div>


        <div class="address">
            <input type="submit" name="address_btn" id="address_btn" value="Оновити адресу">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('address_text')"></div>
            <input type="text" name="address_text" id="address_text"/>
        </div>


        <div class="profession">
            <input type="submit" name="profession_btn" id="profession_btn" value="Оновити професію">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('profession_text')"></div>
            <input type="text" name="profession_text" id="profession_text"/>
        </div>


        <div class="nomer">
            <input type="button" value="Оновити номер" onclick="gen_nomer()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('Nomer')"></div>
            <input type="text" name="Nomer" id="Nomer"/>
        </div>


        <div class="email">
            <div class="email_num">

                <input type="button" name="Email_btn" id="Email_btn" value="Оновити пошту"
                       onclick="gen_email()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('Email_txt')"></div>
                <input type="text" name="Email_num" id="email_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="Email_txt" id="Email_txt"/>

        </div>


        <div class="login">

            <div class="login_num">

                <input type="button" name="login_btn" id="login_btn" value="Оновити логін" onclick="gen_login()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('login_txt')"></div>
                <input type="text" name="login_num" id="login_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="login_txt" id="login_txt"/>

        </div>


        <div class="password">
            <div class="password_num">

                <input type="button" name="password__btn" id="password_btn" value="Оновити пароль"
                       onclick="gen_password()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('password_txt')"></div>
                <input type="text" name="password_num" id="password_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="password_txt" id="password_txt"/>
        </div>


        <div class="lang">
            <input type="button" name="lang_btn" id="lang_btn" value="Оновити ін. мову" onclick="gen_lang()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('lang_text')"></div>
            <input type="text" name="lang_text" id="lang_text"/>
        </div>


        <div class="date">
            <input type="button" name="date_btn" id="date_btn" value="Оновити Д.Н."
                   onclick="gen_randomDate()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('date_text')"></div>
            <input type="text" name="date_text" id="date_text"/>
        </div>


        <div class="color">
            <input type="button" name="color_btn" id="color_btn" value="Оновити колір" onclick="gen_color()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('color_text')"></div>
            <input type="text" name="color_text" id="color_text"/>
        </div>


        <div class="height">
            <input type="button" name="height_btn" id="height_btn" value="Оновити зріст" onclick="gen_height()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('height_text')"></div>
            <input type="text" name="height_text" id="height_text"/>
        </div>


        <div class="weight">
            <input type="button" name="weight_btn" id="weight_btn" value="Оновити вагу" onclick="gen_weight()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('weight_text')"></div>
            <input type="text" name="weight_text" id="weight_text"/>
        </div>


        <br>


        <div class="nav_btn">

            <input type="reset" id="nav_reset" name="Reset" value="Очистити">
            <input type="submit" id="nav_submit" name="all_gener" value="Згенерувати все"
                   onClick="document.location = '?id=1'"/>
        </div>
    </div>
</FORM>

<footer>

    <?php

    include "template/interface/footer.php";

    ?>

</footer>
</body>


<?
include "php/gener.php";
?>


</html>