<style>
.container{
	display: flex;
	align-items : center;
	justify-content: center;
	
	height: 100%;
}
</style>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width , initial-scale=1.0">
				<!-- load bootstrap css -->
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
					<!-- load jquery and bootstrap js -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/popper.min.js"></script>
					<script src="assets/js/bootstrap.js"></script>
					
				</head>
<body>
<body background = "gambar.jpg">
<div class = "container">
<div class="card col-4 sm-4">
<b><h1 align = "center"><font face="Harlow Solid Italic" size="100%" color = "#FF0000">Login</font></h1></b>
<div class="card-body">
<form method="POST" action="Beranda.php">

    <form method="post">
    	Username : <input type="text" name="user" placeholder="Ucok" required="required" />
		<br>
			<br>

        Password : <input type="password" name="pass" placeholder="1234" required="required" />
		<br>
		<br>
        <button type="submit" class="btn btn-primary btn-block btn-large">login</button>
    </form>
</div>
</div>
</div>
</form>
</body>
</html>