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


				$id=test_input($_POST['broj']);
				
				try{				
					$veza=new PDO("mysql:host=localhost;dbname=restoran", "korisnik", "korisnik");
					$veza->exec("set names utf8");
					
					$sql= $veza->query("SELECT * FROM komentari where id='$id'");
					
					if($sql->rowCount()==0) echo "<div id='brisanjeKomentara2'>Uneseni id je nepostojeci!</div>";
					else{															
					$sql="DELETE FROM komentari where id='$id'";
					$veza->exec($sql); 
					echo "<div id='brisanjeKomentara1'>Komentar je obrisan!</div>";   
					}       
				}
				catch (Exception $e) {
				 	echo $e->getMessage();
				}      

			?>

			<a id="vratiNazad" href="adminPanel.php">Vrati se nazad!</a>

			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>

