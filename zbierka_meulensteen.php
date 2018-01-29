<?php 
include ("head.php"); 
includeHead("Zbierka Meulensteen | Danubiana");
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
						<li><a href="zbierka_meulensteen.php" class="active">ZBIERKA</a></li>
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
				<a href="zbierka_meulensteen.php" class="active">Zbierka Meulensteen</a>
				<a href="zbierka_danubiana.php">Zbierka Danubiana</a>
				<a href="zbierka_umelci.php">Zbierka umelci</a>
				<a href="zbierka_zberatelia.php">Zbierka zberatelia</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">ZBIERKA MEULENSTEEN</a>
			</div>
		</div>
	</div>


	<!-- <img class="imgMainImage" src="assets/images/historia.jpg" alt="carousel"> -->


	<div class="container containerWithSpecialWidth">
		<div class="row">

			<p>
				Zbierka zakladateľa Danubiany Gerarda Meulensteena vznikala od založenia múzea v dvoch paralelných líniách: vlastná zbierka Meulensteen a zbierka Danubiana Meulensteen Art Museum. Nový status múzea vo vzťahu k zbierke Meulensteen je založený na možnostiach dlhodobých pôžičiek na výstavné a expozičné účely múzea.
				<br><br>
				Zberateľ Gerard Meulensteen vytvára zbierku od polovice osemdesiatych rokov. Je to zbierka budovaná na osobných kontaktoch a priateľstvách s umelcami, na hlbokom emocionálnom vzťahu k umeniu, ktorý mal najprv osobnostný, privátny charakter. Meulensteenov prístup sa začal meniť a objektivizovať, keď vznikla myšlienka založenia múzea a keď dostala reálnu podobu v Danubiane. Zberateľove záľuby a predstavy sa transformovali do inštitucionalizovanej podoby. Predstavy o tom, ako by sa malo so zbierkou ďalej pracovať, ako ju verejnoprospešne zhodnotiť, dostali jasný zámer: diela musia vyjsť z úkrytu depozitárov do výstavných sál múzea, musia byť prístupné verejnosti, aby sa naplnilo ich poslanie. Pritom jeho prvotnou motiváciou neboli umeleckohistorické kritériá, ani štýlové aspekty, ale podpora dobrého umenia a možnosť cez umenie odovzdávať potešenie a radosť i druhým. Hlavným zámerom zberateľa, ktorý postupne napĺňa, je, aby zbierka slúžila verejnosti.<br><br>

				Dôležitý proces postupnej premeny štruktúry zbierky nastal v priebehu deväťdesiatych rokov, keď sa Gerard Meulensteen zoznámil so slovenským umením. Svoju zbierku intenzívne rozširuje o tvorbu významných osobnosti slovenského umenia druhej polovice dvadsiateho storočia, pričom kladie veľký dôraz na súčasné umenie. Zvláštnu pozornosť venuje aj podpore mladého umenia nielen získavaním diel mladých tvorcov do svojej zbierky, ale napr. aj udeľovaním Meulensteenovej ceny pre mladého výtvarníka.
				<br>

			</p>

		</div>
	</div>

	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/zbierka_meulensteen/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






