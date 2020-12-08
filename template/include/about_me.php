<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/drop_text.css">
    <link rel="stylesheet" href="../../css/about_me.css">


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






<div class="about_me_block">

    <div class="demo_1">
        <br>
        <input type="checkbox" id="hd_1" class="hide"/>
        <label for="hd_1">Чи є генератор особистостей незаконним?</label>

        <div>
            Ні, генератор особистостей є цілком законний.<br>
            Вся інформація на сайті генерується автоматично, та повністю не збігається з реальними людьми.
        </div>
        <br>
    </div>

    <div class="demo_2">
        <br>
        <input type="checkbox" id="hd_2" class="hide"/>
        <label for="hd_2">Чи дозволено використовувати особистості згенеровані на сайті в своїх цілях?</label>

        <div>
        Так. Сайт був створенний для того, щоб люди могли генерувати особистості автоматично, а не витрачали свій час на те щоб їх самим вигадати, а потім використовували в своїх цілях будь де.
        </div>
        <br>
    </div>



    <div class="demo_4">
        <br>
        <input type="checkbox" id="hd_4" class="hide"/>
        <label for="hd_4">Про генерацію ФІП:</label>

        <div>
            ФІП генерується з бази даних, в якій знаходиться близько тисячі записів імен, фамілій та по-батькові.
        </div>
        <br>
    </div>



    <div class="demo_5">
        <br>
        <input type="checkbox" id="hd_5" class="hide"/>
        <label for="hd_5">Про генерацію Адреси:</label>

        <div>
        Під час генерації, назва міста, вулиці та індекс беруться з бази даних, яка була сформована за допомогою відкритого джерела Укрпошти, а будинки та квартири генеруються випадково.
        </div>
        <br>
    </div>


    <div class="demo_6">
        <br>
        <input type="checkbox" id="hd_6" class="hide"/>
        <label for="hd_6">Про генерацію професії:</label>

        <div>
            Професія генерується з бази даних, в якій знаходиться близько трьох тисяч різновидних записів.
        </div>
        <br>
    </div>


    <div class="demo_7">
        <br>
        <input type="checkbox" id="hd_7" class="hide"/>
        <label for="hd_7">Про генерацію інших даних:</label>

        <div>
            Інші дані генеруються довільно, не використовуючи базу даних, тому ймовірність співпадіння з реальними людьми дорівнює нулю.
        </div>
        <br>
    </div>



















    <br>
</div>
<footer>
    <?php

    include "../../template/interface/footer.php";

    ?>
</footer>


</body>
</html>


