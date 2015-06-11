<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
	</head>
	
	<body onload="obrisiKomentar()">
		<div id="frame">
			<div id="header">
				<a href="index.php"><div id="palace"></div></a>
				<a href="index.php"><h1>Palace</h1></a>				
			</div>

			<div id='brisanjeKomentara1'></div>
			

			<a id="vratiNazad" href="adminPanel.php">Vrati se nazad!</a>

			<script>
				function obrisiKomentar(){
				
				var x=new XMLHttpRequest();
				x.onreadystatechange=function(){
					if(x.readyState==4 && x.status==200){
						document.getElementById('brisanjeKomentara1').innerHTML=x.responseText;
					}
				}
				
				var parametar=<?php echo json_encode($_POST['broj']);?>;
				x.open("GET", "phpSkripte\\brisanjeKomentaraWS.php?id="+parametar, true);
				x.send(); 
				}
			</script>

			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>

