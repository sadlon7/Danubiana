<?php 
include ("head.php"); 
includeHead("Danubiana | Vitajte");
?>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><img class="danubianaNavLogo" src="assets/images/logos/danubianaLogo.png" alt="carousel""></a></li>
					
					<li><a href="o_nas.php">DANUBIANA</a></li>
					<li><a href="aktualne_vystavy.php">VYSTAVY</a></li>
					<li><a href="zbierka_meulensteen.php">ZBIERKA</a></li>
					<li><a href="park.php">PARK</a></li>
					<li><a href="art_shop.php">ARTSHOP</a></li>
					<li><a href="art_cafe.php">ART CAFFE</a></li>
					<li><a href="klub.php">KLUB</a></li>
					<li><a href="kontakt.php">KONTAKT</a></li>

					<li><a href=""><img class="danubianaNavFlag" src="assets/images/logos/flagUK.png" alt="carousel"></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<img class="imgCarousel" src="assets/images/karusel_pohlad01.jpg" alt="carousel">

	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="flex-container">
				<div class="container-left-align">Dnes otvorené od 10:00 do 18:00 hod.</div>
				<div class="container-right-align">Cena vstupného</div>
			</div>
		</div>
	</div>

	<div class="row"> 
		<div class="column column-home-tiles">
			<div class="home-tile"><a href="vystava01.php"><img src="assets/images/home-tiles/MARTI LCD.jpg"></a></div>
			<div class="home-tile"><a href="park.php"><img src="assets/images/home-tiles/park_Lcd_FullHD.jpg"></a></div>
			<div class="home-tile"><a href="vystava01.php"><img src="assets/images/home-tiles/QUIN LCD.jpg"></a></div>
			<div class="home-tile"><a href="zbierka_danubiana.php"><img src="assets/images/home-tiles/zbierka_Lcd_FullHD.jpg"></a></div>
		</div>
	</div>

	<?php include ("footer.php"); ?>

</body>
</html>