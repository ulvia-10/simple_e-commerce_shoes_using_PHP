<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sepatu");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="../user/styleuser.css">
    <style type="text/css">
      .imgSepatu{
        width: 100px;
        height: 100px;
      }
    </style>
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
        <td class="sidebar" style="width: 200px; height: 1025vh;">
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
                <td class="konten">
            <a href="add.php"><button class="link">+ Add New Shoes</button></a><br/><br/>
    <table class="tabel">
    <tr style="background-color:rgba(46, 49, 49, 90%); color: white;">
       <th>ID Sepatu</th> 
       <th>Merk</th> 
       <th>Nama</th> 
       <th>Ukuran</th> 
       <th>Stok</th> 
       <th>Harga</th> 
       <th>Image</th>
       <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {     
        // echo $user_data['image'];
        // echo "<br>";
        echo "<tr>";
        echo "<td>".$user_data['id_sepatu']."</td>";
        echo "<td>".$user_data['merk_sepatu']."</td>";
        echo "<td>".$user_data['nama_sepatu']."</td>";
        echo "<td>".$user_data['ukuran_sepatu']."</td>";
        echo "<td>".$user_data['stok_sepatu']."</td>";
        echo "<td>".$user_data['harga_sepatu']."</td>";
        echo "<td><img src='img/".$user_data['image']."' class='imgSepatu'></td>";
 
        echo "<td><a href='edit.php?id_sepatu=$user_data[id_sepatu]'><button class='button-aksi' style='background-color: #4CAF50;'>Edit</button></a> | 
        <a href='delete.php?id_sepatu=$user_data[id_sepatu]'> <button class='button-aksi' style='background-color: #3333CC;'>Delete</button></a></td></tr>";        
    }
    ?>
    </table>
        </td>
    </tr>
</table>
</body>
</html>