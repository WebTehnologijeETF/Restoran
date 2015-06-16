<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
	</head>
	
	<body onload="prikaziGlavneNovosti()">
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
					<li><a href="javascript:;" onclick="ucitajStranicu('galerija.php')">GALERIJA</a></li>					 
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="javascript:;" onclick="ucitajStranicu('login.php')"><div id="prijava"></div></a>

			<a href="https://www.facebook.com/pages/Palace/355407241330586"><div id="fb"></div></a>


			<?php
			session_start();
			if(isset($_SESSION['login_user'])){
					echo "<div id='loginInfNovosti'>".$_SESSION['login_user']." je prijavljen!</div>";
					echo '<a href="phpSkripte\odjava.php" id="odjavaNovosti">Odjavite se!</a>';
				}
			?>

			<p id="nov">Novosti:</p>



			<div class="novosti"> 
				<div id="glavneNovosti"></div>

				 
			</div> 
	

			


	 	
			
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>
		<script >


			function prikaziGlavneNovosti(){
				var x=new XMLHttpRequest(); 
				x.onreadystatechange=function(){
					if(x.readyState==4 && x.status==200){
						document.getElementById('glavneNovosti').innerHTML=x.responseText;
					}
				}

					
				x.open("GET", "phpSkripte\\ucitavanjeNovostiWS.php", true);
				x.send(); 

				
			}

			

			function prikaziFormu(index,idKomentara){
					
				    <?php $id='"+idKomentara+"'; ?>

				    document.getElementById(index).innerHTML="<form name='formaKomentar' method='get' action='slanjeKomentara.php'><input type='hidden' name='ids' value='<?php echo $id; ?>'><input type='text' name='ime' placeholder='ime'><br> <input type='email' name='email' placeholder='email'><br> <textarea name='komentar' rows='10' cols='15' placeholder='komentar...' required></textarea><br> <input type='submit' name='submit' value='submit'></form>";
				  				 

				}
		</script>
		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>