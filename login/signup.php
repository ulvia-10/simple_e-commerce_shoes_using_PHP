<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    if (!empty($_GET['pesan'])) {	
	?>
	<script type="text/javascript">
		alert("Failed");
	</script>
	<?php
		}
	?>
	
	<div class="kotak_login">
		<div style="text-align: center;">
		<img src="../img/logo.png" width="100px"></div>
		<p class="tulisan_login"><b>Sign Up</b></p>
	<form action="proses_signup.php" method="POST">
            <p>Nama<br><input type="text" class="form_login" name="nama" placeholder="Enter name" required ></p>
			<p>Email<br><input type="text" class="form_login" name="email" placeholder="Enter email" required ></p>
            <p>Username<br><input type="text" class="form_login" name="username" placeholder="Enter username" required ></p>
			<p>Password <br><input type="password" class="form_login" name="password" placeholder="Enter password" required></p>
			<input type="submit" class="tombol_login" value="REGISTER" name="Submit">
			
		</div>
	</form>
	</div>
</body>
</html>