<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/about_me.css">

    <title>Генератор личности</title>
    <link rel="shortcut icon" href="../../image/ico.ico" type="image/x-icon"

</head>

<header>
    <?
    include "../../template/interface/header.php";
    ?>
</header>
<script type="text/javascript">
    <!--

    function on_off(name) {

        document.getElementById(name).style.display = "block"

    }


    -->
</script>

<body>
<div class="about_me_block">
    <div style="display: flex">
        <div class="image_block">
            <a href="http://csn.zntu.edu.ua"><abbr title="Перейти на сайт кафедри">
                    <img src="..//../../image/csn_logo.png" width="200" height="100" vspace="10">
            </a>
        </div>

        <div class="about_me_table_block">
            <TABLE border=1 align=center bordercolor=000000>
                <TR>
                    <TH COLSPAN=2>
                        Про себе
                    </TH>
                </TR>

                <TR>
                    <TD align=center valign=middle>Навчаюсь в:</TD>
                    <TD align=center valign=middle>НУ"ЗП"</TD>
                </TR>
                <TR>
                    <TD align=center valign=middle>Курс:</TD>
                    <TD align=center valign=middle>3 курс</TD>
                </TR>
                <TR>
                    <TD align=center valign=middle>Кафедра:</TD>
                    <TD align=center valign=middle>КСМ</TD>
                </TR>
                <TR>
                    <TD align=center valign=middle>Мови програмування:</TD>
                    <TD align=center valign=middle>Java, Python, C++, PHP, JS.</TD>
                </TR>
            </TABLE>
        </div>
    </div>
    <br>
    <br>


    <div class="github_block">
        <input type="button" onclick="on_off('git')" value="Відобразити посилання на GitHub">
        <a href="https://github.com/DimaK0st" id="git" target="_blank">https://github.com/DimaK0st</a>
    </div>
    <div class="telegram_block">
        <input type="button" onclick="on_off('teleg')" value="Відобразити посилання на Telegram">
        <a href="https://t.me/Dima_Koste" id="teleg" target="_blank">https://t.me/Dima_Koste</a>
    </div>

<div class="youtube_block">
    <iframe class="youtube" src="https://www.youtube.com/embed/l8CE6d_8ozw" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>
</div>


</body>
</html>


