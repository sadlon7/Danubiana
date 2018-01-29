<?php 
include ("head.php"); 
includeHead("Meulensteen | Danubiana");
?>

<body>

	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<a href="index.php"><img class="imgCarousel" src="assets/images/logos/danubianaLogo.png" alt="carousel" style="width: 30px; height: 100%;"></a>

						<li><a href="o_nas.php" class="active">DANUBIANA</a></li>
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


	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="subMenuSmall">
				<a href="o_nas.php">O nás</a>
				<a href="historia.php">História</a>
				<a href="architektura.php">Architektúra</a>
				<a href="meulensteen.php" class="active">Zakladatelia</a>
				<a href="dokumenty.php">Dokumenty</a>
			</div>

			<div class="subMenuBig">
				<a href="meulensteen.php" class="active">G. MEULENSTEEN</a>
				<a href="polakovic.php">V. POLAKOVIČ</a>
			</div>
		</div>
	</div>


	<img class="imgMainImage" src="assets/images/zakladatelia-meulensteen_hlavne_foto.jpg" alt="carousel">


	<div class="container containerWithSpecialWidth">
		<div class="row">

			<h1>Gerard H. Meulensteen</h1>

			<p>Holandský podnikateľ, zberateľ a mecenáš umenia. Narodil sa 5. februára 1943 v Eindhovene. Je ženatý a má dve deti. V roku 1969 založil spoločnosť Neways Electronics International N. V. Do roku 2000 bol predsedom Svetového obchodného centra v Einhovene a iných popredných spoločností. V roku 1994 financoval aktivity Žltého domu Vincenta van Gogha v Poprade, ktorého nástupcom sa 9. septembra 2000 stala Danubiana Meulensteen Art Museum v Bratislave-Čunove. Inicioval a financoval realizáciu Meulensteen Art Centre na pôde Technickej univerzity v Eindhovene, ktoré sa otvorilo 24. marca 2001. Centrum ponúka výtvarníkom z celého sveta príležitosť pracovať v jeho ateliéroch: grafickom, maliarskom a sochárskom. Do roku 2001 bol predsedom Nadácie Emmasingel a hlavným sponzorom Van Abbe Musea. Jeho umelecká zbierka, ktorú získal za posledných 25 rokov, pozostáva z pozoruhodných diel. 
				<br><br>
				Od roku 2004 reprezentuje Slovenskú republiku v Holandsku ako honorárny konzul. 
			Okrem prezentácie slovenského výtvarného umenia v zahraničí aktivity Gerarda Meulensteena zahŕňajú najmä publikácie edície Collection of Slovak Art. Aktivity Gerarda Meulensteena a jeho propagácia umenia najmä v krajinách bývalej východnej Európy naplno ocenia budúce generácie umelcov a milovníkov umenia. </p>

		</div>
	</div>

	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/meulensteen/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






