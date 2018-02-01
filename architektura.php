<?php 
include ("head.php"); 
includeHead("Architektúra | Danubiana");
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
			<!-- <div class="flex-container"> -->
				<div class="subMenuSmall">
					<a href="o_nas.php">O nás</a>
					<a href="historia.php">História</a>
					<a href="architektura.php" class="active">Architektúra</a>
					<a href="meulensteen.php">Zakladatelia</a>
					<a href="dokumenty.php">Dokumenty</a>
				</div>

				<div class="subMenuBig">
					<a href="" class="active">ARCHITEKTÚRA</a>
				</div>
				<!-- </div> -->
			</div>
		</div>


		<img class="imgMainImage" src="assets/images/architektura.jpg" alt="carousel">


		<div class="container containerWithSpecialWidth">
			<div class="row">

				<h1>História budovy</h1>

				<p>Areál, v ktorom je múzeum vybudované, má celkovú rozlohu 7 811 m2. Jeho projektantom je arch. Peter Žalman, ktorý musel vo svojom návrhu zohľadniť množstvo limitujúcich faktorov vyplývajúcich z exkluzivity lokality na vodnom diele. Pri hľadaní tvaru budovy múzea bol dôležitým podnetom historický kontext miesta. V týchto miestach viedla voľakedy severná hranica Rímskej ríše „limes romanus“ (dnes je neďaleko hranica súštátia – Maďarska Rakúska a Slovenska). Predstava tvaru múzea sa preto vykryštalizovala do idey lode – rímskej galéry, ktorá sa stala nadčasovým symbolom spájajúcim minulé so súčasným. Vychádzajúc z tejto základnej myšlienky arch. P. Žalman navrhol lodičkovitý pôdorys so symbolmi vesiel vertikálne sa opierajúcich o bočné telo stavby.
				</p>

				<h1>Dostavba Danubiany</h1>

				<p>Moje spomienky na prvé stretnutie s Danubianou sú hmlisté. Bolo to pred 12 rokmi, krátko po skončení univerzity, keď Vincent Polakovič prvý raz prekročil prah ateliéru Petra Žalmana, kde som vtedy pracoval ako čerstvý absolvent. V ateliéri vládol čulý ruch a aktivita, Peter sa vždy usiloval o vyváženosť. Pragmatické projekty bytoviek, rekonštrukcie, ale aj spolupráca s umelcami, urbanizmus, interiér. Pravidelne dávkované injekcie kreativity a uvoľnenia vo forme súťaží – na novú radnicu, pamätník, námestie, univerzitu, mesto. Práca na Danubiane bola integrálnou súčasťou života v ateliéri Žalman po celý čas môjho tamojšieho pôsobenia. Zhodou okolností len dva mesiace po jej slávnostnom otvorení sme sa s manželkou na jeseň roku 2000 vybrali za novými výzvami do vtedy prosperujúceho Írska. Ešte som netušil, že po ôsmich rokoch sa príbeh Danubiany opäť stane súčasťou môjho profesionálneho života.
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






