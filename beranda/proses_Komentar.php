<?php
session_start();
include '../user/config.php';

$varId = $_POST['id'];
$komentar = $_POST['form_Komen'];
$nama = $_POST['nama'];
$email= $_POST['email'];

$sql="insert into tb_komentar values ('','$nama','$email','$komentar')";
$query = mysqli_query($mysqli, $sql);

header("location:about.php");
?>