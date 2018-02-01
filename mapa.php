<?php 
include ("head.php"); 
includeHead("MAPA | Danubiana");
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
				<a href="mapa.php" class="active">Mapa</a>
				<a href="kontakt.php">KONTAKTY</a>
				<a href="doprava-lietadlo.php">DOPRAVA</a>
				<a href="vstupne.php">VSTUPNÉ</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">MAPA</a>
			</div>
		</div>
	</div>

	<!-- <img class="imgMainImage" src="assets/images/mapa.png" alt="carousel"> -->

	<div id="googleMap" style="width:100%;height:400px;"></div>

	<div style="margin-top: -400px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2666.491534898853!2d17.230415216009126!3d48.034268479217526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c628d9282f127%3A0x485605c39a2e6855!2zTWFuZMS-b3bDoSAyMS80MiwgODUxIDEwIEphcm92Y2U!5e0!3m2!1ssk!2ssk!4v1498052810511" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->



<div class="container containerWithSpecialWidth">
	<div class="row">

		<p>Necelých 20 km južne od Bratislavy sa nachádza jedno z najromantickejších múzeí moderného umenia v Európe – Danubiana Meulensteen Art Museum.
			Jeho zakladateľmi sú holandský zberateľ a podporovateľ umenia Gerard Meulensteen z Eindhovenu a slovenský galerista Vincent Polakovič.
			<br><br>
			Od roku 2000, keď bolo múzeum otvorené, uskutočnilo desiatky výstav najprestížnejších osobností slovenskej, európskej a svetovej výtvarnej scény (Karel Appel, Sam Francis, Miroslav Cipár, Markus Prachensky, Ilona Kesserü Ilona, Rudolf Sikora, Martín Chirino, Vladimír Popovič a ďalší).
			Medzi mnohými domácimi a zahraničnými návštevníkmi, ktorí doposiaľ múzeum navštívili, nechýbali ani viaceré kráľovské návštevy a mnohé osobnosti kultúrneho a spoločenského života. 
			<br>
			Jedinečná poloha múzea nachádzajúceho sa na hraniciach troch štátov, a predovšetkým mimoriadne citlivé prepojenie s okolitou prírodou a riekou Dunaj, poskytuje návštevníkom neopakovateľné pohľady nielen na vystavované výtvarné umenie, ale predovšetkým na flóru a faunu, ktorá je na polostrove umenia v každom ročnom období jedinečná.
			<br><br>
			V priľahlom sochárskom parku môžu návštevníci vidieť diela viacerých osobností, akými sú napríklad El Lissitzky, Magdalena Abakanowicz, Jim Dine, Hans van de Bovenkamp, Jozef Jankovič, Arman, J. C. Farhi, Vladimír Kompánek či Rudolf Uher.
			<br>
			Výnimočný je aj pohľad z pochôdznej strechy múzea, kde najmä pohľad na Bratislavu a majestátny Dunaj býva pri západe slnka nezabudnuteľným zážitkom.
			<br>
			Prehliadku múzea, ktoré sa po svojej veľkorysej dostavbe podporenej Vládou SR stalo novým symbolom modernej Bratislavy, dnes odporúčajú najprestížnejšie svetové bedekre a sociálne portály.
			Dovidenia pri Dunaji, priatelia.
		</p>
		<br><br><br><br><br>

	</div>
</div>


<?php 
include ("footer.php"); 
?>

</body>
</html>






