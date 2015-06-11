<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
	</head>
	
	<body onload="posaljiKomentar()">
		<div id="frame">
			<div id="header">
				<a href="index.php"><div id="palace"></div></a>
				<a href="index.php"><h1>Palace</h1></a>				
			</div>
			
						
			<div id="komentarNaslov"></div>
						
			

			

			<script>
			
			
				function posaljiKomentar(){
				
					var x=new XMLHttpRequest();
					x.onreadystatechange=function(){
						if(x.readyState==4 && x.status==200){
							document.getElementById('komentarNaslov').innerHTML=x.responseText;
						}
					}
					
					var parametar1=<?php echo json_encode($_GET['ime']);?>; 
					var parametar2=<?php echo json_encode($_GET['email']);?>;
					var parametar3=<?php echo json_encode($_GET['komentar']);?>;
					var parametar4=<?php echo json_encode($_GET['ids']);?>; 

					
					x.open("GET", "phpSkripte\\slanjeKomentaraWS.php?ime="+parametar1+"&email="+parametar2+"&komentar="+parametar3+"&ids="+parametar4, true);
					x.send();  
				} 
			</script>
				
				
			<a id="vratiNazad" href="novostiBaza.php">Vrati se nazad!</a>

			
			

			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			


		</div>	

		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>


