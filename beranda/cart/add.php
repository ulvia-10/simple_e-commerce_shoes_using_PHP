<?php
include '../../user/config.php';

$id_user= $_POST['id_user'];
$id_sepatu=$_POST['id_sepatu'];
$sqlCek=mysqli_query($mysqli, "select * from cart where id_sepatu = $id_sepatu && id_user=$id_user");
// $sql ="update cart set jumlah= jumlah+1 where id_sepatu = $id_sepatu && id_user=$id_user";
$row=mysqli_fetch_array($sqlCek);
// echo $row[1];die;
if($row[1] == $id_sepatu){
    $sql="update cart set jumlah= jumlah+1 where id_sepatu= $id_sepatu && id_user= $id_user";
}else{
    $sql="insert into cart values ($id_user,$id_sepatu,1)";
}
mysqli_query($mysqli,$sql);
header("Location: ../katalog.php");
?> 