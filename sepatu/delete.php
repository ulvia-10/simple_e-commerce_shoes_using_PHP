<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<?php
		//include database connection file
		include_once("config.php");
		//get id from URL to delete that user
		$id_sepatu=$_GET['id_sepatu'];
		//menghapus baris dari tabel berdasarkan id
		$result=mysqli_query($mysqli, "DELETE from sepatu where id_sepatu=$id_sepatu");
		//After delete redirect to Home, so that latest user list will be displayed.
		header("Location:index.php");
		?>
</body>
</html>