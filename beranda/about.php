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
	<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
}
</style>
	<title>Grizzly Shoes | About Us</title>
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
				<a style="color:black;"href="../login/index.php"><i class="fas fa-power-off"></i></a>
				</a>

		</div>
		</div>
	<div class="wrap-content-about">
		<hr><p style="margin:10px; margin-left:150px; font-size:25px; font-weight:bold;">About Us </p>
		
		<div class="content-about">
		<img src="img/aboutpic.jpg" width="1012px" height="404px">
		</div>
		<div class="tulisan-about">
		Semua brand pasti berawal dari mimpi, begitu juga dengan kami. Mimpi kami cukup besar: menjadi brand sepatu internasional yang keren, hebat, dan disegani. Mencapai mimpi tersebut bukan hal yang mudah. Namun kami cukup beruntung karena banyak yang mendukung, sehingga kami ingin brand lokal kami ini bisa dikenal di dunia internasional. Yang bisa mengalahkan brand brand sepatu asing,yang emmiliki segala aspek kehebatan di atas kami.
		<br><br>
		This is Grizzly Shoes.Let us kick the world with us :))
			<!-- Komentar Form  -->
		</div><br><br>
		<h3 style="margin-left: 12%; font-family:segoe UI;"> <i class="fab fa-facebook-messenger    "></i> CONTACT US</h3><br>
		<div class="container" style="background-color:whitesmoke; width:1012px;margin-left:150px;">
		<form action="proses_Komentar.php" method="POST"  >
            <div class="form-komen" style="margin-left:25%;"> 
			<h2 style="margin-left: -15%;text-align:center; font-family:segoe UI">Insert for Subscribe Guys!</h2> <br> <br>
                <input type="hidden" name="id_komentar"?>
				<p>Name <br> <input type="text" name="nama" required></p><br>
				<p>Email <br><input type="text" name="email" required></p><br>
				<p>Comment<br> <textarea name="form_Komen" required></textarea></p> <br><br>
				<input type="submit"  required value=" Comment Now! " onclick="return confirm('Are you sure?')"style="margin-left: 50px; height: 40px;"><br> <br>
				<h2>Comment Result ^_^</h2> <br>
        <?php
        // Wajib jika mau ambil data dari tabel 
            session_start();
            include '../user/config.php';
            $sql = "SELECT * FROM tb_komentar";
            // Akses database, lalu akses table di dalam db
            $queryKomen = mysqli_query($mysqli, $sql);

            while($resultKomen = mysqli_fetch_array($queryKomen))
            {
            
		?>
        <div>
			<p>Name: <?php echo $resultKomen['nama'];?></p>
			<p>Email: <?php echo $resultKomen['email'];?></p>
						<p>Comment: <?php echo $resultKomen['komentar'];?></p>
			<br>
        </div>
        <?php 
            }
				?>
					<input type="submit"  required value=" Delete this commment " onclick="return confirm('Are you sure?')"style="margin-left: 50px; height: 40px;"><br> <br>
				</form>

            </div>
            <br>
			<br>
           
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
	</div>
</body>
</html>