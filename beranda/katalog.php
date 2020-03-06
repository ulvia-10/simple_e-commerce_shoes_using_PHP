<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='jquery-3.3.1.js'></script>
		<script>
			var i=0;
			$(document).ready(function() {
				$('.slidertitle, #slider img').hide();
				showNextImage();
				setInterval('showNextImage()', 4000);
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

	<title>Grizzly Shoes | Katalog</title>
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
				<div style="text-align :center; float: center;">
        				<span class="judul-tengah">GRIZZLY SHOES</span>
        		</div>
				<a style="text-decoration:none;color: black; margin-left:85%; padding: 10px;">
				<a style="color:black;" href="cart.php"><i class="fas fa-cart-plus"></i></a>
				<a style="color: black;" href="search.php"><i class="fas fa-search    "></i></a>
				<a style="color:black;"href="../login/index.php"><i class="fas fa-power-off"></i></a>
				</a>
		</div>
	</div>
	<div class="wrapper" style="margin-top: 10%;margin-bottom: 5%; width: 80%; margin-left: 10%;">
	<?php
		session_start();
		// echo $_SESSION['id_user'];die;
		$con = mysqli_connect("localhost","root","","toko_sepatu");
		$sqlSepatu = "select * from sepatu";
		$qsepatu = mysqli_query($con,$sqlSepatu);
		while($row_sepatu=mysqli_fetch_array($qsepatu)){
        ?>
        <div class="card" style="margin-bottom: 2.5%;">
						<img src="../sepatu/img/<?php echo $row_sepatu[3] ?>" style="width:80%; height:20%;">
						<h1><?php echo $row_sepatu[2] ?></h1>
						<p class="price">Rp. <?php echo $row_sepatu[6] ?></p>
						<p></p>
						<form action="cart/add.php" method="post">
							<input type="hidden" name="id_user" value="<?php echo $_SESSION ['id_user']?>">
							<input type="hidden" name="id_sepatu" value="<?php echo $row_sepatu[0]?>">
								<button class="card-button" onclick="return confirm('Added to cart')">
									<i class="fas fa-cart-arrow-down"></i>
									<span>Add to Cart</span>
								</button>
						</form>
						<a href="detail.php?idSepatu=<?php echo $row_sepatu[0] ?>">
							<button class="card-button">
								<i class="fas fa-eye"></i>
								Detail
							</button>
						</span>
						</a>
	    </div> 
        <?php
		    }
	    ?>
    </div>
	<li>
	</li>
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