<?php 
include ("head.php"); 
includeHead("O nás | Danubiana");
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
					
					<li class="active"><a href="o_nas.php">DANUBIANA</a></li>
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



	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="subMenuSmall">
				<a href="o_nas.php" class="active">O nás</a>
				<a href="historia.php">História</a>
				<a href="architektura.php">Architektúra</a>
				<a href="meulensteen.php">Zakladatelia</a>
				<a href="dokumenty.php">Dokumenty</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">O NÁS</a>
			</div>
		</div>
	</div>


	<img class="imgMainImage" src="assets/images/o_nas_hlavne_foto.jpg" alt="carousel">

	<div class="container containerWithSpecialWidth">
		<div class="row">

			<h1>Danubiana</h1>

			<p>Necelých 20 km južne od Bratislavy sa nachádza jedno z najromantickejších múzeí moderného umenia v Európe – Danubiana Meulensteen Art Museum.
				Jeho zakladateľmi sú holandský zberateľ a podporovateľ umenia Gerard Meulensteen z Eindhovenu a slovenský galerista Vincent Polakovič.
				<br><br>
				Od roku 2000, keď bolo múzeum otvorené, uskutočnilo desiatky výstav najprestížnejších osobností slovenskej, európskej a svetovej výtvarnej scény (Karel Appel, Sam Francis, Miroslav Cipár, Markus Prachensky, Ilona Kesserü Ilona, Rudolf Sikora, Martín Chirino, Vladimír Popovič a ďalší).
				<br><br>
				Medzi mnohými domácimi a zahraničnými návštevníkmi, ktorí doposiaľ múzeum navštívili, nechýbali ani viaceré kráľovské návštevy a mnohé osobnosti kultúrneho a spoločenského života. 
				<br><br>
				Jedinečná poloha múzea nachádzajúceho sa na hraniciach troch štátov, a predovšetkým mimoriadne citlivé prepojenie s okolitou prírodou a riekou Dunaj, poskytuje návštevníkom neopakovateľné pohľady nielen na vystavované výtvarné umenie, ale predovšetkým na flóru a faunu, ktorá je na polostrove umenia v každom ročnom období jedinečná.
				<br><br>
				V priľahlom sochárskom parku môžu návštevníci vidieť diela viacerých osobností, akými sú napríklad El Lissitzky, Magdalena Abakanowicz, Jim Dine, Hans van de Bovenkamp, Jozef Jankovič, Arman, J. C. Farhi, Vladimír Kompánek či Rudolf Uher.
				Výnimočný je aj pohľad z pochôdznej strechy múzea, kde najmä pohľad na Bratislavu a majestátny Dunaj býva pri západe slnka nezabudnuteľným zážitkom.
				<br><br>
				Prehliadku múzea, ktoré sa po svojej veľkorysej dostavbe podporenej Vládou SR stalo novým symbolom modernej Bratislavy, dnes odporúčajú najprestížnejšie svetové bedekre a sociálne portály.

				Dovidenia pri Dunaji, priatelia.
			</p>

		</div>
	</div>


	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/o_nas/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






