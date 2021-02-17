<?

require_once("lib/connection.php");
	

function fetch_all($sql){

	global $link;

	$row=mysqli_query($link,$sql);
	$arr=[];
	$arr=mysqli_fetch_all($row,MYSQLI_ASSOC);
	return $arr;
}


function getTeachers(){

	$query="SELECT * FROM teachers";
	return fetch_all($query);
}

function getCourses(){

	$query="SELECT * FROM courses";
	return fetch_all($query);
}



function getGroups(){

	$query="SELECT * FROM groups";
	return fetch_all($query);
}


function login($email,$pass){
	global $error;

	if(empty($email) || empty($pass)){
		 $error="Логин или пароль пустой";
	}
	else{
		$query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
		echo $query;
		$user=fetch_all($query);
		if(!$user){
			$error="Логин или пароль не правильный ";
		}else{
			//var_dump($user[0]["email"]);
			$_SESSION['user']=$user[0]['email'];
		}
	}
}



//повторяться  

function getAll($table){

	$query="SELECT * FROM $table";
	return fetch_all($query);
}




//а если лимит нужен?

/*
function getAll($table, $limit=5){

	$query="SELECT * FROM $table LIMIT $limit";
	return fetch_all($query);
}

*/

//а если хочу условие?




