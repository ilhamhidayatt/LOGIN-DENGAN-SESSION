<!DOCTYPE html>
<html>
<head>
    <form action="proses1.php" method="post">
	<title>SILAHKAN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>MASUKKAN USERNAME DAN PASSWORD DENGAN BENAR </h1>
    <form action="proses1.php" method="post">
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">

		</form>
		
	</div>
 
 
</body>
</html>