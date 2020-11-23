<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/menu.css">

    <title>Генератор личности</title>

    <script type="text/javascript" src="js/generate.js">

    </script>


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
    </nav>
    <a href="#" class="univer"> <button> Университет </button> </a>
</header>
-->

<header>

    <ul id="head_main">
        <li><a href="#1">Пункт 1</a>
        <li><a href="#2">Пункт 2</a>
        <li><a href="#3">Пункт 3</a>
        <li><a href="#4">Пункт 4</a>
    </ul>
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
            <span>Прізвище Ім'я по Батькові</span>
            <input type="submit" name="fio_btn" id="fio_btn" value="ПІБ"">
            <input type="text" name="fio_text" id="fio_text"/>
        </div>


        <div class="address">
            <span>Адреса</span>
            <input type="submit" name="address_btn" id="address_btn" value="Адреса"'">
            <input type="text" name="address_text" id="address_text"/>
        </div>


        <div class="profession">
            <span>Професія</span>
            <input type="submit" name="profession_btn" id="profession_btn" value="Професія"">
            <input type="text" name="profession_text" id="profession_text"/>
        </div>


        <div class="nomer">
            <span>Номер телефону</span>
            <input type="button" value="Сгенерировать номер" onclick="gen_nomer()">
            <input type="text" name="Nomer" id="Nomer"/>
        </div>


        <div class="login">
            <span>Логін</span>
            <div class="login_inputer">
                <div class="login_num">
                    <input type="text" name="login_num" id="login_num" maxlength="2" value="10">
                </div>
                <input type="button" name="login_btn" id="login_btn" value="Згенерувати Логін" onclick="gen_login()">
                <input type="text" name="login_txt" id="login_txt"/>
            </div>
        </div>


        <div class="password">
            <span>Пароль</span>
            <dev class="password_inputer">
                <div class="password_num">
                    <input type="text" name="password_num" id="password_num" maxlength="2" value="10">
                </div>
                <input type="button" name="password__btn" id="password_btn" value="Згенерувати Пароль"
                       onclick="gen_password()">
                <input type="text" name="password_txt" id="password_txt"/>
            </dev>
            </dev>


            <div class="email">
                <span>Електрона пошта</span>
                <div class="email_inputer">
                    <div class="email_num">
                        <input type="text" name="Email_num" id="Email_num" maxlength="2" value="10">
                    </div>
                    <input type="button" name="Email_btn" id="Email_btn" value="Згенерувати Пошту"
                           onclick="gen_email()">
                    <input type="text" name="Email_txt" id="Email_txt"/>
                </div>
            </div>



            <div class="lang">
                <span>Друга мова</span>
                <input type="button" name="lang_btn" id="lang_btn" value="Іноземна мова" onclick="gen_lang()">
                <input type="text" name="lang_text" id="lang_text"/>
            </div>




            <div class="date">
                <span>Дата народження</span>
                <input type="button" name="date_btn" id="date_btn" value="Дата народження" onclick="gen_randomDate()">
                <input type="text" name="date_text" id="date_text"/>
            </div>




            <div class="color">
                <span>Улюбрений колір</span>
                <input type="button" name="color_btn" id="color_btn" value="Улюблений колір" onclick="gen_color()">
                <input type="text" name="color_text" id="color_text"/>
            </div>




            <div class="height">
                <span>Зріст</span>
                <input type="button" name="height_btn" id="height_btn" value="Зріст" onclick="gen_height()">
                <input type="text" name="height_text" id="height_text"/>
            </div>




            <div class="weight">
                <span>Вага</span>
                <input type="button" name="weight_btn" id="weight_btn" value="Вага" onclick="gen_weight()">
                <input type="text" name="weight_text" id="weight_text"/>
            </div>


            <br>


            <div class="all">
                <input type="button" name="all_btn" id="all_btn" value="Згенерувати все" onclick="gen_all()">
            </div>


            <input type="submit" name="all_gener" value="Згенерувати" onClick="document.location = '?id=1'"/>
            <input type="reset" name="Reset" value="Очистить">


        </div>
</FORM>

</div>

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


</body>

<?php

include "php\gener.php";

?>


<footer>


</footer>


</html>