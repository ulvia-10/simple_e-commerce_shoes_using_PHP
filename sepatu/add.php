<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="../user/styleuser.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
</head>
<body>
    <div class="header">
    <div style="text-align: left; float: left;">
    <img src="../img/logo.png" width="65px"></div>
    <h2 class="judul">DATABASES</h2>
    <a href="../user/logout.php"><button class="logout">Logout</button></a>
    </div>
<table style="width: 100%;">
    <tr>
        <td class="sidebar" style="width: 200px; height: 10vh;">
               <div class="sidebar">
                   <div class="sidebar_item">
                      MENU
                   </div>
               <div class="sidebar_container">
                   <div class="sidebar_item">
                       <a style="text-decoration: none;color: white;" href="http://localhost/try/user/index.php">
                       <span>DASHBOARD</span></a>
                   </div>
                   <div class="sidebar_item">
                       <a style="text-decoration: none; color: white;" href="http://localhost/try/sepatu/"><span>DATA SEPATU</span></a>
                       
                   </div>
                   <div class="sidebar_item">
                       <a style="text-decoration: none; color: white;" href="http://localhost/try/user/user.php"><span>USER</span></a>
                   </div>
               </div>
               </div>
        </td>
        <td>
    <br/><br/>

    <form action="add.php" method="post" name="form1" enctype="multipart/form-data">
        <table class="tabeluser" width="10%" border="0">
            <tr> 
                <td>Merk </td>
                <td><input type="text" name="merk_sepatu" placeholder="Merk..."></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="nama_sepatu" placeholder="Nama sepatu..."></td>
            </tr>
            <tr>
              <td>Image</td>
              <td>
              choose file to upload:
              <input type="file" name="image_upload"><br>
              </td>
            </tr>
            <tr> 
                <td>Ukuran </td>
                <td><input type="text" name="ukuran_sepatu" placeholder="Ukuran..."></td>
            </tr>
           <tr>
                <td>Stok</td>
                <td><input type="number" name="stok_sepatu" placeholder="Stok..."></td>
                </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga_sepatu" placeholder="Harga..."></td>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $merk_sepatu=$_POST['merk_sepatu'];
        $nama_sepatu = $_POST['nama_sepatu'];
        $image_upload=$_FILES['image_upload']['name'];
        // echo $image_upload; die;
        $ukuran_sepatu = $_POST['ukuran_sepatu'];
        $stok_sepatu = $_POST['stok_sepatu'];
        $harga_sepatu=$_POST['harga_sepatu'];
        $target_path="img/";
        $target_path=$target_path.basename($_FILES['image_upload']['name']);

        move_uploaded_file($_FILES['image_upload']['tmp_name'],$target_path);

        $sql = "INSERT INTO sepatu(merk_sepatu,nama_sepatu,image,ukuran_sepatu,stok_sepatu,harga_sepatu) VALUES('$merk_sepatu','$nama_sepatu','$image_upload','$ukuran_sepatu','$stok_sepatu','$harga_sepatu')";
        // echo $sql; die;
        // Insert user data into table
        $result = mysqli_query($mysqli, $sql);


        // Show message when user added
        header("location:index.php");
      } 
            
    ?></td>
    </tr>
</table>
</body>
</html>