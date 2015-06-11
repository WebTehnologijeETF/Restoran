<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<script src="js\jquery-1.11.3.min.js"></script>
		<script src="js\jquery.cycle.all.js"></script>
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
		<script src="js\imagesch.js"></script>
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
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="javascript:;" onclick="ucitajStranicu('login.php')"><div id="prijava"></div></a>	


			
			<a href="https://www.facebook.com/pages/Palace/355407241330586"><div id="fb"></div></a>
			
			

			<ul id="slider1" style="list-style-type:none">
				<li><img border="0" src="slika1.jpg"></li>
				<li><img border="0" src="slika2.jpg"></li>
				<li><img border="0" src="slika3.jpg"></li>
				<li><img border="0" src="slika4.jpg"></li>
			</ul>


			<div id='welcome'>Dobro dosli!</div>

			<?php
			session_start();
			if(isset($_SESSION['login_user'])){
					echo "<div id='loginInf1'>".$_SESSION['login_user']." je prijavljen!</div>";
					echo '<a href="phpSkripte\odjava.php" id="odjava1">Odjavite se!</a>';
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