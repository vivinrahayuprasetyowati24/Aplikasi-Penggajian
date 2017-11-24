<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="dits/sweetalert.css">
</head>
<body>
	<center>
		<div class="login">
			<span>Silahkan Login Terlebih Dahulu</span>			
		</div>
		<div class="kotak">
<form action="proses/proseslogin.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit">Login</button>
</form>
		</div>
	</center>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>