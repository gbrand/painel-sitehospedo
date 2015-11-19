<?php
require_once("classes/Global.php");
require_once("classes/Url.class.php");
require_once('classes/Adsl.php');
require_once('classes/Cliente.php');
require_once('classes/Dominio.php');
require_once('classes/Email.php');
require_once('classes/Firebird.php');
require_once('classes/Ftp.php');
require_once('classes/KingBox.php');
require_once('classes/Kinghost.php');
require_once('classes/KinghostException.php');
require_once('classes/Mssql.php');
require_once('classes/Mysql.php');
require_once('classes/Pgsql.php');
require_once('classes/Plano.php');
require_once('classes/functions.php');
$basePath = "http://hospedo.app/";


$user = "contato@gbrand.com.br";
$pass = "gbrand@@2015";
$cliente = "187381";
$dominio = "391872";
$dominios = new Dominio($user , $pass);
$getDomnios = arrayToObject($dominios->getDominios($cliente));
// print_r((object ) $getDomnios['body']);
$emails = new EMail($user,$pass);

?>