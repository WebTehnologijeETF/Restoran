﻿<!DOCTYPE html>
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
				    <li><a href="javascript:;" onclick="ucitajStranicu('stranica2.html')">O NAMA</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica3.html')">MENI</a></li> 
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica4.html')">REZERVACIJE</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="javascript:;"><div id="prijava"></div></a>

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

			
			<?php
				$ime=$email=$naslov=$komentar="";
				$imeErr=$emailErr=$komentarErr="";
				$imeUzv=$mailUzv=$komentarUzv=0;

				function test_input($data){
					$data=trim($data);
					$data=stripcslashes($data);
					$data=htmlspecialchars($data);
					return $data;
				}

				if($_SERVER["REQUEST_METHOD"]=="POST"){
					if(empty($_POST["ime"])) {
						$imeErr="Greška!";
						$imeUzv=1;
					}
					else {
						$ime=test_input($_POST["ime"]);
						if(!preg_match("/^[a-zA-ZčćžšđČĆŽŠĐ]+[ ][a-zA-ZčćžšđČĆŽŠĐ]+$/", $ime)){
							$imeErr="Greška!";
							$imeUzv=1;
						}
					}
					
					$email=test_input($_POST["mail"]);
					if(!empty($email) && !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)){
						$emailErr="Pogrešan e-mail!";
						$mailUzv=1;
					}					
					
					if(empty($_POST["poruka"])){
						$komentarErr="Napišite poruku!";
						$komentarUzv=1;
					}
					else $komentar=test_input($_POST["poruka"]);
					
					$naslov=test_input($_POST["naslov"]);
				}
		    ?>

			<div id="forma">
				<p>Kontakt forma:</p>
				<form name="mojaForma" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
				onsubmit="return validateForm()" novalidate>
					ime i prezime*:<br>
					<input type="text" name="ime" onchange="provjeriIme()"><br> <!--required-->
					e-mail:<br>
					<input type="text" name="mail" onchange="provjeriMail()"><br>
					razlog obraćanja:<br> 
					<input list="naslov" name="naslov">
						<datalist id="naslov">
							<option value="Ulažem prigovor">
							<option value="Tražim informaciju">	
							<option value="Sugestije i prijedlozi">	
						</datalist>	<br>
					poruka*:<br>
					<textarea name="poruka" rows="14" cols="22" required onchange="provjeriPoruku()"></textarea><br><br>
					<div id="posalji"><input type="submit" name="dugme" value="Pošalji"></div>
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
			

			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>	

		

<!--		<script>
			var boolIme=false;
			var boolPoruka=false;

			function validateForm(){
				var b=document.forms["mojaForma"]["dugme"];
				if(boolIme && boolPoruka) return true;
				else return false;
				}

			
			function provjeriIme(){
				var x=document.forms["mojaForma"]["ime"];
				var imeRegEx=/^[a-zA-ZčćžšđČĆŽŠĐ]+[ ][a-zA-ZčćžšđČĆŽŠĐ]+$/;
				var alertIme=document.getElementById("alert1");
				if(!imeRegEx.test(x.value)){
					x.style.background="#FFE6E6";
				 	document.getElementById('uzv1').style.opacity=1.0;
				 	boolIme=false;
				 	alertIme.innerHTML="Greška!";
				 	validateForm();
				}
				else{
					x.style.background="#EAFEEA";
					document.getElementById('uzv1').style.opacity=0;
					boolIme=true;
					alertIme.innerHTML="";
					validateForm();
				}									
			}

			function provjeriMail(){
				var x=document.forms["mojaForma"]["mail"];
				var mejlRegEx=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
				var alertMail=document.getElementById("alert2");
				if(!mejlRegEx.test(x.value)){
					x.style.background="#FFE6E6";
					document.getElementById('uzv2').style.opacity=1.0;
					alertMail.innerHTML="Pogrešan e-mail!";
					
				}
				else{
					x.style.background="#EAFEEA";
					document.getElementById('uzv2').style.opacity=0;
					alertMail.innerHTML="";
					
				}
			}

			function provjeriPoruku(){
				var x=document.forms["mojaForma"]["poruka"];
				var alertPoruka=document.getElementById("alert3");
				if(x.value=="" || x.value==null){
					x.style.background="#FFE6E6";
					document.getElementById('uzv3').style.opacity=1.0;
					boolPoruka=false;
					alertPoruka.innerHTML="Napišite poruku!";
					validateForm();
				}
				else{
					x.style.background="#EAFEEA";
					document.getElementById('uzv3').style.opacity=0;
					boolPoruka=true;
					alertPoruka.innerHTML="";
					validateForm();
				} 
			} 
		</script>  -->
	<!--	<script src="mojaskripta.js"></script> -->
		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>