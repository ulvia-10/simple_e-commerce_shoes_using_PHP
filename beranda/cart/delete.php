<?php
include '../../user/config.php';

$id_user= $_POST['id_user'];
$id_sepatu=$_POST['id_sepatu'];

$b ="delete from cart where id_sepatu = $id_sepatu && id_user= $id_user";
$cek= mysqli_query($mysqli, $b);
$row=mysqli_fetch_array($cek);
header("Location: ../cart.php");
?>