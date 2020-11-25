<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">

    <script type="text/javascript" src="js/generate.js"></script>

    <title>Генератор особистості</title>
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon"


</head>

<body>
<!--
<header>
    <img class="logo" src="image/csn_logo.png" alt="logo" >
    <nav class="nav_menu">
        <ul >
            <li><a href="#">Первый</a></li>
            <li><a href="#">Второй</a></li>
            <li><a href="#">Третий</a></li>

        </ul>
    </nav>Генератор личности
    <a href="#" class="univer"> <button> Университет </button> </a>
</header>
-->

<header>
<?
    include "template/interface/header.php";
?>

</header>


<FORM action="index.php" method=get>
    <div class="generator">
        <br>
        <!--        <FORM action="php/gener.php"  method="post">-->

        <!--        </FORM>-->

        <input name="all" type="hidden" value="find">


        <a>Оберіть стать:</a>
        <input type="radio" name="course" value="1"/><abbr title="Чоловіча"> Ч. </abbr>
        <input type="radio" name="course" value="2"/><abbr title="Жіноча"> Ж. </abbr>
        <input type="radio" name="course" checked value="3"/>Випадкова


        <div class="fio">
            <input type="submit" name="fio_btn" id="fio_btn" value="Оновити ПІБ">
            <input type="text" name="fio_text" id="fio_text"/>
        </div>


        <div class="address">
            <input type="submit" name="address_btn" id="address_btn" value="Оновити адресу">
            <input type="text" name="address_text" id="address_text"/>
        </div>


        <div class="profession">
            <input type="submit" name="profession_btn" id="profession_btn" value="Оновити професію">
            <input type="text" name="profession_text" id="profession_text"/>
        </div>


        <div class="nomer">
            <input type="button" value="Оновити номер" onclick="gen_nomer()">
            <input type="text" name="Nomer" id="Nomer"/>
        </div>


        <div class="email">
            <div class="email_num">

                <input type="button" name="Email_btn" id="Email_btn" value="Оновити пошту"
                       onclick="gen_email()">
                <input type="text" name="Email_num" id="email_num" placeholder="Розмір" maxlength="2" >

            </div>
            <input type="text" name="Email_txt" id="Email_txt"/>

        </div>


        <div class="login">

            <div class="login_num">

                <input type="button" name="login_btn" id="login_btn" value="Оновити логін" onclick="gen_login()">
                <input type="text" name="login_num" id="login_num" placeholder="Розмір" maxlength="2" >

            </div>
            <input type="text" name="login_txt" id="login_txt"/>

        </div>


        <div class="password">
            <div class="password_num">

                <input type="button" name="password__btn" id="password_btn" value="Оновити пароль"
                       onclick="gen_password()">
                <input type="text" name="password_num" id="password_num" placeholder="Розмір" maxlength="2" >

            </div>
            <input type="text" name="password_txt" id="password_txt"/>
        </div>


        <div class="lang">
            <input type="button" name="lang_btn" id="lang_btn" value="Оновити іноземна мову" onclick="gen_lang()">
            <input type="text" name="lang_text" id="lang_text"/>
        </div>


        <div class="date">
            <input type="button" name="date_btn" id="date_btn" value="Оновити дату народження"
                   onclick="gen_randomDate()">
            <input type="text" name="date_text" id="date_text"/>
        </div>


        <div class="color">
            <input type="button" name="color_btn" id="color_btn" value="Оновити улюблений колір" onclick="gen_color()">
            <input type="text" name="color_text" id="color_text"/>
        </div>


        <div class="height">
            <input type="button" name="height_btn" id="height_btn" value="Оновити зріст" onclick="gen_height()">
            <input type="text" name="height_text" id="height_text"/>
        </div>


        <div class="weight">
            <input type="button" name="weight_btn" id="weight_btn" value="Оновити вагу" onclick="gen_weight()">
            <input type="text" name="weight_text" id="weight_text"/>
        </div>


        <br>


        <div class="all">
            <input type="button" name="all_btn" id="all_btn" value="Згенерувати все" onclick="gen_all()">


            <input type="submit" name="all_gener" value="Згенерувати" onClick="document.location = '?id=1'"/>
            <input type="reset" name="Reset" value="Очистить">
        </div>
</FORM>


<!--<FORM action="php/gener.php" method="post">-->
<!--    <h2>ФІП</h2>-->
<!--    Імя:-->
<!--    <INPUT TYPE="text" NAME="fn" onBlur="validfn(fn.value)">-->

<!--    <SCRIPT LANGUAGE="JavaScript">-->
<!--        document.dataentry.fn.focus()-->
<!--    </SCRIPT>-->
<!--    <BR>Введите номер телефона (ххх-хх-хх или ххххххх):<br>-->
<!--    <INPUT TYPE="text" NAME="phone" SIZE=10>-->
<!--    <INPUT TYPE="button" VALUE="Отправить"-->
<!--           onClick="validphone(phone.value)">-->
<!--</FORM>-->

<footer>

    <?php

    include "template/interface/footer.php";

    ?>
</footer>
</body>

<?php

include "php\gener.php";

?>





</html>