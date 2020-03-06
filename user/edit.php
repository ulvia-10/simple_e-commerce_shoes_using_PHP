<?php
//termasuk koneksi database
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_user = $_POST['id_user'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hak_akses=$_POST['hak_akses'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE user SET id_user='$id_user',nama='$nama',email='$email',username='$username', password='$password',hak_akses='$hak_akses' WHERE id_user=$id_user");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
//Menampilkan user data sesuai id user
//mendapatkan id dari user
$id_user = $_GET['id_user'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id_user");


    while($user_data = mysqli_fetch_array($result))
    {
        $id_user = $user_data['id_user'];
        $nama = $user_data['nama'];
        $email = $user_data['email'];
        $username = $user_data['username'];
        $password=$user_data['password'];
        $hak_akses = $user_data['hak_akses'];
    }
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
        <td class="sidebar">
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
                       <a href="http://localhost/try/sepatu/"></a>
                       <span>DATA SEPATU</span>
                   </div>
                   <div class="sidebar_item">
                       <a href="http://localhost/try/user/"></a>
                       <span>USER</span>
                   </div>
               </div>
               </div>
        </td>
        <td class="konten" style="width: 50%">
    <form name="update_user" method="post" action="edit.php" style="width: 50%">
      <table width="100%" style="text-align: center;">
             <tr> 
                <td>Id User</td>
                <td><input type="text" name="id_user" value=<?php echo $id_user;?>></td>
            </tr>
            <tr> 
                <td>Nama </td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
             <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
             <tr> 
                <td>Hak Akses</td>
                <td><input type="text" name="hak_akses" value=<?php echo $hak_akses;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
          </table>
        </form>
      </td>
</table>
</body>
</html>