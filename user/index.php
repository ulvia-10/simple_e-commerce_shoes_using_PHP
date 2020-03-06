<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user ASC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleuser.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
</head>

<body>
    <div class="header">
    <div style="text-align: left; float: left;">
    <img src="../img/logo.png" width="65px"></div>
    <h2 class="judul"> WELCOME TO ADMIN PAGE</h2>
    <a href="logout.php"><button class="logout">Logout</button></a>
    </div>
<table style="width: 100%;">
    <tr>
        <td class="sidebar" style="width: 200px; height: 212vh;">
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
        <td class="konten">
        <h2 style="text-align:center;">~ Selamat Datang Administator Grizzly Shoes ~</h2>
            <div class="kotak-jumlah" style="width:180px; height: 140px; background-color:#34495e; border-radius:5%; margin: 65px; margin-left:120px; display: inline-block;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI;"> Admin </h2><br>
            <p style="color: grey; margin-left:20px;">
                <i class="fas fa-user  fa-3x "></i>
            </p>
            <?php
		// Wajib jika mau ambil data dari tb 
			session_start();
			include '../user/config.php';
			$sql = "SELECT COUNT(id_user) from user where hak_akses = 'admin';";
			// Akses database, lalu akses table di dalam db
            $querysum = mysqli_query($mysqli, $sql);
            $resultKomen = mysqli_fetch_array($querysum)
		?>
			<p style="font-size:50px; margin-left:100px; margin-top:-50px; color:lightgrey"><?php echo $resultKomen[0];?></p>
	

            </div>
            <div class="kotak-jumlah" style="width:180px; height: 140px; background-color:#22313f; border-radius:5%; margin: 65px; margin-left:10px; display: inline-block;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI;"> User </h2><br>
            <p style="color: grey; margin-left:20px;">
                <i class="fas fa-user  fa-3x "></i>
            </p>
            <?php
		// Wajib jika mau ambil data dari tb 
			$sql = "SELECT COUNT(id_user) from user where hak_akses='user';";
			// Akses database, lalu akses table di dalam db
            $query = mysqli_query($mysqli, $sql);
            $result = mysqli_fetch_array($query)
		?>
			<p style="font-size:50px; margin-left:100px; margin-top:-50px; color:lightgrey"><?php echo $result[0];?></p>
	
            </div>
            <div class="kotak-jumlah" style="width:180px; height: 140px; background-color:#2e3131; border-radius:5%; margin: 50px; margin-left:10px; display: inline-block;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI;"> Product </h2><br>
            <p style="color: grey; margin-left:20px;">
               <i class="fas fa-list  fa-3x "></i>
            </p>
            <?php
		// Wajib jika mau ambil data dari tb 
			$sql = "SELECT COUNT(id_sepatu) from sepatu;";
			// Akses database, lalu akses table di dalam db
            $query = mysqli_query($mysqli, $sql);
            $result = mysqli_fetch_array($query)
		?>
			<p style="font-size:50px; margin-left:100px; margin-top:-50px; color:lightgrey"><?php echo $result[0];?></p>
	
            </div>
            </div>
            <div class="kotak-jumlah" style="width:180px; height: 140px; background-color:#2574a9; border-radius:5%; margin: 50px; margin-left:125px; display: inline-block;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI;"> Transaction </h2><br>
            <p style="color: grey; margin-left:20px;">
               <i class="fas fa-list  fa-3x "></i>
            </p>
            <?php
		// Wajib jika mau ambil data dari tb 
			$sql = "SELECT COUNT(id_transaksi) from transaksi;";
			// Akses database, lalu akses table di dalam db
            $query = mysqli_query($mysqli, $sql);
            $result = mysqli_fetch_array($query)
		?>
			<p style="font-size:50px; margin-left:100px; margin-top:-50px; color:lightgrey"><?php echo $result[0];?></p>
	
            </div>
        
        </td>
    </tr>      
    <tr>
        
    </tr>

</table>
</body>
</html>