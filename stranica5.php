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


			<img id="slikaRestorana" src="restoranPalace.jpg">
			
			<div id="informacije">
				<p>Kontakt i lokacija:</p>
				<img id=telefon src="telefon.gif">
				<p class="informacijep">033/468-099</p>
				<img id=mail src="mail.jpg">
				<p class="informacijep">palace@etf.unsa.ba</p>
				<img id=location src="lokacija.png">
				<p class="informacijep">Restoran Palace, Put života bb, 71000 Sarajevo</p>
			</div>
              
			
			
			<?php include 'phpFormV.php';?>

			<div id="forma">
				<p>Kontakt forma:</p>   
				<form name="mojaForma" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
				onsubmit="return validateForm()" novalidate >
					ime i prezime*:<br>
					<input type="text" name="ime" value="<?php if(!$prolaziVal) echo $ime;?>" onchange="provjeriIme()"
					style="background-color:<?php if(!$prolaziVal) echo $imeCol;?>"><br> 
					e-mail:<br>
					<input type="text" name="mail" value="<?php if(!$prolaziVal) echo $email;?>" onchange="provjeriMail()"
					style="background-color:<?php if(!$prolaziVal) echo $mailCol;?>"><br>
					razlog obraćanja:<br> 
					<input list="naslov" name="naslov" value="<?php if(!$prolaziVal) echo $naslov;?>">
						<datalist id="naslov">
							<option value="Ulažem prigovor">
							<option value="Tražim informaciju">	
							<option value="Sugestije i prijedlozi">	
						</datalist>	<br>
					poruka*:<br>
					<textarea name="poruka" rows="14" cols="22" required onchange="provjeriPoruku()" 
					style="background-color:<?php if(!$prolaziVal) echo $imeCol;?>"><?php if(!$prolaziVal) echo $komentar;?></textarea><br><br>
					<div id="posalji"><input type="submit" name="dugme" value="Pošalji"></div>
					<div id="reset"><input type="button" value="reset" onclick="resetuj()"></div>
				</form>
			</div>


			<div id="rvrijeme">
				<p id="rvrijemep">Očekujemo Vas sedam dana u nedelji:</p>
				<p>Ponedjeljak-Subota</p>
				<p>08:00 - 22:00</p>
				<p>Nedjelja</p>
				<p>08:00 - 19:00</p>
			</div>

			<div id="uzv1" style="opacity:<?php echo $imeUzv;?>"></div>
			<div id="uzv2" style="opacity:<?php echo $mailUzv;?>"></div>
			<div id="uzv3" style="opacity:<?php echo $komentarUzv;?>"></div>

			<div id="alert">
				<div id="alert1"><?php echo $imeErr;?></div>
				<div id="alert2"><?php echo $emailErr;?></div>
				<div id="alert3"><?php echo $komentarErr;?></div>
			</div>

			<p id="inf">Polja označena * su obavezna za popuniti.</p>
			

			<?php
			session_start();
			if(isset($_SESSION['login_user'])){
					echo "<div id='loginInf5'>Administrator je prijavljen!</div>";
				}
			?>


			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		


	    <script src="mojaskripta.js"></script>
		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>