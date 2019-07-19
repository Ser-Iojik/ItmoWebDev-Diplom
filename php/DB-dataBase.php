<?php
$host = "localhost";   // имя или ip-адрес сервера MySQL 
$user = "salere47_vsegda";   // имя пользователя, под которым вы можете работать с базой данных 
$pass = "Vsegda5296";    // пароль для доступа к БД 
$db = "salere47_vsegda"; // название базы данных

if(!mysql_connect($host, $user, $pass))  { exit(mysql_error()); }// выводится ошибка  
$connect = @mysql_connect($host, $user, $pass); 

// Проверяем правильно выбрана ли база данных, существует ли она. 
if(!@mysql_select_db($db, $connect)) { die(mysql_error());}

?>
