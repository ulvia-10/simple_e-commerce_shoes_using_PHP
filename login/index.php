<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- apabila isian login kosong  -->
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
		<p class="tulisan_login"><b>Login Here</b></p>
	<form action="login.php" method="POST">
			<p>Username<br><input type="text" class="form_login" name="username" placeholder="Enter username" required ></p>
			<p>Password <br><input type="password" class="form_login" name="password" placeholder="Enter password" required></p>
			<input type="submit" class="tombol_login" value="LOGIN">
			<p>Have an account? <a style="color: blue;" href="http://localhost/try/login/signup.php">Sign Up</a></p>
			
		</div>
	</form>
	</div>
</body>
</html>
