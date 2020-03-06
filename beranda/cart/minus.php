<?php
include '../../user/config.php';

$id_user= $_POST['id_user'];
$id_sepatu=$_POST['id_sepatu'];

$sqlCek=mysqli_query($mysqli, "select * from cart where id_sepatu= $id_sepatu && id_user=$id_user");
// echo "select * from cart where id_sepatu= $id_sepatu && id_user=$id_user"; die;
$row = mysqli_fetch_array($sqlCek);
if($row[2]==1){
    $sql="delete from cart where id_sepatu =$id_sepatu && id_user=$id_user";
}else{
    $sql="update cart set jumlah = jumlah-1 where id_sepatu=$id_sepatu && id_user=$id_user";
}
mysqli_query($mysqli,$sql);
header("Location: ../cart.php");
?>