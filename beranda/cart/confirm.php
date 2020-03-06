<?php
session_start();
$id_user= $_GET['id_user'];

require_once"../../user/config.php";

$addTrans = mysqli_query($mysqli, "insert into transaksi(id_user) values ($id_user)");
$sqlIdTrans = mysqli_query($mysqli, "select*from transaksi where id_user = '$id_user' order by id_transaksi desc limit 1");
$idTrans = mysqli_fetch_array($sqlIdTrans);

$sqlCart = mysqli_query($mysqli, "select*from cart where id_user = '$id_user'");
while($rowCart = mysqli_fetch_array($sqlCart)){
    $updStok = mysqli_query($mysqli, "update sepatu set stok = stok - $rowCart[2] where id_sepatu = $rowCart[1]");

    $sqlProduk = mysqli_query($mysqli, "select * from sepatu where id_sepatu = $rowCart[1]");

    $rowProduk= mysqli_fetch_array($sqlProduk);
    
    $sub = $rowCart[2] * $rowProduk[6];

    $addtransDetail = mysqli_query($mysqli, "insert into transaksi_detail values ('$idTrans[0]','$rowCart[1]','$rowProduk[6]','$rowCart[2]','$sub')");

}
$sqlGrandTotal = mysqli_query($mysqli, "select sum(subtotal) from transaksi_detail where id_transaksi = '$idTrans[0]'");
$grandtotal = mysqli_fetch_array($sqlGrandTotal);

mysqli_query($mysqli, "update transaksi set total_belanja = $grandtotal[0] where id_transaksi = '$idTrans[0]'");

mysqli_query($mysqli, "delete from cart where id_user = $id_user");

?> 

<script>
    alert("Terima Kasih sudah berbelanja di toko kami :)");
    document.location='../index.php';

</script>