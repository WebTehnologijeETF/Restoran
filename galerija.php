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
			
			

			<div id="img2">
				<div class="img"><a target="_blank" href="jela\slika1.html"><img src="jela\slika1.jpg" width="270" height="203"></a></div>	
				<div class="img"><a target="_blank" href="jela\slika2.html"><img src="jela\slika2.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika3.html"><img src="jela\slika3.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika4.html"><img src="jela\slika4.jpg" width="270" height="203"></a></div>	
				<div class="img"><a target="_blank" href="jela\slika5.html"><img src="jela\slika5.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika6.html"><img src="jela\slika6.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika7.html"><img src="jela\slika7.jpg" width="270" height="203"></a></div>	
				<div class="img"><a target="_blank" href="jela\slika8.html"><img src="jela\slika8.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika9.html"><img src="jela\slika9.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika10.html"><img src="jela\slika10.jpg" width="270" height="203"></a></div>	
				<div class="img"><a target="_blank" href="jela\slika11.html"><img src="jela\slika11.jpg" width="270" height="203"></a></div>
				<div class="img"><a target="_blank" href="jela\slika12.html"><img src="jela\slika12.jpg" width="270" height="203"></a></div>
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



