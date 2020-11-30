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

<FORM action="selective_generation.php" method=get>

    <div class="selective_generation_block">
        <div class="check_gender">
            <a>Оберіть стать:</a>
            <input type="radio" name="course" value="1"/><abbr title="Чоловіча"> Ч. </abbr>
            <input type="radio" name="course" value="2"/><abbr title="Жіноча"> Ж. </abbr>
            <input type="radio" name="course" checked value="3"/>Випадкова
        </div>

        <div class="check_input_block">

            <div class="check_block">


                <br>
                <div class="check_fio">
                    <input type="checkbox" name="ПІБ">
                    <span>ПІБ, </span>
                </div>

                <div class="check_address">
                    <input type="checkbox" name="Адреса">
                    <span>Адреса, </span>
                </div>


                <div class="check_profession">
                    <input type="checkbox" name="Професія">
                    <span>Професія, </span>
                </div>


                <div class="check_nomer">
                    <input type="checkbox" name="Номер">
                    <span>Номер, </span>
                </div>


                <div class="check_lang">
                    <input type="checkbox" name="Мова">
                    <span>Мова, </span>
                </div>


                <div class="check_date">
                    <input type="checkbox" name="Дата">
                    <span>Дата, </span>
                </div>


                <div class="check_color">
                    <input type="checkbox" name="Колір">
                    <span>Колір, </span>
                </div>


                <div class="check_height">
                    <input type="checkbox" name="Зріст">
                    <span>Зріст, </span>
                </div>


                <div class="check_weight">
                    <input type="checkbox" name="Вага">
                    <span>Вага, </span>
                </div>

            </div>


            <div class="check_num_block">

                <div class="check_email">
                    <input type="checkbox" name="Пошта">
                    <span>Пошта </span>
                    <input type="text" name="check_email_num" id="check_email_num" placeholder="Розмір" maxlength="2">
                    <span>, </span>
                </div>

                <div class="check_login" style="float:left;">
                    <input type="checkbox" name="Логін">
                    <span>Логін </span>
                    <input type="text" name="check_login_num" id="check_login_num" placeholder="Розмір" maxlength="2">
                    <span>, </span>
                </div>

                <div class="check_password" style="float:left;">
                    <input type="checkbox" name="Пароль">
                    <span>Пароль </span>
                    <input type="text" name="check_password_num" id="check_password_num" placeholder="Розмір"
                           maxlength="2">
                    <span>. </span>
                </div>
            </div>

            <br>
            <span> Кількість особистостей </span>
            <input type="text" name="osobistist_num" id="osobistist_num" placeholder="Кількість" maxlength="2">
            <input type="submit" id="generate_n_user_submit" name="generate_n_user_submit" value="Згенерувати">

            <br><br>

            <div class="result_from_php">
                <?

                include "../../php/selective_generation_script.php";


                ?>


            </div>
        </div>


    </div>


    <footer>
        <?php

        include "../../template/interface/footer.php";

        ?>
    </footer>
</body>


</html>
