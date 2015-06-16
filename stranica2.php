<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
	</head>
	
	<body>
		<div id="frame">
			<div id="header">
				<a href="javascript:;" onclick="ucitajStranicu('index.php')"><div id="palace"></div></a>
				<a href="javascript:;" onclick="ucitajStranicu('index.php')"><h1>Palace</h1></a>				
			</div>
			
			<div id="nav">
				<ul>
				    <li><a href="javascript:;" onclick="ucitajStranicu('stranica2.php')">O NAMA</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('novostiBaza.php')">NOVOSTI</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica3.php')">MENI</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('galerija.php')">GALERIJA</a></li>					 
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="javascript:;" onclick="ucitajStranicu('login.php')"><div id="prijava"></div></a>

			<a href="https://www.facebook.com/pages/Palace/355407241330586"><div id="fb"></div></a>
			
			<img id="kuhar" src="kuhar.jpg">	

			<div id="partneri">
				<p>Naši partneri:</p>
				<ul>
					<li><a href="http://elevenmadisonpark.com/">elevenmadisonpark</a></li>
					<li><a href="http://www.restaurant-aqua.com/">restaurant-aqua</a></li>
					<li><a href="http://www.centralrestaurante.com.pe/">centralrestaurante</a></li>
					<li><a href="http://www.noburestaurants.com/">noburestaurants</a></li>
					<li><a href="http://www.lebristolparis.com/">lebristolparis</a></li>
					<li><a href="http://www.palma.ba/">palma</a></li>
					<li><a href="http://www.hoteleurope.ba/">hoteleurope</a></li>
					<li><a href="http://www.bristolsarajevo.com/">bristolsarajevo</a></li>
				</ul>
			</div>

			<div id="onama">
				<p>O NAMA</p>
				<p>
				Restoran Palace je osnovan 2005 godine. Definiše se kao objekat visoke kategorije, velikog
				kapaciteta, izuzetnim komforom	i ambijentom i bogatom ponudom.
				Zamišljen kao oaza vrhunske ponude, restoran Palace odiše modernim stilom koji stvara
				savršeno okruženje gastronomskim delicijama iz naše ponude. Uz to pratimo godišnja doba i
				darove prirode (sezonsko voće i povrće, riba, meso...) te ih prezentiramo kroz posebne
				dnevne ponude restorana. Restoran svoju ponudu bazira na jelima nacionalne kuhinje, a radi
				na principu a `la cart usluge. Ugodnom atmosferom i mirnoćom svog ambijenta, lepezom biranih
				jela, diskretnom i ekskluzivnom uslugom, restoran Palace uspijeva udovoljiti i ugostiti u
				svakoj prilici, banketima, poslovnim susretima, obiteljskim svečanostima, svadbama, te
				ostalim događajima koje želite zapamtiti i podijeliti sa Vama dragim osobama. Visoka stručnost,
				vrhunsko poznavanje kulinarstva i gastronomije, te dugogodišnje iskustvo u vođenju elitnih
				ugostiteljskih objekata voditelja kuće, garancija su zadovoljstva naših gostiju.</p>

			</div>

			<?php
			session_start();
			if(isset($_SESSION['login_user'])){
					echo "<div id='loginInf2'>".$_SESSION['login_user']." je prijavljen!</div>";
					echo '<a href="phpSkripte\odjava.php" id="odjava2">Odjavite se!</a>';
				}
			?>
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>



