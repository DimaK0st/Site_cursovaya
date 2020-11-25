<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/selective_generation.css">

    <title>Генератор особистості</title>
    <link rel="shortcut icon" href="../../image/ico.ico" type="image/x-icon"


</head>


<body>

<header>
    <?
    include "../../template/interface/header.php";
    ?>
</header>

<div class="selective_generation_block">

    <?
    include "../../php/selective_generation_script.php";
    gen_nomer_php();

    ?>

    <div class="check_input_block">

        <div class="check_block">

            <div class="check_fio">
                <span> ПІБ </span>
                <input type="checkbox" name="ПІБ">
            </div>

            <div class="check_address">
                <span> Адреса </span>
                <input type="checkbox" name="Адреса">
            </div>


            <div class="check_profession">
                <span> Професія </span>
                <input type="checkbox" name="Професія">
            </div>


            <div class="check_nomer">
                <span> Номер </span>
                <input type="checkbox" name="Номер">
            </div>


            <div class="check_lang">
                <span> Мова </span>
                <input type="checkbox" name="Мова">
            </div>


            <div class="check_date">
                <span> Дата </span>
                <input type="checkbox" name="Дата">
            </div>


            <div class="check_color">
                <span> Колір </span>
                <input type="checkbox" name="Колір">
            </div>


            <div class="check_height">
                <span> Зріст </span>
                <input type="checkbox" name="Зріст">
            </div>


            <div class="check_weight">
                <span> Вага </span>
                <input type="checkbox" name="Вага">
            </div>

        </div>


        <div class="check_num_block">

            <div class="check_email">
                <span> Пошта </span>
                <input type="text" name="check_email_num" id="check_email_num" placeholder="Розмір" maxlength="2">
                <input type="checkbox" name="Пошта">
            </div>

            <div class="check_login">
                <span> Логін </span>
                <input type="text" name="check_login_num" id="check_login_num" placeholder="Розмір" maxlength="2">
                <input type="checkbox" name="Логін">
            </div>

            <div class="check_password">
                <span> Пароль </span>
                <input type="text" name="check_password_num" id="check_password_num" placeholder="Розмір" maxlength="2">
                <input type="checkbox" name="Пароль">
            </div>
        </div>

        <br>
        <span> Кількість особистостей </span>
        <input type="text" name="osobistist_num" id="osobistist_num" placeholder="Кількість" maxlength="2">
        <input type="submit" id="generate_n_user" name="generate_n_user" value="Згенерувати">






    </div>


</div>


<footer>
    <?php

    include "../../template/interface/footer.php";

    ?>
</footer>
</body>
</html>
