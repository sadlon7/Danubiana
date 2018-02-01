<?php 
include ("head.php"); 
includeHead("DOPRAVA | Danubiana");
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
					<li class="active"><a href="kontakt.php">KONTAKT</a></li>

					<li><a href=""><img class="danubianaNavFlag" src="assets/images/logos/flagUK.png" alt="carousel"></a></li>
				</ul>
			</div>
		</div>
	</nav>



	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="subMenuSmall">
				<a href="mapa.php">Mapa</a>
				<a href="kontakt.php">KONTAKTY</a>
				<a href="doprava-lietadlo.php" class="active">DOPRAVA</a>
				<a href="vstupne.php">VSTUPNÉ</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">DOPRAVA</a>
			</div>

			<div class="transportIcons">
				<a href="doprava-lietadlo.php">		<img src="assets/images/logos/plane.png" alt="Plane Image">		</a>
				<a href="doprava-autobus.php">		<img src="assets/images/logos/bus.png" alt="Bus Image">			</a>
				<a href="doprava-lod.php">			<img src="assets/images/logos/ship.png" alt="Ship Image">		</a>
				<a href="doprava-auto.php">			<img src="assets/images/logos/car.png" alt="Car Image">			</a>
				<a href="doprava-peso.php">			<img class="active" src="assets/images/logos/walk.png" alt="Walk Image">		</a>
				<a href="doprava-moto.php">			<img src="assets/images/logos/moto.png" alt="Moto Image">		</a>
				<a href="doprava-korcule.php">		<img src="assets/images/logos/skate.png" alt="Skate Image">		</a>
				<a href="doprava-bicykel.php">		<img src="assets/images/logos/bike.png" alt="Bike Image">		</a>
				<a href="doprava-taxi.php">			<img src="assets/images/logos/taxi.png" alt="Taxi Image">		</a>
			</div>
		</div>
	</div>

	<img class="imgMainImage" src="assets/images/walk.jpg" alt="carousel">

	<div class="container containerWithSpecialWidth">
		<div class="row">


			<h1>Pešo</h1>
			<p>Lorem ipsum dolor sit amet, quo affert dolore et, ad eius mutat platonem mei. Luptatum ocurreret in has, tota assentior at qui, no duis populo pri. Semper nostro cotidieque id duo. No ius ipsum vitae, ad movet eripuit deleniti mea. Vidisse pericula vulputate ea cum, vel an tollit volumus.
			<br><br>
				Graeco iudicabit efficiantur sed id. Sale impetus salutatus te per. Ex nam vidit graecis fabellas, pro et diam ipsum qualisque, sea an facer eleifend sapientem. An est aliquip indoctum, ad persius sensibus scripserit per. Meis petentium consequat at nam, ut tation quodsi tritani per.
			</p>
			<br><br><br><br>
		</div>
	</div>

	<?php 
	include ("footer.php"); 
	?>

</body>
</php>






