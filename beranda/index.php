<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src='jquery-3.3.1.js'></script>
		<script>
			var i=0;
			$(document).ready(function() {
				$('.slidertitle, #slider img').hide();
				showNextImage();
				setInterval('showNextImage()', 3000);
			});
			function showNextImage(){
				i++;
				$('#sliderImage'+i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
				$('#title'+i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
				if(i==3){
					i=0;
				}
			};
		</script>
		
	<title>Grizzly Shoes | Home</title>
</head>
<body style="background-color: whitesmoke;">
	<div class="header">
		<ul>
			<li><a style="text-decoration: none;" href="index.php">HOME</a></li>
			<li><a style="text-decoration: none;" href="katalog.php">CATALOGUE</a></li>
			<li><a style="text-decoration: none;" href="about.php">ABOUT US</a></li>
			<li><a style="text-decoration: none;" href="lokasitoko.php">LOCATION</a></li>
		</ul>
	</div>
	<div class="menu">
		<div style="text-align: left; float:left;position: absolute; ">
		<img src="../img/logo.png" width="65px"></div>
		
		<div class="ikon">
				<div class="judul-tengah">
        				<span>GRIZZLY SHOES</span>
        		</div>
				<a style="text-decoration:none;color: black; margin-left:85%; padding: 10px;">
				<a style="color:black;" href="cart.php"><i class="fas fa-cart-plus"></i></a>
				<a style="color:black;"href="../login/index.php"><i class="fas fa-power-off"></i></a>
				</a>
		</div>
	</div>
	<div class="konten">
		<div id="slider">
			<img id="sliderImage1" src="img/about2.jpg">
			<img id="sliderImage2" src="img/iklanconverse.jpg">
			<img id="sliderImage3" src="img/iklanvans2.jpg">
		</div>
		<div class="after-slider">
			<h2> PRODUK BEST SELLER </h2>
			
			<div class="wrapper" tyle="margin-top: 10%;margin-bottom: 5%; width: 80%; margin-left: 10%;">
			<?php
			include '../user/config.php';
			// echo "select id_sepatu, sum(jumlah) as 'jml' from transaksi_detail group by id_sepatu limit 5";die;
			$sqlBest= mysqli_query($mysqli, "select id_sepatu, sum(jumlah_sepatu) as 'jml' from transaksi_detail group by id_sepatu limit 3");
			while($rowBest = mysqli_fetch_array($sqlBest)){
				// echo "select * from sepatu where id_sepatu = '$rowBest[0]'";die;
				$sqlimage = mysqli_query($mysqli, "select * from sepatu where id_sepatu = '$rowBest[0]'");
				$row=mysqli_fetch_array($sqlimage);
				?>
			<div class="card" style="margin-bottom: 2.5%; margin-left:50px; padding: 10px;" ;>
				<center>
					<img src="../sepatu/img/<?php echo $row[3] ?>" style="width:200px; height:200px;">
				</center>
				<h3><?php echo $row[2]?></h3>
				<h3><?php echo "Rp. $row[6]"?></h3>
			</div>
		<?php }?>
		
		</div>
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
			<ul>
			<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
			<a href="https://twitter.com/login?lang=id"><i class="fab fa-twitter"></i></a>
			<a href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram    "></i></a>
			</ul>
		</li>
	</div>
</body>
</html>