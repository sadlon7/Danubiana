<?php 
include ("head.php"); 
includeHead("ARTSHOP | Danubiana");
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
					<li class="active"><a href="art_cafe.php">ART CAFFE</a></li>
					<li><a href="klub.php">KLUB</a></li>
					<li><a href="kontakt.php">KONTAKT</a></li>

					<li><a href=""><img class="danubianaNavFlag" src="assets/images/logos/flagUK.png" alt="carousel"></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="subMenuBig">
				<a href="">ARTCAFE</a>
			</div>
		</div>
	</div>

	<img class="imgMainImage" src="assets/images/artcafe.jpg" alt="carousel">


	<div class="container containerWithSpecialWidth">
		<div class="row">
			<p>Danubiana Meulensteen Art Museum poskytuje návštevníkovi popri prezentácii umeleckých diel na výstavách a v stálych expozíciách aj ďalšie doplnkové služby vyplývajúce zo základnej odbornej činnosti. Patrí k nim dobre vybavený Art shop, ktorý ponúka rôzne tlačené materiály o umení, i predmety suvenírového charakteru, často originálne dizajnovo riešené.
				<br><br>
				Art shop Danubiany ponúka v prvom rade publikácie a katalógy k realizovaným výstavám z vlastných edícií, ako aj prevzaté tituly o tvorbe svetoznámych osobností z oblasti umenia, architektúry i dizajnu. K vlastnej edičnej činnosti patrí edícia publikácií o slovenských umelcoch – Collection of Slovak Art, Collection Danubiana, ARCUS Edition Danubiana a Collection of International Art. V ponuke sú aj plagáty, reprodukcie obrazov a pohľadnice z tvorby slovenských i zahraničných umelcov. Vrcholom ponuky sú originálne grafické diela renomovaných slovenských grafikov.
				<br>
			</p>
		</div>
	</div>

	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/artcafe/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






