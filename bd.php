<?php
$link = null;
function startbd(){
global $link;
$hostname = 'localhost';	
$username = 'root'; 
$password = '';
$dbName   = 'php2';

setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

$link = mysqli_connect($hostname, $username, $password, $dbName) or die('Нет подключения к $dbName');
mysqli_query($link, 'SET NAMES utf8');
mysqli_query($link, 'SET CHARACTER SET utf8');
}
?>