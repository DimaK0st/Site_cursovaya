<?php
$alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'v', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');

//Подключение к Базе Данных
//$str_bd = new mysqli("localhost", "a0492513_generate", "zZ774488559966", "a0492513_generate");
$str_bd = mysqli_connect("127.0.0.1", "root", "root", "generate");
//Эта функция вызывает все остальные функции которые в свою очередь генерируют определённые значения

$iter = 0;
$sum_arr_checkbox = array('ПІБ', 'Адреса', 'Професія', 'Номер', 'Мова', 'Дата', 'Колір', 'Зріст', 'Вага', 'Пошта', 'Логін', 'Пароль');
$sum_arr_text = array('check_email_num', 'check_login_num', 'check_password_num', 'osobistist_num');

foreach ($sum_arr_checkbox as &$temp_iter_arr_checkbox) {
    echo "<script> document.getElementById('$temp_iter_arr_checkbox').checked=false;</script>";
    if ($_GET[$temp_iter_arr_checkbox] == 'on') {

        echo "<script> document.getElementById('$temp_iter_arr_checkbox').checked=true;</script>";
    }
}


foreach ($sum_arr_text as &$temp_iter_arr_text) {
    if ($_GET[$temp_iter_arr_text] != '') {
        echo "<script>document.getElementById('$temp_iter_arr_text').value='" . $_GET[$temp_iter_arr_text] . "';</script>";
    }
}

function gen_all_php()
{
    gen_nomer_php();
    gen_email_php();
    gen_lang_php();
    gen_randomDate_php();
    gen_login_php();
    gen_password_php();
    gen_color_php();
    gen_height_php();
    gen_weight_php();
}

function gen_nomer_php()
{
    $res_nomer = "";
    $res_nomer .= "+38";
    $res_nomer .= "(";
    $arr_nomer = array('067', '068', '096', '097', '098', '066', '095', '099', '063', '093', '092', '094');
    $index = random_int(0, count($arr_nomer) - 1);
    $item = $arr_nomer[$index];
    $res_nomer .= $item;
    /* +38-***-***-**-** */
    $res_nomer .= ")";
    $res_nomer .= random_int(0, 9);
    $res_nomer .= random_int(0, 9);
    $res_nomer .= random_int(0, 9);
    $res_nomer .= "-";
    $res_nomer .= random_int(0, 9);
    $res_nomer .= random_int(0, 9);
    $res_nomer .= "-";
    $res_nomer .= random_int(0, 9);
    $res_nomer .= random_int(0, 9);
    return $res_nomer;
}

function gen_email_php()
{
    global $alphabet;
    $len = 10;
    if ($_GET['check_email_num'] != "") {
        $len = $_GET['check_email_num'];
    }

    $domain_email = array('@yandex.ua', '@rambler.ua', '@qip.ua', '@bigmir.net', '@ukr.net', '@hotmail.com', '@yahoo.com', '@gmail.com', '@mail.ua');

    $res_email = "";
    $i = 0;
    while ($i < $len) {

        $res_email .= $alphabet[random_int(0, count($alphabet) - 1)];

        $i += 1;
    }
    $res_email .= $domain_email[random_int(0, count($domain_email) - 1)];
    return $res_email;
}


function gen_lang_php()
{
    $res_lang = "";
    $arr_lang = array('Англійська', 'Хінді', 'Іспанська', 'французька', 'Китайська', 'Арабська', 'Бенгальська', 'Російська', 'Індонезійська', 'Португальська', 'Німецька', 'Польська', 'Арабська', 'Японська');
    $res_lang .= $arr_lang[random_int(0, count($arr_lang) - 1)];

    return $res_lang;

}

function gen_color_php()
{
    $arr_color = ['Червоний', 'Помаранчевий', 'Жовтий', 'Зелений', 'Блакитний', 'Синій', 'Фіолетовий'];
    $res_arr = $arr_color[random_int(0, count($arr_color) - 1)];
    return $res_arr;
}

function gen_randomDate_php()
{
// использование функционала date php для создания случайной даты в заданном диапазоне
// начало диапазона дат
    $sDateFrom = "1980-01-01";
// конец диапозона дат
    $sDateTill = "2002-01-01";
    $sDate = date("d.m.Y", mt_rand(strtotime($sDateFrom), strtotime($sDateTill)));
    return $sDate;
}

function gen_login_php()
{
    global $alphabet;
    $length = 10;
    if ($_GET['check_login_num'] != "") {
        $length = $_GET['check_login_num'];
    }
    $res_login = "";
    $i = 0;
    while ($i < $length) {
        $res_login .= $alphabet[random_int(0, count($alphabet) - 1)];
        $i++;
    }
    return $res_login;
}

function gen_password_php()
{
    global $alphabet;
    $length = 10;
    if ($_GET['check_password_num'] != "") {
        $length = $_GET['check_password_num'];
    }
    $res_password = "";
    $i = 0;

    while ($i < $length) {
        $res_password .= $alphabet[random_int(0, count($alphabet) - 1)];;
        $i++;
    }
    return $res_password;
}

function gen_height_php()
{
    $height = random_int(160, 195);
    return $height;
}

function gen_weight_php()
{
    $height = random_int(60, 92);
    return $height;
}


