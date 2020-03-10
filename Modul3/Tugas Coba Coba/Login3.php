<style>
.container{
	display: flex;
	align-items : center;
	justify-content: center;
	
	height: 100%;
}

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



<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>