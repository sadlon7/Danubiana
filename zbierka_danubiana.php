<?php 
include ("head.php"); 
includeHead("Zbierka Danubiana | Danubiana");
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
					<li class="active"><a href="zbierka_meulensteen.php">ZBIERKA</a></li>
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
				<a href="zbierka_meulensteen.php">Zbierka Meulensteen</a>
				<a href="zbierka_danubiana.php" class="active">Zbierka Danubiana</a>
				<a href="zbierka_umelci.php">Zbierka umelci</a>
				<a href="zbierka_zberatelia.php">Zbierka zberatelia</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">ZBIERKA DANUBIANA MEULENSTEEN ART MUSEUM</a>
			</div>
		</div>
	</div>


	<!-- <img class="imgMainImage" src="assets/images/historia.jpg" alt="carousel"> -->


	<div class="container containerWithSpecialWidth">
		<div class="row">

			<p>
				V etape existencie múzea ako súkromnej inštitúcie sa dôraz jej činnosti sústreďoval na výstavnú a editorskú oblasť. Zberateľský program nepatril k hlavným predmetom činnosti, preto bol proces budovania zbierky skôr latentný a pozostával najmä z darov umelcov. Takto múzeum získalo kvalitnú kolekciu diel nielen od významných slovenských, ale aj zahraničných umelcov: Gérarda Rancinana, Jiřího Načeradského, Bahrama Hajou atď.
				<br><br>
				Zmenou statusu múzea sa mení aj štruktúra jeho obsahového zamerania. Z toho vyplýva aj intenzívnejší dôraz na budovanie vlastného zbierkového fondu umeleckých diel najmä slovenského výtvarného umenia obdobia druhej polovice dvadsiateho storočia, s prepojením na súčasné dianie. Formy získavania diel do zbierky múzea stavajú na diverzifikácii možností od priamych nákupov, cez podporné kultúrne programy, sponzorské a mecenášske formy, ako aj dary od umelcov a iných subjektov. Múzeum tak získalo diela od Ayako Rokkaku, Ľuba Mikleho, Viktora Freša atď.
			</p>

		</div>
	</div>

	<?php 
	include ("sliderGallery.php"); 
	generateSlides("assets/images/carousel-galery/zbierka_danubiana/");
	include ("footer.php"); 
	generateSliderScript();
	?>

</body>
</html>






