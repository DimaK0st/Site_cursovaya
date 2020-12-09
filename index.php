<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">

    <title>Генератор особистості - головна</title>
    <meta name="description" content="Сайт для швидкого створення випадкових особистостей, корисний розробникам і тестувальникам для налагодження і тестування сервісів.">
    <meta name="keywords" content="генератор логінів, генератор паролів, рандомайзер, генератор паролів онлайн,
    згенерувати пароль, генерація паролів, генератор логіна, генератор пошт, випадкова пошта,
    рандомний адресу України, пошта, логін, Україна, адреса, ПІБ, українською"/>
    <meta name="language" content="uk">


    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/drop_text.css">


    <script src="js/generate.js"></script>

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
        <H1 class="h1_hider">
            Генератор особистості - головна
        </H1>
        <input name="all" type="hidden" value="find">
        <br>
        <div class="demo">
            <input type="checkbox" id="hd-1" class="hide"/>
            <label for="hd-1"> Натисніть, щоб відобразити/приховати інформацію щодо користування сторінкою</label>
            <div>
                    &nbsp;&nbsp;&nbsp;Навіщо вигадувати дані, якщо сайт зробить це за вас?<br>
                    &nbsp;&nbsp;&nbsp;Сайт було розроблено для швидкого створення випадкових особистостей.<br>
                    &nbsp;&nbsp;&nbsp;Цей сайт буде корисний розробникам і тестувальникам для налагодження і тестування
                    сервісів.
                <br>&nbsp;&nbsp;&nbsp;План роботи зі сторінкою:
                <ol>
                    <li> Оберіть поле яке вас цікавить</li>
                    <li> Натисніть на кнопку "Згенерувати ..."</li>
                    <li> Після натискання, це поле буде згенероване</li>
                    <li> Для комфортної роботи є кнопка "copy" яка скопіює значення поля в буфер</li>
                    <li> Для генерації всіх полів натисніть внизу кнопку "Згенерувати все"</li>
                    <li> В поле "Розмір" можна ввести кількість необхідних символів для генерації</li>
                </ol>

                <br>
                &nbsp;&nbsp;&nbsp;Для генерації декількох значень одного типу перейдіть на сторінку "Масова
                генерація", яка знаходиться вгорі сайту.<br>
                &nbsp;&nbsp;&nbsp;Якщо вам потрібно згенерувати запит для внесення даних до вашої БД, то перейдіть
                на сторінку "Генерація SQL"

            </div>
            <br>
            <br>
        </div>


        <div class="radio_text">
            <a>Оберіть стать:</a>
            <input type="radio" name="course" value="1"/><abbr title="Чоловіча"> Ч. </abbr>
            <input type="radio" name="course" value="2"/><abbr title="Жіноча"> Ж. </abbr>
            <input type="radio" name="course" checked value="3"/>Випадкова
        </div>

        <div class="fio">
            <input type="submit" name="fio_btn" id="fio_btn" value="Згенерувати ПІБ">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('fio_text')"></div>
            <input type="text" name="fio_text" id="fio_text"/>
        </div>


        <div class="address">
            <input type="submit" name="address_btn" id="address_btn" value="Згенерувати адресу">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('address_text')"></div>
            <input type="text" name="address_text" id="address_text"/>
        </div>


        <div class="profession">
            <input type="submit" name="profession_btn" id="profession_btn" value="Згенерувати професію">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('profession_text')"></div>
            <input type="text" name="profession_text" id="profession_text"/>
        </div>


        <div class="nomer">
            <input type="button" value="Згенерувати номер" onclick="gen_nomer()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('Nomer')"></div>
            <input type="text" name="Nomer" id="Nomer"/>
        </div>


        <div class="email">
            <div class="email_num">

                <input type="button" name="Email_btn" id="Email_btn" value="Згенерувати пошту"
                       onclick="gen_email()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('Email_txt')"></div>
                <input type="text" name="Email_num" id="email_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="Email_txt" id="Email_txt"/>

        </div>


        <div class="login">

            <div class="login_num">

                <input type="button" name="login_btn" id="login_btn" value="Згенерувати логін" onclick="gen_login()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('login_txt')"></div>
                <input type="text" name="login_num" id="login_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="login_txt" id="login_txt"/>

        </div>


        <div class="password">
            <div class="password_num">

                <input type="button" name="password__btn" id="password_btn" value="Згенерувати пароль"
                       onclick="gen_password()">
                <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('password_txt')"></div>
                <input type="text" name="password_num" id="password_num" placeholder="Розмір" maxlength="2">

            </div>
            <input type="text" name="password_txt" id="password_txt"/>
        </div>


        <div class="lang">
            <input type="button" name="lang_btn" id="lang_btn" value="Згенерувати ін. мову" onclick="gen_lang()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('lang_text')"></div>
            <input type="text" name="lang_text" id="lang_text"/>
        </div>


        <div class="date">
            <input type="button" name="date_btn" id="date_btn" value="Згенерувати Д.Н."
                   onclick="gen_randomDate()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('date_text')"></div>
            <input type="text" name="date_text" id="date_text"/>
        </div>


        <div class="color">
            <input type="button" name="color_btn" id="color_btn" value="Згенерувати колір" onclick="gen_color()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('color_text')"></div>
            <input type="text" name="color_text" id="color_text"/>
        </div>


        <div class="height">
            <input type="button" name="height_btn" id="height_btn" value="Згенерувати зріст" onclick="gen_height()">
            <div class="btn_copy"><input type="button" value="copy" onclick="myFunction('height_text')"></div>
            <input type="text" name="height_text" id="height_text"/>
        </div>


        <div class="weight">
            <input type="button" name="weight_btn" id="weight_btn" value="Згенерувати вагу" onclick="gen_weight()">
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