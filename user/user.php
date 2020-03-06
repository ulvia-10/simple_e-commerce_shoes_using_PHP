<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user ASC");
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
    <a href="../user/logout.php"><button class="logout">Logout</button></a>
    </div>
<table style="width: 100%;">
    <tr>
        <td class="sidebar" style="width: 200px;height: 85vh;">
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
                       <a style="text-decoration:none; color: white;" href="http://localhost/try/user/user.php"><span>USER</span></a>
                   </div>
               </div>
               </div>
        </td>
                <td class="konten">
            <a href="add.php"><button class="link"> + Add New User</button></a><br/><br/>
    <table border="1" class="tabel">
    <thead style="background-color:rgba(46, 49, 49, 90%); color: white;">
    <tr>
        <th>Id User</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Hak akses</th>
        <th>Action</th>   
    </tr>
    </thead>
    <tbody>
    <?php  

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_user']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['hak_akses']."</td>";
       // echo "<td>".date('d M Y',strtotime($user_data['created_at']))."</td>";
        echo "<td>
                <a href='edit.php?id_user=$user_data[id_user]'>
                    <button class='button-aksi' style='background-color: #4CAF50;'>
                        Edit
                    </button>
                </a> 

                <a href='delete.php?id_user=$user_data[id_user]'>
                    <button class='button-aksi' style='background-color: #3333CC;'>
                        Delete
                    </button>
                </a>
              </td>
          </tr>";        
    }
    ?>
    </tbody>
    </table>
</div>
        </td>
    </tr>
</table>
</body>
</html>