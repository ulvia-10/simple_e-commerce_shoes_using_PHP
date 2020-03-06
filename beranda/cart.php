<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Grizzly Shoes | Cart</title>
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
				<a href="../login/index.php"><i class="fas fa-power-off"></i></a>
					</a>
		</div>
	</div>
	</div>
<div class="content-detail" style="height:200px; padding:200px;">
    <table class="tabel-dalam" style="border: 1px solid;border-color:lightgrey; background-color:lightgrey; border-radius:5px;">
				<?php
					session_start();
					$id = $_SESSION['id_user'];
          $con = mysqli_connect("localhost","root","","toko_sepatu");
          // Menangkap id
          $sqlSepatu = "select * from cart where id_user=$id";
					$qsepatu = mysqli_query($con,$sqlSepatu);
					$cek = mysqli_num_rows($qsepatu);
					if($cek<1){
						$status =0;
						echo "
						<tr>
						<td style='padding:150px;width:650px;text-align:center;'>
					<h2>Keranjang kosong Bro, kuy dibeli! </h2>
						</td>
						</tr>
						";
					}else{
						$status=1;
						$no=0;
						$total=0;
					}
					while ($row=mysqli_fetch_array($qsepatu)) {
							$sqlProduct ="select * from sepatu where id_sepatu = '$row[1]'";
							$qProduk=mysqli_query($con,$sqlProduct);
							while($row_sepatu= mysqli_fetch_array($qProduk))
							{
								$no ++;
								$subtotal = $row_sepatu[6]*$row[2];
								$price = $row_sepatu[6];
								echo "
								<tr>
									<td>
									$no
									</td>
									<td>
										<img src='../sepatu/img/$row_sepatu[3]' width='100px' height='100px'>
									</td>
									<td>
									$row_sepatu[2]
									</td>
									<td>
										Rp. $price
									</td>
								"?>
							<td>
								<form action="cart/plus.php" method="post">
								<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
								<input type="hidden" name="id_sepatu" value="<?php echo $row_sepatu[0]?>">
								<button>
									<i class="fas fa-plus"></i>
								</button>
							</form>
							<?php echo $row_sepatu[2]?>
							<form action="cart/minus.php" method="post">
							<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
							<input type="hidden" name="id_sepatu" value="<?php echo $row_sepatu[0]?>">
							<button>
								<i class="fas fa-minus"></i>
							</button>
						</form>
							</td>
						<?php
						echo "
								<td>
								<b>Rp. " . number_format($subtotal, 0, '.', '.') . "</b>
								</td>
								<td>
								<form action='cart/delete.php' method='post'>
								<input type='hidden' name='id_user' value='" .  $_SESSION['id_user'] . "'>
								<input type='hidden' name='id_sepatu' value='" .  $row_sepatu[0] ."'>
							<button>
							<i class='fas fa-times'></i>
							</button>
							</form>
							</td>
							</tr>
						";
						$total = $total+$subtotal;
							}
						}
						?>
				</table> 
		</div>
		<div class="cart-footer" style="margin-bottom:2%;margin-top:-15px;margin-left:900px;">
			<h1>
				<span>
					Total: 
				</span>
				<span>
					 <?php
					 if($status == 0){
					 }else{
						 echo "Rp. " . number_format($total, 0, ',', '.' );
					 }
					 ?>
				</span>
			</h1>
					 <?php
					 if($status != 0) {
						 ?>
						 <br>
						 <a href="../beranda/cart/confirm.php?id_user=<?php echo $_SESSION['id_user']?>">
						 <button style="margin-bottom: 1000%;">
							 <i class="fas fa-arrow-right"></i>
							 <span>Checkout</span>
						 </button>
						 </a>
						 <?php
					 }
					 ?>
		</div>
</div>
<div class="footer" >
		<li class="footer-tengah">
			<ul style="color:orangered; font-weight:bold;">GRIZZLY SHOES</ul>
			<ul>Jl. Trunojoyo No.15 Bandung</ul>
			<ul>Tlp. (022) 87301291 </ul>
		</li>
		<li>
		<br><br><br>
			<ul style="text-align:center; color:white; margin-left:250px;">Grizzly Shoes © 2019 . Allright Reserved</ul>
		</li>
		<li class="footer-kanan">
			<ul style="color:orangered;font-weight:bold;">FOLLOW US</ul>
			<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
			<a href="https://twitter.com/login?lang=id"><i class="fab fa-twitter"></i></a>
			<a href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram    "></i></a>
		</li>
	</div>
</body>
</html>