<?php
// отключаем варнинги
error_reporting(E_ERROR | E_PARSE);

// подключил файл с функциями
include($_SERVER['DOCUMENT_ROOT'].'/api/functions.php');

$db = mysqli_connect('localhost', 'root', '', '27102018_3project');
mysqli_set_charset($db, 'utf8');