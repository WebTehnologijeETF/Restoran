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
				<a href="index.php"><div id="palace"></div></a>
				<a href="index.php"><h1>Palace</h1></a>				
			</div>
			
						
			
						
			<?php

				function test_input($data){
					$data=stripcslashes($data);
					$data=htmlspecialchars($data);
					return $data;
				}


				$ime=test_input($_GET['ime']);
				$email=test_input($_GET['email']);
				$komentar=test_input($_GET['komentar']);
				$id=test_input($_GET['ids']);


				try{				
					$veza=new PDO("mysql:host=localhost;dbname=restoran", "korisnik", "korisnik");
					$veza->exec("set names utf8");
					$sql="INSERT INTO komentari(novosti, autor, email, tekst)
					VALUES('$id', '$ime', '$email', '$komentar')";
					$veza->exec($sql); 
					echo "<div id='komentarNaslov'>Hvala Vam na ostavljenom komentaru!</div>";          
				}
				catch (Exception $e) {
				 	echo $e->getMessage();
				}      

			?>

			<a id="vratiNazad" href="novostiBaza.php">Vrati se nazad!</a>
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>



