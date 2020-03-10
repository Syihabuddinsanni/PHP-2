<?php
session_start();
if(isset($_SESSION["user'])){
	header("Location:beranda.php");
}
include ("function.php");

?>
<html>
<head><title>LOGIN</title></head>
<body>
	<?php
	if(isset($_GET["error])){
		if($_GET["error"] == "wrong){
			echo '<h3>Username dan Password Salah!</h3>';
		}
	}
	if(isset($get["notif"])){
		if($_GET["notif" == logout){
			echo '<h3>Berhasil Logout!</h3>';
		}
	}
	if(isset($_POST['submit')){
		echo do_login($_POST['username'], $_POST['password']);
	}
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Username : <input type="text" name="username"><br>
	Password : <input type="password" nae="password"><br>
	<input type="submit" name="submit" value="SIGN IN">
	</form>
	</body>
	</html>