<?
include_once("config.php");


$link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$link){

	echo "Ошибка ".mysqli_connect_errno()." ".mysqli_connect_error();
	
	die();
}
?>