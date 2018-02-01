<?php 
include ("head.php"); 
includeHead("KLUB | Danubiana");
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
					<li class="active"><a href="klub.php">KLUB</a></li>
					<li><a href="kontakt.php">KONTAKT</a></li>

					<li><a href=""><img class="danubianaNavFlag" src="assets/images/logos/flagUK.png" alt="carousel"></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container containerWithSpecialWidth">
		<div class="row">
			<div class="subMenuBig">
				<a href="">KLUB</a>
			</div>
		</div>
	</div>

	<img class="imgMainImage" src="assets/images/klub.jpg" alt="carousel">


	<div class="container containerWithSpecialWidth">
		<div class="row">
			<p>Necelých 20 km južne od Bratislavy sa nachádza jedno z najromantickejších múzeí moderného umenia v Európe – Danubiana Meulensteen Art Museum.
				Jeho zakladateľmi sú holandský zberateľ a podporovateľ umenia Gerard Meulensteen z Eindhovenu a slovenský galerista Vincent Polakovič.
				<br><br>
				Od roku 2000, keď bolo múzeum otvorené, uskutočnilo desiatky výstav najprestížnejších osobností slovenskej, európskej a svetovej výtvarnej scény (Karel Appel, Sam Francis, Miroslav Cipár, Markus Prachensky, Ilona Kesserü Ilona, Rudolf Sikora, Martín Chirino, Vladimír Popovič a ďalší).
			</p>
			<br><br><br><br>

		</div></div>

		<div class="clubCards">
			
			<div class="card">
				<div class="image">
					<img src="assets/images/club-card-types/member.jpg" alt="Member Card">		
				</div>
				<div class="price">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<div class="priceText">40 E</div>
				</div>
				<div class="label">
					<p> platí na jeden rok </p>
				</div>
			</div>

			<div class="card">
				<div class="image">
					<img src="assets/images/club-card-types/family.jpg" alt="Member Card">		
				</div>
				<div class="price">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<div class="priceText">70 E</div>
				</div>
				<div class="label">
					<p> platí na jeden rok </p>
				</div>
			</div>

			<div class="card">
				<div class="image">
					<img src="assets/images/club-card-types/vip.jpg" alt="Member Card">		
				</div>
				<div class="price">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<div class="priceText">150 E</div>
				</div>
				<div class="label">
					<p> platí na jeden rok </p>
				</div>
			</div>

			<div class="card">
				<div class="image">
					<img src="assets/images/club-card-types/student.jpg" alt="Member Card">		
				</div>
				<div class="price">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<div class="priceText">20 E</div>
				</div>
				<div class="label">
					<p> platí na jeden rok </p>
				</div>
			</div>

			<div class="card">
				<div class="image">
					<img src="assets/images/club-card-types/senior.jpg" alt="Member Card">		
				</div>
				<div class="price">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<div class="priceText">20 E</div>
				</div>
				<div class="label">
					<p> platí na jeden rok </p>
				</div>
			</div>

		</div>

		<div class="container containerWithSpecialWidth">
			<div class="row">

				<form>
					<div class="form-group">
						<label for="exampleFormControlInput1">titul</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">meno</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">priezvisko</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">adresa</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">mesto</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">PSC</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">e-mail</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">telefon</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						<label class="form-check-label" for="exampleRadios2">
							chcem dostávať informácie a novinky o Danubiane e-mailom
						</label>
					</div>

					<div class="buttons">
						<button type="submit" class="btn btn-default">zmazať formulár</button>
						<button type="submit" class="btn btn-default">odoslať objdnávku</button>
					</div>

					<p>Zatiaľ je možné doručiť členskú kartu dobierkou Slovenskou poštou</p>


				</form>



				<br><br>
			</div>
		</div>

		<?php 
		include ("footer.php"); 
		?>

	</body>
	</html>






