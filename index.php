<?php 
include ("head.php"); 
includeHead("Danubiana | Vitajte");
?>

<body>

	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<a href="index.php"><img class="imgCarousel" src="assets/images/logos/danubianaLogo.png" alt="carousel" style="width: 30px; height: 100%;"></a>

						<li><a href="o_nas.php">DANUBIANA</a></li>
						<li><a href="aktualne_vystavy.php">VYSTAVY</a></li>
						<li><a href="zbierka_meulensteen.php">ZBIERKA</a></li>
						<li><a href="park.php">PARK</a></li>
						<li><a href="art_shop.php">ARTSHOP</a></li>
						<li><a href="art_cafe.php">ART CAFFE</a></li>
						<li><a href="klub.php">KLUB</a></li>
						<li><a href="kontakt.php">KONTAKT</a></li>

						<a href=""><img class="imgCarousel" src="assets/images/logos/flagUK.png" alt="carousel" style="width: 20px; height: 100%;"></a>
					</ul>
				</div>
			</div>
		</nav>
	</header>

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
			<div class="home-tile"><a href=""><img src="assets/images/home-tiles/MARTI LCD.jpg"></a></div>
			<div class="home-tile"><a href=""><img src="assets/images/home-tiles/park_Lcd_FullHD.jpg"></a></div>
			<div class="home-tile"><a href=""><img src="assets/images/home-tiles/QUIN LCD.jpg"></a></div>
			<div class="home-tile"><a href=""><img src="assets/images/home-tiles/zbierka_Lcd_FullHD.jpg"></a></div>
		</div>
	</div>


	<?php include ("footer.php"); ?>

</body>
</html>






