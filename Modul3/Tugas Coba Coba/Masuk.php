<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

function do_login($user, $pass){
	//cek kondisi jika username dan password salah
	if($user !="admin" || $pass != "admin"){
		header("location:login.php?error=wrong");

	}
//cek kondisi jika username dan password benar
	if($user == "admin" && $_POST["pass"] == "admin"){
		$_SESSION["user"] = $user;
		$_SESSION["pass"] = $pass;
		header("location:login.php");

}
function check_login(){
	//cek kondisi login session
	if (!isset($_SESSION["user"])){
		header("location:login.php");
	}
}
}
?>
