<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="styleuser.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
</head>

<body>
    <div class="header">
    <div style="text-align: left; float: left;">
    <img src="../img/logo.png" width="65px"></div>
    <h2 class="judul">DATABASES</h2>
    <a href="logout.php"><button class="logout">Logout</button></a>
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
                       <a style="text-decoration: none;color: white;" href="http://localhost/try/sepatu/"><span>DATA SEPATU</span></a>
                       
                   </div>
                   <div class="sidebar_item">
                       <a style="text-decoration: none;color: white;" href="http://localhost/try/user/user.php"><span>USER</span></a>
                   </div>
                   
               </div>
               </div>
        </td>
        <td>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="50%">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Your name..."></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Your email..."></td>
            </tr>
           <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Username..."></td>
                </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" placeholder="Password..."></td>
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
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password=$_POST['password'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO user(nama,email,username,password,hak_akses) VALUES('$nama','$email','$username','$password','user')");

      //mrnunjukkan pesan apabila proses menambahkan berhasil 
        echo "User added successfully. <a style='text-decoration:none;' href='http://localhost/try/user/user.php'>View Users</a>";
    }
    ?>
        </td>
    </tr>
</table>
</body>
</html>