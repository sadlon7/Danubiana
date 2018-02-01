<?php 
include ("head.php"); 
includeHead("KONTAKTY | Danubiana");
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
				<a href="kontakt.php" class="active">KONTAKTY</a>
				<a href="doprava-lietadlo.php">DOPRAVA</a>
				<a href="vstupne.php">VSTUPNÉ</a>
			</div>

			<div class="subMenuBig">
				<a href="" class="active">KONTAKT</a>
			</div>
		</div>
		
	</div>

	<img class="imgMainImage" src="assets/images/kontakt.jpg" alt="carousel">

	<div class="container containerWithSpecialWidth">
		<div class="row">

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel"> Danubiana Meulensteen Art Museum </div>
					<div class="contactText"> Bratislava-Čunovo, Vodné dielo </div>
					<div class="contactText"> P.O.BOX 9, 810 00 Bratislava </div>
				</div>

				<div class="contactCellRight">
					<div class="contactLabel"> GPS:  N 48.034237, E 17.232605 </div>
					<div class="contactText"> telefón:	 02/62 52 85 01 </div>
					<div class="contactText"> e-mail:	 danubiana@danubiana.sk </div>
				</div>
			</div>

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel"> Otváracie hodiny:  10:00 – 18:00 hod. </div>
					<div class="contactLabel redLabel"> v pondelok zatvorené </div>
				</div>
			</div>

			<div class="separator"></div>

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel">Dr. Vincent Polakovič</div>
					<div class="contactText">vincent@danubiana.sk</div>
				</div>

				<div class="contactCellRight">
					<div class="contactLabel">Ekonóm:</div>
					<div class="contactText">Jana Libušová</div>
					<div class="contactText">ucto@danubiana.sk</div>
				</div>
			</div>

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel">PR a média:</div>
					<div class="contactText">Veronika Polakovičová</div>
					<div class="contactText">0903 605 505</div>
					<div class="contactText">veronika@danubiana.sk</div>
				</div>

				<div class="contactCellRight">
					<div class="contactLabel">Recepcia:</div>
					<div class="contactText">Jana Bartalská</div>
					<div class="contactText">02/62 52 85 01</div>
					<div class="contactText">recepcia@danubiana.sk</div>
				</div>
			</div>

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel">Art Shop:</div>
					<div class="contactText">Katarína Majerechová</div>
					<div class="contactText">02/62 52 85 01</div>
					<div class="contactText">majerechová@danubiana.sk</div>
				</div>

				<div class="contactCellRight">
					<div class="contactLabel">Art Cafe:</div>
					<div class="contactText">Stanislava Kmeťková</div>
					<div class="contactText">02/62 52 85 01</div>
					<div class="contactText">majerechová@danubiana.sk</div>
				</div>
			</div>

			<div class="contactContainer">
				<div class="contactCellLeft">
					<div class="contactLabel">Technik:</div>
					<div class="contactText">Ivan Mužila</div>
					<div class="contactText">0908 687 128</div>
					<div class="contactText">sprava.danubiana@danubiana.sk</div>
				</div>
			</div>
		</div>
	</div>

	<br><br><br>

	<?php 
	include ("footer.php"); 
	?>

</body>
</html>






