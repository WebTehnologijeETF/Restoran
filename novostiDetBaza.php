<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico"/>
		<title>Restoran Palace</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\wp.css"> 
	</head>
	
	<body onload="prikaziNovost()">
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
					echo "<div id='loginInfDetNov'>".$_SESSION['login_user']." je prijavljen!</div>";
					echo '<a href="phpSkripte\odjava.php" id="odjavaDetNov">Odjavite se!</a>';
				}
			?>



			<div class="novosti">
				<div id='novostDet'></div>
			</div>
			

			<script>
				

				function prikaziNovost(){
					
				var x=new XMLHttpRequest();
				x.onreadystatechange=function(){
					if(x.readyState==4 && x.status==200){
						document.getElementById('novostDet').innerHTML=x.responseText;
					}
				}
				
				var parametar=<?php echo $_GET['id'];?>;
				x.open("GET", "phpSkripte\\novostiDetaljnoWS.php?id="+parametar, true);
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





