<?
require_once("lib/connection.php");
	

function fetch_all($sql){

	global $link;

	$row=mysqli_query($link,$sql);
	$arr=[];
/*
	while ($res=mysqli_fetch_assoc($row)){

	    $arr[]=$res;
	}*/
	$arr=mysqli_fetch_all($row,MYSQLI_ASSOC);
	return $arr;
}


function getTeachers(){

	$query="SELECT * FROM teachers";
	return fetch_all($query);
}