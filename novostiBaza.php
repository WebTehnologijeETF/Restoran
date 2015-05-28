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


			<?php
			session_start();
			if(isset($_SESSION['login_user'])){
					echo "<div id='loginInf3'>Administrator je prijavljen!</div>";
				}
			?>

			<p id="nov">Novosti:</p>



			<div class="novosti"> 
				<?php


				try{
									 	

					$veza=new PDO("mysql:host=localhost;dbname=restoran", "korisnik", "korisnik");
					$veza->exec("set names utf8");
					$rezultat=$veza->query("select id, autor, naslov, slika, datum, tekst, tekstDet from novosti order by
						datum desc");
					
					if(!$rezultat){
						$greska=$veza->errorInfo();
						print"SQL greška: ".$greska[2];
					}


					
					foreach ($rezultat as $item) {
						$item['naslov']=strtolower($item['naslov']);
						$item['naslov']=ucfirst($item['naslov']);
						print $item['datum']."<br>".$item['autor']."<br><div id='novostiNaslov'>".$item['naslov'].
						"</div><br><img src='".$item['slika']."'><br>".$item['tekst'];
						$id=$item['id'];
						if($item['tekstDet']!=''){
							print "<a class='novosti2' href='javascript:;' onclick='ucitajStranicu(\"novostiDetBaza.php?id=$id\")'>
							<br>Detaljnije</a>";
						}
						$komentarBr="komentar".$id;
						print "<br><a class='novosti2' href='javascript:;' onclick='ucitajStranicu(\"sviKomentari.php?id2=$id\")'>Pogledajte sve komentare</a>";
						$idNovosti=$item['id'];
						$brKomentara=$veza->query("select * from komentari where novosti='$idNovosti'");
						$brojKomentara=$brKomentara->rowCount();
						print " ($brojKomentara)";
						print "<a class='novosti2' id='napisiKomentar' href='javascript:;' onclick='prikaziFormu(\"$komentarBr\",\"$id\")'>Napisite komentar</a>";
						print "<div id='komentar".$id."'></div>";
						print "<br><br><br><br>";
					}
					
					} catch (Exception $e) {
					 	echo $e->getMessage();
					 } 

				?>

				 
			</div> 
	

			<script>

				
				function prikaziFormu(index,idKomentara){
					
				    <?php $id='"+idKomentara+"'; ?>

				    document.getElementById(index).innerHTML="<form name='formaKomentar' method='get' action='slanjeKomentara.php'><input type='hidden' name='ids' value='<?php echo $id; ?>'><input type='text' name='ime' placeholder='ime'><br> <input type='email' name='email' placeholder='email'><br> <textarea name='komentar' rows='10' cols='15' placeholder='komentar...' required></textarea><br> <input type='submit' name='submit' value='submit'></form>";
				  				 

				}
			</script>


	 	
			
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>
		<script src="UcitavanjeStranica.js"></script>		
	</body>
</html>