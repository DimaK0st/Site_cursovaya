<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/drop_text.css">
    <link rel="stylesheet" href="../../css/selective_generation.css">

    <title>Генератор особистості</title>
    <link rel="shortcut icon" href="../../image/ico.ico" type="image/x-icon">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>

<header>
    <?
    include "../../template/interface/header.php";
    ?>
</header>


<FORM action="selective_generation.php" method=get>

    <div class="sql_generation_block">


        <div class="demo">
            <br>
            <input type="checkbox" id="hd-1" class="hide"/>
            <label for="hd-1"> Натисніть, щоб відобразити/приховати інформацію щодо користування сторінкою</label>

            <div>
                <ol>
                    &nbsp;&nbsp;&nbsp;Ця сторінка створена для генерації певної інформації обраного поля за
                    допомогою checkbox, або всієї інформації за допомогою кнопки "Обрати всі".
                    <br>

                    &nbsp;&nbsp;&nbsp;План роботи з сторінкою:
                    <li> Оберіть за допомогою "✓" необхідні параметри.</li>
                    <li> В поле "Розмір" можна ввести кількість необхідних символів для генерації.</li>
                    <li>В полі "Кількість" зазначте бажану кількість записів.</li>

                    <li> За допомогою кнопки "Обрати всі" автоматично оберуться всі поля.</li>


                    <li> Натисніть на кнопку "Згенерувати", щоб отримати інформацію за обраними параметрами.</li>

                </ol>
            </div>
            <br>
            <br>
        </div>
        <div class="bg_text">

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
                        <input type="checkbox" id="ПІБ" checked name="ПІБ">
                        <span>ПІБ, </span>
                    </div>

                    <div class="check_address">
                        <input type="checkbox" id="Адреса" checked name="Адреса">
                        <span>Адреса, </span>
                    </div>


                    <div class="check_profession">
                        <input type="checkbox" id="Професія" checked name="Професія">
                        <span>Професія, </span>
                    </div>


                    <div class="check_nomer">
                        <input type="checkbox" id="Номер" checked name="Номер">
                        <span>Номер, </span>
                    </div>


                    <div class="check_lang">
                        <input type="checkbox" id="Мова" checked name="Мова">
                        <span>Мова, </span>
                    </div>


                    <div class="check_date">
                        <input type="checkbox" id="Дата" checked name="Дата">
                        <span>Дата, </span>
                    </div>


                    <div class="check_color">
                        <input type="checkbox" id="Колір" checked name="Колір">
                        <span>Колір, </span>
                    </div>


                    <div class="check_height">
                        <input type="checkbox" id="Зріст" checked name="Зріст">
                        <span>Зріст, </span>
                    </div>


                    <div class="check_weight">
                        <input type="checkbox" id="Вага" checked name="Вага">
                        <span>Вага, </span>
                    </div>

                </div>


                <div class="check_num_block">

                    <div class="check_email">
                        <input type="checkbox" id="Пошта" checked name="Пошта">
                        <span>Пошта </span>
                        <input type="text" name="check_email_num" id="check_email_num" placeholder="Розмір"
                               maxlength="2">
                        <span>, </span>
                    </div>

                    <div class="check_login" style="float:left;">
                        <input type="checkbox" id="Логін" checked name="Логін">
                        <span>Логін </span>
                        <input type="text" name="check_login_num" id="check_login_num" placeholder="Розмір"
                               maxlength="2">
                        <span>, </span>
                    </div>

                    <div class="check_password" style="float:left;">
                        <input type="checkbox" id="Пароль" checked name="Пароль">
                        <span>Пароль </span>
                        <input type="text" name="check_password_num" id="check_password_num" placeholder="Розмір"
                               maxlength="2">
                        <span>. </span>
                    </div>
                </div>

                <br>
                <div class="num_counter">
                    <span> Кількість особистостей </span>
                    <input type="text" name="osobistist_num" id="osobistist_num" placeholder="Кількість" maxlength="2">

                </div>

            </div>
        </div>

            <div class="gen_a">
                <input type="submit" id="generate_n_user_submit" name="generate_n_user_submit" value="Згенерувати">
                <input type="reset" id="Reset" name="Reset" value="Обрати всі">
            </div>

            <br><br>

            <div class="result_from_php">
                <?

                include "../../php/selective_generation_script.php";


                ?>

            </div>
        </div>


    </div>

</FORM>
<footer>
    <?php

    include "../../template/interface/footer.php";

    ?>
</footer>
</body>


</html>
