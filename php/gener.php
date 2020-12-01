<?
//Начало создания комментариев в файле gener_php 14.11.2020 22:02
//Конец создания комментариев 14.11.2020 23:15

//Подключение к Базе Данных
//$str_bd = new mysqli("localhost", "a0492513_gen_user", "zZ774488559966", "a0492513_gen_user");
$str_bd = mysqli_connect("127.0.0.1", "root", "root", "gen_user");

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
        echo "<script> document.getElementById('fio_text').value='" . $f['surname'] . " " . $f['name'] . " " . $f['otchestvo'] . "' </script>";
    }
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
    $rand_addres = random_int(0, $rand_count_addres - 1);
    $strSQL = "SELECT `region` as obl, `title` as gor, `zip` as ind , `street` as yli FROM `sity` WHERE `num`=" . $rand_addres;
    $r = mysqli_query($str_bd, $strSQL);
    //Получаем значение благодаря рандомной переменной
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        echo "<script> document.getElementById('address_text').value='$f[ind]:$f[obl] обл.,$f[gor],$f[yli],'+getRandomInt(0, 167)+','+getRandomInt(0, 357) </script>";
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
        echo "<script> document.getElementById('profession_text').value='$f[profession]'</script>";
    }
}

$gender = $_GET['course'];   //get запрос с значениями пола, если рандом, то присваиваем 1 или 2 (1- мужской, 2- женский)
if ($gender == "3") {
    $gender = random_int(1, 2);
}


$sum_arr_text = array('fio_text', 'address_text', 'profession_text', 'Nomer', 'login_txt', 'login_num', 'password_txt', 'password_num', 'Email_txt', 'email_num', 'lang_text', 'date_text', 'color_text', 'height_text', 'weight_text');
//Эта вся конструкция, что бы значения в форме не удалялись

foreach ($sum_arr_text as &$temp_iter_arr_) {
    if ($_GET[$temp_iter_arr_] != "")
        echo "<script>document.getElementById('$temp_iter_arr_').value='" . $_GET[$temp_iter_arr_] . "';</script>";
}

//Здесь генерируются полностью все значения в поля
if ($_GET["all_gener"] == 'Згенерувати') {
    gen_fio($gender);
    gen_address();
    gen_profession();
    echo "<script>gen_all();</script>";
}
// А это у меня определение что нужно вызвать из БД
if ($_GET["fio_btn"] == 'Оновити ПІБ') {
    call_user_func('gen_fio', $gender);
}
if ($_GET["address_btn"] == "Оновити адресу") {
    call_user_func('gen_address');
}
if ($_GET["profession_btn"] == "Оновити професію") {
    call_user_func('gen_profession');
}

//Закрываем поток обмена с базой данных
mysqli_close($str_bd);


?>