<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Grizzly Shoes | Detail</title>
</head>
<body style="background-color: whitesmoke;">
	<div class="header">
		<ul>
			<li><a style="text-decoration: none;" href="index.php">HOME</a></li>
			<li><a style="text-decoration: none;" href="katalog.php">CATALOGUE</a></li>
			<li><a style="text-decoration: none;" href="about.php">ABOUT US</a></li>
			<li><a style="text-decoration: none;" href="lokasitoko.php">LOCATION</a></li>
		</ul>
		<div class="menu-kanan" style="text-align: right;float: right;font-weight: bold;">
    		<li><a style="text-decoration: none;color: red;" href="">KONFIRMASI PEMBAYARAN</a></li>
    	</div>
	</div>
	<div class="menu">
		<div style="text-align: left; float:left;position: absolute; ">
		<img src="../img/logo.png" width="65px"></div>
		
		<div class="ikon">
				<div style="text-align :center; float: center;">
        				<span class="judul-tengah">GRIZZLY SHOES</span>
        		</div>
				<a style="text-decoration:none;color: black; margin-left:85%; padding: 20px;" href="">
				<a href="cart.php"><i class="fas fa-cart-plus"></i></a>
				<a href=""><i class="fas fa-search"></i></a>
				<a href="../login/login.php"><i class="fas fa-power-off"></i></a>
 
					</a>
		</div>
	</div>
    <div class="content-detail-dalam">
        <?php
            $con = mysqli_connect("localhost","root","","toko_sepatu");
            // Menangkap id
            $id = $_GET['idSepatu'];
			$sqlSepatu = "select * from sepatu where id_sepatu=$id";
			$qsepatu = mysqli_query($con,$sqlSepatu);
			$row_sepatu=mysqli_fetch_array($qsepatu);
				?>
				<table width="100%">
					<tr>
						<td>
							<h2 style="margin-left:35px; padding:5px;">Detail Produk</h2>
							<hr>
							<img style="margin-left:90px; margin-top:10px;"src="../sepatu/img/<?php echo $row_sepatu[3]?>" width="350px" height=350px">
	 					</td>
						<td>
							<div style="margin-right:25px;">
								<p>Nama Sepatu: <?php echo $row_sepatu[2] ?></p><br>
								<p>Ukuran sepatu: <?php echo $row_sepatu[4]?>
								<p>Harga Sepatu: Rp. <?php echo $row_sepatu[6]?></p><br>
								<p></p>
								<a href="cart.php"></a>
								<!-- stoknya harus berkurang -->
								<p>Stok sepatu: <a><?php echo $row_sepatu[5]?></a></p>
								<button class="to-cart" href="">Buy</button>
							</div>
							
						</td>
					</tr>
				</table>
				
    </div>

</body>
</html>