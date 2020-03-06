
<?php
include '../../user/config.php';

$id_user= $_POST['id_user'];
$id_sepatu=$_POST['id_sepatu'];

$a = "update cart set jumlah = jumlah+1 where id_sepatu = $id_sepatu && id_user =$id_user";
$sqlCek= mysqli_query($mysqli, $a);
$row=mysqli_fetch_array($sqlCek);
header("Location: ../cart.php");
?>