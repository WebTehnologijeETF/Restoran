<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="wp.css"> 
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
			
			



			<div class="novosti">
			<?php

				$index=$_GET['id'];
				
				try{
									 	

					$veza=new PDO("mysql:host=localhost;dbname=restoran", "korisnik", "korisnik");
					$veza->exec("set names utf8");
					$rezultat=$veza->query("select id, autor, naslov, slika, datum, tekst, tekstDet from novosti where id=$index
					 order by datum desc");
					
										
					foreach ($rezultat as $item) {
						$item['naslov']=strtolower($item['naslov']);
						$item['naslov']=ucfirst($item['naslov']);
						
							print $item['datum']."<br>".$item['autor']."<br><div id='novostiNaslov'>".$item['naslov'].
							"</div><br><img src='".$item['slika']."'><br>".$item['tekstDet'];
							
						
					}
					
				}
				catch (Exception $e) {
				 	echo $e->getMessage();
				} 



			?>

			</div>








			
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>





