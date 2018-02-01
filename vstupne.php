<?php 
include ("head.php"); 
includeHead("VSTUPNÉ | Danubiana");
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
				<a href="doprava-lietadlo.php">DOPRAVA</a>
				<a href="vstupne.php" class="active">VSTUPNÉ</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">VSTUPNÉ</a>
			</div>
		</div>
	</div>

	<img class="imgMainImage" src="assets/images/vstupne.png" alt="carousel">

	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="entranceLabel">
				<div class="label">
					<p>Dospelí</p>
					<p>10 €</p>
				</div>

				<div class="label">
					<p>Rodina (2 dospelí a 2 študenti)</p>
					<p>20 €</p>
				</div>

				<div class="label">
					<p>Dôchodcovia (starší ako 62 rokov)</p>
					<p>5 €</p>
				</div>

				<div class="label">
					<p>Študenti</p>
					<p>5 €</p>
				</div>

				<div class="label">
					<p>Deti (mladšie ako 6 rokov)</p>
					<p>zadarmo</p>
				</div>

				<div class="label">
					<p>členovia Danubiana klubu</p>
					<p>zadarmo</p>
				</div>

				<div class="label">
					<p>ZŤP, osoby staršie ako 75 rokov</p>
					<p>zadarmo</p>
				</div>
			</div>

			<br><br><br><br><br><br>
		</div>
	</div>


	<?php 
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






