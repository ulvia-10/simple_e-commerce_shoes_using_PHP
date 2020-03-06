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
        <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var propertiPeta = {
				center:new google.maps.LatLng(-8.5830695,116.3202515), zoom:9, mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

			// membuat Marker
			var marker = new google.maps.Marker ({
				position: new google.maps.LatLng(-8.5830695,116.3202515),
				map: peta,
				animation: google.maps.Animation.BOUNCE
			});
		}

		// event jendela di-load
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<title>Grizzly Shoes | Location</title>
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
	<div class="wrap-content-about">
            <span style="font-weight:bold; margin:10px; margin-left:150px; font-size:20px; "><i class="fas fa-map-marker-alt"></i> FIND STORE</span>
<div class="content-catalogue"> 
            <a style="text-decoration:none;color:black;" href="">
            <div id="googleMap" style="width: 100%;height: 400px;"></div>
        </a>
</div>
<!-- ini setelah maps -->

<div class="after-maps-left">
<h3 >FLAGSHIP STORE <i class="fas fa-flag"></i></h3><br>
	<img src="img/toko.jpeg" style="width:50%; height:200%; margin-left:15px;">
</div>
<div class="after-maps-right"  style="color:white; ">
	<p style="font-weight:bold;">GRIZZLY SHOES STORE</p><br>
	<p>Jalan Pinggir suhat </p><br>
	<p>Telp:(0341) 521496</p><br>
	<label>Buka setiap: <br> Senin 09.00-21.00 <br></label>
	<label>Selasa 09.00-21.00<br> </label>
	<label>Rabu 09.00-21.00<br> </label>
	<label>Kamis 09.00-21.00<br> </label>
	<label>Jumat 09.00-21.00<br> </label>
	<label>Sabtu 09.00-22.00<br></label>
	<label>Minggu 09.00-22.00<br></label>
</div>
</div>
<div class="footer" >
		<li class="footer-tengah">
			<ul style=" font-weight:bold;color:orangered;">GRIZZLY SHOES</ul>
			<ul>Jl. Trunojoyo No.15 Bandung</ul>
			<ul>Tlp. (022) 87301291 </ul>
		</li>
		<li>
		<br><br><br>
			<ul style="text-align:center; color:white; margin-left:250px;">Grizzly Shoes © 2019 . Allright Reserved</ul>
		</li>
		<li class="footer-kanan">
			<ul style="color:orangered;font-weight:bold;">FOLLOW US</ul>
			<ul><img src="" alt=""></ul>
		</li>
	</div>
</body>
</html>