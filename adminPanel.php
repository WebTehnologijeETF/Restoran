<?php  
	session_start(); 
	$user=$_SESSION['login_user'];
	if($user!='admin'){
		header("location: index.php");
	}

?>
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
				<a href="index.php"><div id="palace"></div></a>
				<a href="index.php"><h1>Palace</h1></a>				
			</div>
			
			<p id="adminProstor">Administratorski prostor:<p>

			
				
			<p class="adminOpcije">Brisanje komentara</p>

						

			<div style="padding:10px">
				<form name="komentarForma" method="post" action="brisanjeKomentara.php">
					Unesite id komentara:<br>
					<input name="broj" type="number" min="1" required><br>
					<input type="submit" value="Obrisi">
				</form>
			</div>			
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>



