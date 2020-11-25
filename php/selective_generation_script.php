<?php

//Эта функция вызывает все остальные функции которые в свою очередь генерируют определённые значения
function gen_all() {
    gen_nomer();
    gen_email();
    gen_lang();
    gen_randomDate();
    gen_login();
    gen_password();
    gen_color();
    gen_height();
    gen_weight();
}

function gen_nomer_php() {
    $res_nomer = "";
    $res_nomer .= "+38";
    $res_nomer .= "(";
    $arr_nomer = array('067', '068', '096', '097', '098', '066', '095', '099', '063', '093', '092', '094');
    $index=random_int(0, count($arr_nomer));
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
    echo $res_nomer;
}
function gen_email()
{
    $len = 10;
    if ($_GET[check_email_num] != "") {
        $len = "<script>document.getElementById('email_num').value;</script>";
    }

    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $domain_email = array('@yandex.ua', '@rambler.ua', '@qip.ua', '@bigmir.net', '@ukr.net', '@hotmail.com', '@yahoo.com', '@gmail.com', '@mail.ua');

    echo count($alphabet);
    echo $alphabet[3];

    }
    /*let res_email = "";
    let i=0;
    while (i < length) {

        res_email += alphabet[Math.floor(Math.random() * alphabet.length)];
        i++;
    }
    res_email+=domain_email[Math.floor(Math.random() * domain_email.length)];
    document.getElementById("Email_txt").value = res_email;
}

function gen_lang(){
    let arr_lang = ['Англійська', 'Хінді', 'Іспанська', 'французька', 'Китайська', 'Арабська', 'Бенгальська', 'Російська', 'Індонезійська', 'Португальська', 'Німецька', 'Польська', 'Арабська', 'Японська'];
    let res_lang = arr_lang[Math.floor(Math.random() * arr_lang.length)];
    console.log(res_lang);
    document.getElementById("lang_text").value = res_lang;
}

function gen_color() {
    let arr_color = ['Червоний','Помаранчевий','Жовтий','Зелений','Блакитний','Синій','Фіолетовий'];
    document.getElementById("color_text").value = arr_color[Math.floor(Math.random() * arr_color.length)];
}

function gen_randomDate(date1='01.01.1970', date2='01/01/2002'){
    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }
    var date1 = date1 || '01-01-1970'
    var date2 = date2 || new Date().toLocaleDateString()
    date1 = new Date(date1).getTime()
    date2 = new Date(date2).getTime()
    if( date1>date2){
        document.getElementById("date_text").value = new Date(getRandomArbitrary(date2,date1)).toLocaleDateString()
    } else{
        document.getElementById("date_text").value = new Date(getRandomArbitrary(date1, date2)).toLocaleDateString()
    }
}

function gen_login() {
    let length
    if(document.getElementById('login_num').value==""){
        length = 10
    }
    else{
        length=document.getElementById('login_num').value;
    }
    let alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    let res_login = "";
    let i=0;
    while (i < length) {
        res_login += alphabet[Math.floor(Math.random() * alphabet.length)];
        i++;
    }
    document.getElementById("login_txt").value = res_login;
}

function gen_password() {
    let length
    if(document.getElementById('password_num').value==""){
        length = 10
    }
    else{
        length=document.getElementById('password_num').value;
    }
    let alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    let res_password = "";
    let i=0;
    while (i < length) {
        res_password += alphabet[Math.floor(Math.random() * alphabet.length)];
        i++;
    }
    document.getElementById("password_txt").value = res_password;
}

function gen_height() {
    document.getElementById("height_text").value = getRandomInt(160, 195);;
}

function gen_weight() {
    document.getElementById("weight_text").value = getRandomInt(55, 90);
}







*/

?>