//Здесь генерируется ФИО с базы данных
function gen_fio($gender)
{
    global $str_bd;

    $name = exec_query("SELECT names.name FROM names WHERE names.kod_gendera = '$gender' ORDER BY rand() LIMIT 1");
    $surname=exec_query("SELECT surnames.surname FROM surnames WHERE surnames.kod_gendera = '$gender' ORDER BY rand() LIMIT 1");
    $otchestvo= exec_query("SELECT otchestvo.otchestvo FROM otchestvo WHERE otchestvo.kod_gendera = '$gender' ORDER BY rand() LIMIT 1");
    return $surname . " " . $name . " " . $otchestvo;
}

function exec_query($str_query){
    global $str_bd;

    $result = mysqli_query($str_bd, $str_query) or die("Ошибка " . mysqli_error($str_bd));
    return mysqli_fetch_row($result)[0];


}


//Здесь генерируется адрес с базы данных
function gen_address()
{

    global $str_bd;
    $strSQL = "SELECT max(`num`) as counter_address FROM `sity`";

    $r = mysqli_query($str_bd, $strSQL);
    //получение количества записей в базе данных
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        $rand_count_addres = $f['counter_address'];

    }
    //Переменная для генерации рандомного адреса
    $rand_addres = random_int(1, $rand_count_addres - 1);
    $strSQL = "SELECT `region` as obl, `title` as gor, `zip` as ind , `street` as yli FROM `sity` WHERE `num`=" . $rand_addres;
    $r = mysqli_query($str_bd, $strSQL);
    //Получаем значение благодаря рандомной переменной
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        return "$f[ind]:$f[obl] обл.,$f[gor],$f[yli]," . random_int(1, 324) . "/" . random_int(1, 245);
    }


}


//Здесь генерируется профессия с базы данных
function gen_profession()
{

    global $str_bd;
    $strSQL = "SELECT max(`kod_professii`) as counter_profession FROM `profession`";

    $r = mysqli_query($str_bd, $strSQL);
    //получение количества записей в базе данных
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        $rand_count_profession = $f['counter_profession'];

    }
    //Переменная для генерации рандомной профессии
    $rand_profession = random_int(1, $rand_count_profession - 1);
    $strSQL = "SELECT `professia` as profession FROM `profession` WHERE `kod_professii`=" . $rand_profession;
    $r = mysqli_query($str_bd, $strSQL);
    //Получаем значение благодаря рандомной переменной
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        return $f['profession'];
    }


}

function generation()
{
    global $str_bd;
    $iteration = 0;
    $osobistist_num = 1;
    $gender = $_GET['course'];   //get запрос с значениями пола, если рандом, то присваиваем 1 или 2 (1- мужской, 2- женский)
    $gender_temp = 0;
    if ($_GET['osobistist_num'] != '') {
        $osobistist_num = $_GET['osobistist_num'];
    }

    $result_text = "";

    while ($iteration < $osobistist_num) {
        $result_text .= "<div class='result_from_forma' style='word-wrap: break-word'>";

        if ($_GET['ПІБ'] == 'on') {

            $result_text .= " <div><b>ПІБ:</b> ";
            if ($gender == "3") {
                global $gender_temp;
                $gender_temp = random_int(1, 2);
                $result_text .= gen_fio($gender_temp);
            } else {
                $result_text .= gen_fio($gender);
            }
            $result_text .= "</div> ";

        }

        if ($_GET['Адреса'] == 'on') {

            $result_text .= " <div><b>Адреса:</b> ";
            $result_text .= gen_address();
            $result_text .= "</div> ";

        }

        if ($_GET['Професія'] == 'on') {

            $result_text .= " <div><b>Професія:</b> ";
            $result_text .= gen_profession();
            $result_text .= "</div> ";

        }

        if ($_GET['Номер'] == 'on') {
            $result_text .= " <div><b>Номер:</b> ";
            $result_text .= gen_nomer_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Мова'] == 'on') {
            $result_text .= " <div><b>Іноземна мова:</b>";
            $result_text .= gen_lang_php();
            $result_text .= "</div> ";

        }

        if ($_GET['Дата'] == 'on') {
            $result_text .= " <div><b>Дата народження:</b> ";
            $result_text .= gen_randomDate_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Колір'] == 'on') {
            $result_text .= " <div><b>Улюблений колір:</b> ";
            $result_text .= gen_color_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Зріст'] == 'on') {
            $result_text .= " <div><b>Зріст:</b> ";
            $result_text .= gen_height_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Вага'] == 'on') {
            $result_text .= " <div><b>Вага:</b> ";
            $result_text .= gen_weight_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Пошта'] == 'on') {
            $result_text .= " <div><b>Пошта:</b> ";
            $result_text .= gen_email_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Логін'] == 'on') {
            $result_text .= " <div><b>Логін:</b> ";
            $result_text .= gen_login_php();
            $result_text .= "</div> ";
        }

        if ($_GET['Пароль'] == 'on') {
            $result_text .= " <div><b>Пароль:</b> ";
            $result_text .= gen_password_php();
            $result_text .= "</div> ";
        }


        $result_text .= "</div>";
        $result_text .= "<br> <hr>";

        $iteration++;
    }



    echo $result_text;

//Закрываем поток обмена с базой данных
    mysqli_close($str_bd);

}


if($_GET['generate_n_user_submit']!=""){
generation();}


?>
