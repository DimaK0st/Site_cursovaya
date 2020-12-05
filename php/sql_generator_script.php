<?php
$alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'v', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
//Подключение к Базе Данных
//$str_bd = new mysqli("localhost", "a0492513_gen_user", "zZ774488559966", "a0492513_gen_user");
$str_bd = mysqli_connect("127.0.0.1", "root", "root", "gen_user");
//Эта функция вызывает все остальные функции которые в свою очередь генерируют определённые значения



$arr_name_pole = array('create_table_text','sql_fio_text','sql_adres_text','sql_profesia_text','sql_nomer_text','sql_language_text','sql_date_text','sql_color_text','sql_height_text','sql_weight_text','sql_email_text','check_email_num','sql_login_text','check_login_num','sql_password_text','check_password_num','osobistist_num');

foreach ($arr_name_pole as &$temp_iter_arr_) {
    if ($_GET[$temp_iter_arr_] != "")
        echo "<script>document.getElementById('$temp_iter_arr_').value='" . $_GET[$temp_iter_arr_] . "';</script>";
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
    //Выбор пола для получения количества записей в базе данных
    if ($gender == "1") {
        $strSQL = "SELECT COUNT(`kod_name`) as counter FROM `name_men` UNION SELECT COUNT(`kod_otchestvo`) as counter FROM `otchestvo_men`
    UNION SELECT COUNT(`kod_surname`) as counter FROM `surname_man`";
    } elseif ($gender == "2") {
        $strSQL = "SELECT COUNT(`kod_name`) as counter FROM `name_women` 
UNION SELECT COUNT(`kod_otchestvo`) as counter FROM `otchestvo_women`
UNION SELECT COUNT(`kod_surname`) as counter FROM `surname_woman`";
    }
    //Выполнение запроса
    $r = mysqli_query($str_bd, $strSQL);

    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        $arr_res_fio[$i] = $f['counter']; // В массив заносим значения с количеством записей в базах (name, otchestvo, surname)
        //Такое решение было принято для того что бы запросы выполнялись быстрее, если без UNION, то запрос выполнялся бы 2 секунды, а сейчас 0,002секунды
    }
    //Переменные для генерации рандомного фио
    $rand_name = random_int(1, $arr_res_fio[0] - 1);
    $rand_otchestvo = random_int(1, $arr_res_fio[1] - 1);
    $rand_surname = random_int(1, $arr_res_fio[2] - 1);


    if ($gender == "1") {
        $strSQL = "SELECT `surname` , `name`, `otchestvo`
FROM `name_men`, `otchestvo_men`, `surname_man`
WHERE kod_name=" . $rand_name . " and kod_otchestvo=" . $rand_otchestvo . " and kod_surname=" . $rand_surname;
    } elseif ($gender == "2") {
        $strSQL = "SELECT `surname` , `name`, `otchestvo`
FROM `name_women`, `otchestvo_women`, `surname_woman`
WHERE kod_name=" . $rand_name . " and kod_otchestvo=" . $rand_otchestvo . " and kod_surname=" . $rand_surname;
    }

    $r = mysqli_query($str_bd, $strSQL);
    //Получаем значения благодаря рандомным переменным
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        $res_fio = $f['surname'] . " " . $f['name'] . " " . $f['otchestvo'];
    }
    return $res_fio;

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

