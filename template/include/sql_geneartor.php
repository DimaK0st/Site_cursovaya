<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/drop_text.css">
    <link rel="stylesheet" href="../../css/sql_generator.css">

    <title>Генератор особистості</title>
    <link rel="shortcut icon" href="../../image/ico.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function download(obj) {
            var str = JSON.stringify(obj);
            var blob = new Blob([str], {
                type: 'application/octet-stream'
            });

            var url = URL.createObjectURL(blob);
            var link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', 'from_generator_people.txt');
            var event = document.createEvent('MouseEvents');
            event.initMouseEvent('click', true, true, window, 1, 0, 0, 0, 0, false, false, false, false, 0, null);
            link.dispatchEvent(event);
        }
    </script>

</head>


<body>

<header>
    <?
    include "../../template/interface/header.php";
    ?>
</header>


<FORM action="sql_geneartor.php" method=get>

    <div class="sql_generation_block">

        <div class="demo">
            <br>
            <input type="checkbox" id="hd-1" name="hd-1" class="hide"/>
            <label for="hd-1"> Натисніть, щоб відобразити/приховати інформацію щодо користування сторінкою</label>
            <div>

<ol>
    &nbsp;&nbsp;&nbsp;Ця сторінка створена більш для розробників та тестувальників ніж для звичайних людей, бо вона генерує запити за допомогою яких вносяться дані до БД.

    <br><br>&nbsp;&nbsp;&nbsp;План роботи зі сторінкою:
                    <li>У відповідному полі задайте назву для маймутньої/існуючої бази даних</li>
                    <li> Для того щоб критерій був доданий до результуючого запиту, потрібно привласнити йому будь яку назву</li>
                    <li> В поле "Розмір" є можливість ввести кількість необхідних символів для генерації.</li>
                    <li> В полі "Кількість" зазначається бажана кількість записів.</li>
                    <li>Кнопка "Згенерувати", генерує запит за обраними критеріями. </li>
                    <li> Кнопка "Скачати", скачає отриманий запит на ваш копм'ютер</li>
                    <br>
                </ol>


            </div>
            <br>
            <br>
        </div>

        <br>

        <div class="bg_text_sql">
        <div class="check_gender">
            <a>Оберіть стать:</a>
            <input type="radio" name="course" value="1"/><abbr title="Чоловіча"> Ч. </abbr>
            <input type="radio" name="course" value="2"/><abbr title="Жіноча"> Ж. </abbr>
            <input type="radio" name="course" checked value="3"/>Випадкова
        </div>


        <br>

        <div class="sql_zapit">

            <div class="create_table">

                <span> CREATE TABLE '</span>
                <input type="text" id="create_table_text" placeholder="Назва бази" name="create_table_text">
                <span> '(</span>
            </div>

            <div class="sql_atributi">

                <div class="sql_fio">
                    <input type="text" id="sql_fio_text" placeholder="ФІО" name="sql_fio_text">
                    <span> text,</span>

                </div>

                <div class="sql_adres">
                    <input type="text" id="sql_adres_text" placeholder="Адреса" name="sql_adres_text">
                    <span> text,</span>

                </div>

                <div class="sql_profesia">
                    <input type="text" id="sql_profesia_text" placeholder="Професія" name="sql_profesia_text">
                    <span> text,</span>

                </div>

                <div class="sql_nomer">
                    <input type="text" id="sql_nomer_text" placeholder="Номер" name="sql_nomer_text">
                    <span> text,</span>

                </div>

                <div class="sql_language">
                    <input type="text" id="sql_language_text" placeholder="Мова" name="sql_language_text">
                    <span> text,</span>

                </div>

                <div class="sql_date">
                    <input type="text" id="sql_date_text" placeholder="Д.Н." name="sql_date_text">
                    <span> text,</span>

                </div>

                <div class="sql_color">
                    <input type="text" id="sql_color_text" placeholder="Ул. Колір" name="sql_color_text">
                    <span> text,</span>

                </div>

                <div class="sql_height">
                    <input type="text" id="sql_height_text" placeholder="Зріст" name="sql_height_text">
                    <span> text,</span>

                </div>

                <div class="sql_weight">
                    <input type="text" id="sql_weight_text" placeholder="Вага" name="sql_weight_text">
                    <span> text,</span>

                </div>

                <div class="sql_email">
                    <input type="text" id="sql_email_text" placeholder="Пошта" name="sql_email_text">
                    <span> text,</span>

                    <input type="text" name="check_email_num" id="check_email_num" placeholder="Розмір" maxlength="2">
                </div>

                <div class="sql_login">
                    <input type="text" id="sql_login_text" placeholder="Логін" name="sql_login_text">
                    <span> text,</span>

                    <input type="text" name="check_login_num" id="check_login_num" placeholder="Розмір" maxlength="2">
                </div>

                <div class="sql_password">
                    <input type="text" id="sql_password_text" placeholder="Пароль" name="sql_password_text">
                    <span> text,</span>

                    <input type="text" name="check_password_num" id="check_password_num" placeholder="Розмір"
                           maxlength="2">
                </div>


            </div>
            <div class="end_sql_create">
                <span>};</span>
            </div>
        </div>


        <br>
        <div class="num_count">
            <span> Кількість особистостей </span>
            <input type="text" name="osobistist_num" id="osobistist_num" placeholder="Кількість">
            <input type="hidden" name="temp_reshenie" id="temp_reshenie">

        </div>
</div>
        <div class="res_sql">
             <input type="hidden" name="temp_reshenie" id="temp_reshenie">
            <div class="gen_sql">
                <input type="submit" id="generate_n_user_submit" name="generate_n_user_submit" value="Згенерувати">
                <input type="reset" name="Reset" value="Очистити">
                <!--                <input type="button" name="Downloading" value="Скачати" onclick="download(document.querySelector('#result').innerHTML )">-->
                <input type="button" name="Downloading" id="Downloading" value="Скачати"
                       onclick="download(document.getElementById('temp_reshenie').value)">
            </div>
        </div>
        <br><br>

        <div class="result_from_php" id="result_from_php">


            <?

            include "../../php/sql_generator_script.php";

            ?>

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
