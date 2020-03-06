<html>
<head>
	<title>Add</title>
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
		<?php

//termasuk koneksi database
include_once("config.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
   $id_sepatu = $_POST['id_sepatu'];
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
    // update user data
        $sql =  "UPDATE sepatu SET merk_sepatu='$merk_sepatu',nama_sepatu='$nama_sepatu',image='$image_upload',ukuran_sepatu='$ukuran_sepatu',stok_sepatu='$stok_sepatu', harga_sepatu='$harga_sepatu' WHERE id_sepatu=$id_sepatu";
        // echo $sql; die;
    $result = mysqli_query($mysqli,$sql);
    echo $result;
    // die;

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
//Menampilkan user data sesuai id user
//mendapatkan id dari user
$id_sepatu = $_GET['id_sepatu'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM sepatu WHERE id_sepatu=$id_sepatu");


	while($user_data = mysqli_fetch_array($result))
	{
	    $merk_sepatu = $user_data['merk_sepatu'];
	    $nama_sepatu = $user_data['nama_sepatu'];
      $image_upload = $user_data['image'];
	    $ukuran_sepatu = $user_data['ukuran_sepatu'];
	    $stok_sepatu = $user_data['stok_sepatu'];
	    $harga_sepatu=$user_data['harga_sepatu'];
      $id_sepatu = $user_data['id_sepatu'];
      $target_path="img/";
	}
	?>
<html>
<head>  
    <title>Edit User Data</title>
</head>
                                                                                                    
<body>
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
                       <a style="text-decoration: none;color: white;" href="http://localhost/try/sepatu/">
                       <span>DATA SEPATU</span></a>
                   </div>
                   <div class="sidebar_item">
                       <a style="text-decoration: none;color: white;" href="http://localhost/try/user/">
                       <span>USER</span></a>
                   </div>
               </div>
               </div>
        </td>
        <td class="konten">
    <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
         <table width="100%" style="text-align: center;">	 
          <tr> 
                <td>Merk </td>
                <td><input type="text" name="merk_sepatu" value=<?php echo $merk_sepatu;?>></td>
            </tr>
            <tr> 
                <td>Nama </td>
                <td><input type="text" name="nama_sepatu" value=<?php echo $nama_sepatu;?>></td>
            </tr>
            <tr>
              <td>Image</td>
              <td>
              choose file to upload:<br>
              <input type="file" name="image_upload" value=<?php echo $image_upload;?>><br></td>
            </tr>
            <tr> 
                <td>Ukuran</td>
                <td><input type="text" name="ukuran_sepatu" value=<?php echo $ukuran_sepatu;?>></td>
            </tr>
            <tr> 
                <td>Stok </td>
                <td><input type="text" name="stok_sepatu" value=<?php echo $stok_sepatu;?>></td>
            </tr>
             <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga_sepatu" value=<?php echo $harga_sepatu;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_sepatu" value=<?php echo $_GET['id_sepatu'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>