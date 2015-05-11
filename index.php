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
			
			

			<div id="slike"></div>		


			<p id="nov">Novosti:</p>

			
			
			<div class="novosti">
				<?php
					//provjera da li je link slika
					function isImage($url){
						$imgExts = array("gif", "jpg", "jpeg", "png", "tiff", "tif");
						$urlExt= pathinfo($url, PATHINFO_EXTENSION);
						if(in_array($urlExt, $imgExts))
						return true;
						return false;				
					}

					$tekstovi = array();
					foreach (new DirectoryIterator('novosti') as $file) {
						if($file->isDot()) continue;
						$myfile=fopen("novosti\\".$file->getFilename(),"r") or die ("Unable to open!");
					//	echo fread($myfile, filesize("novosti\\".$file->getFilename()));
						$nizLinija= array();
						while(!feof($myfile))
							$nizLinija[]=fgets($myfile);
						fclose($myfile);
						$tekstovi[]=$nizLinija;
					}
					
					//sortiranje tekstova
					for ($i=0; $i < count($tekstovi); $i++) { 
						for ($j=$i+1; $j < count($tekstovi); $j++) { 
							if(strtotime($tekstovi[$i][0])<strtotime($tekstovi[$j][0])){
								//$pom= array();
								$pom=$tekstovi[$i];
								$tekstovi[$i]=$tekstovi[$j];
								$tekstovi[$j]=$pom;
							}
														
						}
					}
					
					//ispisivanje tekstova
					for ($i=0; $i < count($tekstovi) ; $i++) { 
						$det=false;
						//postavljanje samo prvog slova stringa toUpper
						$tekstovi[$i][2]=strtolower($tekstovi[$i][2]);
						$tekstovi[$i][2]=ucfirst($tekstovi[$i][2]);
						for ($j=0; $j < count($tekstovi[$i]); $j++) { 
							//ispisivanje naslova
							if($j==2){
								$str=$tekstovi[$i][$j];
								echo "<div id='novostiNaslov'>$str</div>";
								continue;
							}
							//provjera da li se radi o slici
							if($j==3){
								$urlImg=trim($tekstovi[$i][$j]);
								if(isImage($urlImg)){
									echo "<img src='$urlImg'><br>";
									continue;
							    }
							}
							if(trim($tekstovi[$i][$j])=="--"){
								$det=true;
								break;
							}
							echo $tekstovi[$i][$j]."<br>";
						}
						if($det){
						$_SESSION["id"]=$i;
						echo '<a href="" onclick="ucitajStranicu(\'strNovosti.php\')">Detaljnije</a>';
					//	echo "<a href='strNovosti.php?id=$i'>Detaljnije</a>";
						}
						echo "<br><br><br><br><br>";
					}
					//globalna varijabla kojoj mogu pristupati u drugoj skripti
					$_SESSION["tekstoviPom"]=$tekstovi;
				?>
			</div>

			<img src="">

			<br><br><br>	
				<div id="footer">
					<p>Copyright © 2015 Restoran Palace Sarajevo<br>
					Sva prava zadržana</p>
				</div>
			
		</div>

		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>