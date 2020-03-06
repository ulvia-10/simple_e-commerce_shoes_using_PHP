<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/try/user/user.php">
</head>
<body>
		<?php
		//include database connection file
		include_once("config.php");
		//get id from URL to delete that user
		$id_user=$_GET['id_user'];
		//menghapus baris dari tabel berdasarkan id
		$result=mysqli_query($mysqli, "DELETE from user where id_user=$id_user");
		//After delete redirect to Home, so that latest user list will be displayed.
		header("Location:user.php");
		?>
</body>
</html>