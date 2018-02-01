<?php 
include ("head.php"); 
includeHead("Polakovič | Danubiana");
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
				<a href="o_nas.php">O nás</a>
				<a href="historia.php">História</a>
				<a href="architektura.php">Architektúra</a>
				<a href="meulensteen.php" class="active">Zakladatelia</a>
				<a href="dokumenty.php">Dokumenty</a>
			</div>

			<div class="subMenuBig">
				<a href="meulensteen.php">G. MEULENSTEEN</a>
				<a href="polakovic.php" class="active">V. POLAKOVIČ</a>
			</div>
		</div>
	</div>


	<img class="imgMainImage" src="assets/images/zakladatelia-polakovic_hlavne_foto.jpg" alt="carousel">


	<div class="container containerWithSpecialWidth">
		<div class="row">

			<h1>Vincent Polakovič</h1>

			<p>
				Narodil sa 19. novembra 1958 v Poprade. Je ženatý, s manželkou Katarínou má dve deti, syna Vincenta a dcéru Veroniku. Po ukončení štúdia na Právnickej fakulte UPJŠ v Košiciach v roku 1982 pracoval  v štátnej službe.
				Od roku 1993 je advokátom. V lete roku 1990 uskutočnil cestu po stopách Vincenta van Gogha, počas ktorej navštívil všetky miesta, kde tento slávny umelec žil a tvoril. Inšpirovaný touto cestou postavil a 11. septembra 1993 otvoril dnes už legendárny Žltý dom Vincenta van Gogha v Poprade. V rokoch 1993 – 2000 zorganizoval viacero výstav slovenských výtvarníkov nielen u nás, ale aj v zahraničí.
				<br><br>
			V roku 1994 sa v Holandsku zoznámil s Gerardom Meulensteenom, s ktorým v roku 1999 začal výstavbu prvého súkromného múzea moderného umenia, ktoré bolo otvorené 9. septembra 2000, keď bola oficiálne ukončená činnosť galérie Žltý dom a kontinuálne pokračovala aktivita novej inštitúcie, ktorá dostala meno Danubiana Meulensteen Art Museum v Bratislave-Čunove. Od jej otvorenia je jej prvým riaditeľom. Za realizáciu tohto projektu mu v roku 2000 bola udelená Cena ministra kultúry SR. Počas svojho pôsobenia v Danubiane zorganizoval desiatky domácich aj zahraničných výstav. Je autorom a spoluautorom viacerých knižných publikácií o výtvarnom umení a výtvarných katalógov.</p>

		</div>
	</div>

	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/polakovic/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






