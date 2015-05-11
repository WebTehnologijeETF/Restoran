<?php
session_start();
?>
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
				<a href="" onclick="ucitajStranicu('index.php')"><div id="palace"></div></a>
				<a href="" onclick="ucitajStranicu('index.php')"><h1>Palace</h1></a>
			</div>
			
			<div id="nav">
				<ul>
				    <li><a href="" onclick="ucitajStranicu('stranica2.html')">O NAMA</a></li>
					<li><a href="" onclick="ucitajStranicu('stranica3.html')">MENI</a></li> 
					<li><a href="" onclick="ucitajStranicu('stranica4.html')">REZERVACIJE</a></li>
					<li><a href="" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="#"><div id="prijava"></div></a>

			<a href="https://www.facebook.com/pages/Palace/355407241330586"><div id="fb"></div></a>

			<div class="novosti">
				<?php
					function isImage($url){
						$imgExts = array("gif", "jpg", "jpeg", "png", "tiff", "tif");
						$urlExt= pathinfo($url, PATHINFO_EXTENSION);
						if(in_array($urlExt, $imgExts))
						return true;
						return false;				
					}

					$index=$_SESSION["id"];
					$tekstovi=$_SESSION["tekstoviPom"];
					//ispisivanje tekstova
					//postavljanje samo prvog slova stringa toUpper
					$tekstovi[$index][2]=strtolower($tekstovi[$index][2]);
					$tekstovi[$index][2]=ucfirst($tekstovi[$index][2]);
					for ($j=0; $j < count($tekstovi[$index]); $j++) { 
						//ispisivanje naslova
						if($j==2){
							$str=$tekstovi[$index][$j];
							echo "<div id='novostiNaslov'>$str</div>";
							continue;
						}
						//provjera da li se radi o slici
						if($j==3){
							$urlImg=trim($tekstovi[$index][$j]);
							if(isImage($urlImg)){
								echo "<img src='$urlImg'><br>";
								continue;
						    }
						}
						if(trim($tekstovi[$index][$j])=="--"){
							continue;
						}
						echo $tekstovi[$index][$j]."<br>";
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