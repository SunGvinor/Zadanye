
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание</title>
</head>
<style>
    h1{
        color: olive;
        font-family: "Bauhaus 93",serif;
        font-size: 300%;
        text-align: center;
    }
    body{
        background-color: antiquewhite;
    }
    div{
        color: olive;
        font-size: 140%;
        font-family: fantasy;
    }
</style>
<body>
<h1> Ваши данные </h1>
<hr>
<div>
    <?php
    date_default_timezone_set('Europe/London');
    $_monthsList = array(
    "1"=>"Января",
    "2"=>"Февраля",
    "3"=>"Марта",
    "4"=>"Апреля",
    "5"=>"Мая",
    "6"=>"Июня",
    "7"=>"Июля",
    "8"=>"Августа",
    "9"=>"Сентября",
    "10"=>"Октября",
    "11"=>"Ноября",
    "12"=>"Декабря");
    ?>
<?php if(isset($_GET["fname"]) and trim($_GET["fname"])!=='') {
   echo "Имя - "; echo $_GET["fname"]; echo " ( "; echo  strlen($_GET["fname"]) ; echo " ) ";}
else{
    echo "Error";
} ?><br></div>
<div> <?php if(isset($_GET["lname"]) and trim($_GET["lname"])!=='') {
        echo "Фамилия - "; echo $_GET["lname"]; echo " ( "; echo  strlen($_GET["lname"]) ; echo " ) ";}
    else{
        echo "Error";
    } ?> <br></div>
<div> <?php
    $date = $_GET["date"];
    $timestamp = strtotime($date);
    $month = $_monthsList[date("n", $timestamp)];
    if(isset($_GET["date"]) and trim($_GET["date"])!=='') {
        echo "Дата рождения - "; echo date("j", $timestamp)." ".$month." ".date("Y", $timestamp); echo " ( "; echo  strlen( date("j", $timestamp)." ".$month." ".date("Y", $timestamp)) ; echo " ) ";}
    else{
        echo "Error";
    } ?> <br></div>
<div> <?php if(isset($_GET["tel"]) and trim($_GET["tel"])!=='') {
        echo "Номер телефона - "; echo $_GET["tel"]; echo " ( "; echo  strlen($_GET["tel"]) ; echo " ) ";}
    else{
        echo "Error";
    } ?> <br></div>
<div> <?php if(isset($_GET["email"]) and trim($_GET["email"])!=='') {
        echo "Электронная почта - "; echo $_GET["email"]; echo " ( "; echo  strlen($_GET["email"]) ; echo " ) ";}
    else{
        echo "Error";
    } ?> <br></div>
<?php
?>
</body>
</html>