function generation_sql2()
{
    global $str_bd;

    $arr_insert = array();


    $iteration = 0;
    $osobistist_num = 1;
    $gender = $_GET['course'];   //get запрос с значениями пола, если рандом, то присваиваем 1 или 2 (1- мужской, 2- женский)
    $gender_temp = 0;
    if ($_GET['osobistist_num'] != '') {
        $osobistist_num = $_GET['osobistist_num'];
    }

    $result_text = "";
    $result_text_file = "";

    while ($iteration < $osobistist_num) {

        $arr_insert_temp = array();


        if ($_GET['sql_fio_text'] != '') {

            if ($gender == "3") {
                global $gender_temp;
                $gender_temp = random_int(1, 2);
                array_push($arr_insert_temp, "`" . gen_fio($gender_temp) . "`");
            } else {
                array_push($arr_insert_temp, "`" . gen_fio($gender) . "`");
            }

        }

        if ($_GET['sql_adres_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_address() . "`");
        }

        if ($_GET['sql_profesia_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_profession() . "`");
        }

        if ($_GET['sql_nomer_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_nomer_php() . "`");
        }

        if ($_GET['sql_language_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_lang_php() . "`");
        }

        if ($_GET['sql_date_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_randomDate_php() . "`");
        }

        if ($_GET['sql_color_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_color_php() . "`");
        }

        if ($_GET['sql_height_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_height_php() . "`");
        }

        if ($_GET['sql_weight_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_weight_php() . "`");
        }

        if ($_GET['sql_email_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_email_php() . "`");
        }

        if ($_GET['sql_login_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_login_php() . "`");
        }

        if ($_GET['sql_password_text'] != '') {
            array_push($arr_insert_temp, "`" . gen_password_php() . "`");
        }

        $temp_for = "(";
        for ($i = 0; $i < count($arr_insert_temp); $i++) {
            if ($i != 0) {
                $temp_for .= ", ";
            }

            $temp_for .= $arr_insert_temp[$i];


        }
        $temp_for .= ")";
        array_push($arr_insert, $temp_for );


        $iteration++;
    }

    for ($i = 0; $i < count($arr_insert); $i++) {
        if ($i != 0) {
            $result_text .= ", ". "<br><br>";
            $result_text_file .= ", ";
        }

        $result_text.=$arr_insert[$i];
        $result_text_file.=$arr_insert[$i];


    }

    echo $result_text.";";
    return $result_text_file.";";

//Закрываем поток обмена с базой данных
    mysqli_close($str_bd);

}


function generation_sql1()
{
    $arr_insert = array();
    $arr_create_db = array();

    $result_create_database = "CREATE TABLE `" . $_GET['create_table_text'] . "` ( <br>";
    $result_create_database_file = "CREATE TABLE `" . $_GET['create_table_text'] . "` ( ";
    $result_insert_text = "<br> INSERT INTO`" . $_GET['create_table_text'] . "`(";
    $result_insert_text_file = "INSERT INTO`" . $_GET['create_table_text'] . "`(";

    if ($_GET['sql_fio_text'] != '') {


        array_push($arr_insert, "`" . $_GET['sql_fio_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_fio_text'] . "`");

    }

    if ($_GET['sql_adres_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_adres_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_adres_text'] . "`");

    }

    if ($_GET['sql_profesia_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_profesia_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_profesia_text'] . "`");

    }

    if ($_GET['sql_nomer_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_nomer_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_nomer_text'] . "`");
    }

    if ($_GET['sql_language_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_language_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_language_text'] . "`");

    }

    if ($_GET['sql_date_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_date_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_date_text'] . "`");
    }

    if ($_GET['sql_color_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_color_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_color_text'] . "`");
    }

    if ($_GET['sql_height_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_height_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_height_text'] . "`");
    }

    if ($_GET['sql_weight_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_weight_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_weight_text'] . "`");
    }

    if ($_GET['sql_email_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_email_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_email_text'] . "`");
    }

    if ($_GET['sql_login_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_login_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_login_text'] . "`");
    }

    if ($_GET['sql_password_text'] != '') {
        array_push($arr_insert, "`" . $_GET['sql_password_text'] . "`");
        array_push($arr_create_db, "`" . $_GET['sql_password_text'] . "`");
    }

    for ($i = 0; $i < count($arr_insert); $i++) {

        if ($i != 0) {
            $result_insert_text .= ", ";
            $result_insert_text_file .= ", ";
        }
        if ($i < count($arr_create_db) - 1) {
            $result_create_database .= $arr_create_db[$i] . " text, <br>";
            $result_create_database_file .= $arr_create_db[$i] . " text, ";
        } else {
            $result_create_database .= $arr_create_db[$i] . " text ";
            $result_create_database_file .= $arr_create_db[$i] . " text ); ";
        }

        $result_insert_text .= $arr_insert[$i];
        $result_insert_text_file .= $arr_insert[$i];

    }
    $result_insert_text .= ") VALUES <br><br>";
    $result_insert_text_file .= ") VALUES ";
    $result_create_database.="); <br>";
    echo $result_create_database . $result_insert_text;

    return $result_create_database_file . $result_insert_text_file;
}


if ($_GET['generate_n_user_submit']=="Згенерувати"){

    $res1= generation_sql1();
    $res2= generation_sql2();
    $full_res=$res1.$res2;
    echo "<script>document.getElementById('temp_reshenie').value='$full_res'</script>";
}

?>
