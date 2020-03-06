<?php
include '../../user/config.php';

$id_user=['id_user'];
$id_sepatu=['$id_sepatu'];

$c="delete from cart";
$cek= mysqli_query($mysqli, $c;
$row=mysqli_fetch_array($cek);

header("Location: ../cart.php"
?>