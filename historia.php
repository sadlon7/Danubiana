<?php 
include ("head.php"); 
includeHead("História | Danubiana");
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
				<a href="historia.php" class="active">História</a>
				<a href="architektura.php">Architektúra</a>
				<a href="meulensteen.php">Zakladatelia</a>
				<a href="dokumenty.php">Dokumenty</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">HISTÓRIA</a>
			</div>
		</div>
	</div>


	<img class="imgMainImage" src="assets/images/historia.jpg" alt="carousel">


	<div class="container containerWithSpecialWidth">
		<div class="row">

			<h1>História</h1>

			<p>
				Danubiana Meulensteen Art Museum mohlo vzniknúť ako súkromná muzeálna inštitúcia až po páde totalitného systému roku 1989. Dovtedy bola zberateľská a muzeálna činnosť výlučnou doménou štátnych inštitúcií. Múzeum začalo svoju činnosť 9. septembra roku 2000. Jeho zakladateľom je holandský podnikateľ a zberateľ umenia Gerard H. Meulensteen.
				<br><br>
				Budova je umiestnená na atraktívnom mieste na Dunaji, na polostrove vbiehajúcom do vodnej nádrže Gabčíkovo. Ústrednou myšlienkou bola podpora súčasného slovenského umenia a najmä mladých výtvarníkov. Danubiana si rýchlo získala nielen široký ohlas, ale aj odborný kredit svojimi prestížnymi výstavami, budovaním medzinárodnej zbierky maľby, zbierky súčasného slovenského umenia, medzinárodnej kolekcie exteriérovej plastiky, ako aj vydávaním odborných publikácií. Mimoriadne dôležitou súčasťou oživenia umeleckej scény sa stala prezentácia umenia zo zahraničia, a tým vytváranie potrebných možností konfrontácie, ktoré donedávna chýbali. V priebehu svojej činnosti sa Danubiana stala miestom, kde návštevník nájde výstavy renomovaných umelcov svetového formátu. Na desiatkach výstav múzeum prezentovalo tvorbu vynikajúcich osobností európskej a svetovej scény (Karel Appel, Magdalena Abakanovicz, José Guinovart, Martín Quirino, umelci Cobry, Zoltan a Madeleine Kemeny, Sam Francis, Robert Combas, Karl Prantl), ako aj širšie koncipované projekty súčasného umenia, napr. Holandska, Rakúska, Maďarska, Česka i Ruska.
				<br>
				<br>
				Od roku 2012 múzeum mení svoj status a stáva sa neziskovou verejnoprospešnou muzeálnou inštitúciou s väčšinovou účasťou štátu. Čiastočne sa tým činnosť múzea zintenzívňuje o vývin slovenského umenia druhej polovice dvadsiateho storočia s jeho prepojením na súčasné dianie. Výstavné formy umeleckej prezentácie sa po dobudovaní múzea rozšíria o stále expozície moderného a súčasného slovenského i európskeho umenia.
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






