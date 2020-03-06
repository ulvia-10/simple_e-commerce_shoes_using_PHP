<?php
session_start();
include '../user/config.php';
$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($mysqli,"select*from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

	$_SESSION['id_user'] = $data['id_user'];
	if($data['hak_akses']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "admin";
		
		header("location:../user/index.php");

	}else if($data['hak_akses']=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "user";

		header("location:../beranda/index.php");
	
	}
}else{
		header("location:index.php?pesan=gagal");
	
	}
?>