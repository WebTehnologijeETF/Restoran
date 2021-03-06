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
					echo "<div id='loginInf3'>".$_SESSION['login_user']." je prijavljen!</div>";
					echo '<a href="phpSkripte\odjava.php" id="odjava3">Odjavite se!</a>';
				}
			?>	
			
			<div id="tabela">
			<p class="meni">Predjela / Starters</p>
			<table>
				<tr>
					<td>Carpaccio<br><div class="menid">(sa rukolom, parmezanom,<br>cherry paradajzom i celerom)</div></td>
					<td class="cijena">16,00</td>
					<td>Carpaccio<div class="menid">(rucola, parmesan, cherry tomato, celery)</div></td>
				</tr>
				<tr>
					<td>Dimljeni biftek</td>
					<td class="cijena">12,00</td>
					<td>Smoked beef fillet</td>
				</tr>
				<tr>
					<td>Dimljeni losos<br><div class="menid">(sa mariniranim tikvicama i kavijarom)</div></td>
					<td class="cijena">20,00</td>
					<td>Smoked salmon<br><div class="menid">(with marinated zucchini and caviar)</div></td>
				</tr>
				<tr>
					<td>Tartar biftek</td>
					<td class="cijena">40,00</td>
					<td>Tartar stake</td>
				</tr>
			</table><br><br>	

			<p class="meni">Salate / Salads</p>
			<table>
				<tr>
					<td>Zelena salata</td>
					<td class="cijena">4,00</td>
					<td>Lettuce</td>
				</tr>
				<tr>
					<td>Salata Caprese<br><div class="menid">(mozzarela,luk, paradajz,<br> bosiljak)</div></td>
					<td class="cijena">14,00</td>
					<td>Caprese salad<br><div class="menid">(mozzarela, onion, tomato,<br> basil)</div></td>
				</tr>
				<tr>
					<td>Salata alla chef<br><div class="menid">(rukola,parmezan,šampinjoni,<br> biftek)</div></td>
					<td class="cijena">18,00</td>
					<td>Salad a' la Chef<br><div class="menid">(rucola, parmesan, mushrooms,<br> beef filet)</div></td>
				</tr>
				<tr>
					<td>Salata Nizza<br><div class="menid">(mješana sezonska, tunjevina,<br>jaja, masline)</div></td>
					<td class="cijena">16,00</td>
					<td>Nizza salad<br><div class="menid">(mixed seasons salad, tuna,<br>eggs, olives)</div></td>
				</tr>
				<tr>
					<td>Šopska salata<br><div class="menid">(paprika, paradajz, krastavac,<br>luk, travnički sir)</div></td>
					<td class="cijena">5,00</td>
					<td>Nizza salad<br><div class="menid">(pepper, tomato, cucumber<br>onion, Travnik white cheese)</div></td>
				</tr>	
			</table><br><br>

			<p class="meni">Tjestenina / Pasta</p>
			<table>
				<tr>
					<td>Panna e verdura<br><div class="menid">(vrhnje, julienne povrće)</div></td>
					<td class="cijena">14,00</td>
					<td>Panna e verdura<br><div class="menid">(cream, julienne vegetables)</div></td>
				</tr>
				<tr>
					<td>Penne all' arrabiata<br><div class="menid">(paradajz sos, bijeli luk,<br>ljuti peperoni)</div></td>
					<td class="cijena">12,00</td>
					<td>Penne all' arrabiata<br><div class="menid">(tomato sauce, garlic,<br>hot pepers)</div></td>
				</tr>
				<tr>
					<td>Spaghetti carbonara<br><div class="menid">(pureća šunka, vrhnje,<br>žumance)</div></td>
					<td class="cijena">15,00</td>
					<td>Spaghetti carbonara<br><div class="menid">(turkey ham, cream,<br>egg yolk)</div></td>
				</tr>
			</table><br><br>

			<p class="meni">Glavna jela / Main courses</p>
			<table>
				<tr>
					<td>Rolovana piletina alla pizzaiola<br><div class="menid">(pileća prsa rolovana sa sirom,<br>povrćem i šunkom)</div></td>
					<td class="cijena">18,00</td>
					<td>Rolled chicken alla pizzaiola<br><div class="menid">(chicken brest rolled with chees,<br>vegetables and ham)</div></td>
				</tr>	
				<tr>
					<td>Pileći file u sosu<br> od višanja</td>
					<td class="cijena">16,00</td>
					<td>Chicken fillet in<br>cherry sauce</td>
				</tr>
				<tr>
					<td>Pureća rolada u carry sosu<br><div class="menid">(punjena špinatom, šampinjonima<br>i sirom)</div></td>
					<td class="cijena">20,00</td>
					<td>Rolled turkey in curry sauce<br><div class="menid">(stuffed with spinach, mushrooms<br>and cheese)</div></td>
				</tr>
				<tr>
					<td>Teleći odresci<br><div class="menid">(bečki, pariški i natur)</div></td>
					<td class="cijena">20,00</td>
					<td>Veal steak<br><div class="menid">(Vienna, Paris or Natur)</div></td>
				</tr>
				<tr>
					<td>Biftek u zelenom biberu<br></td>
					<td class="cijena">25,00</td>
					<td>Beef fillet in greeen pepper</td>
				</tr>
				<tr>
					<td>Biftek u gorgonzola sosu<br></td>
					<td class="cijena">25,00</td>
					<td>Beef fillet in gorgonzola<br> sauce</td>
				</tr>
				<tr>
					<td>Biftek alla modenese<br><div class="menid">(začinsko bilje i sos od balzamika)</div></td>
					<td class="cijena">25,00</td>
					<td>Beef fillet ala modenese<br><div class="menid">(herbs and balsamico sauce)</div></td>
				</tr>
				<tr>
					<td>Lignje na žaru</td>
					<td class="cijena">18,00</td>
					<td>Grilled squids</td>
				</tr>
				<tr>
					<td>Lubin</td>
					<td class="cijena">32,00</td>
					<td>Bass</td>
				</tr>
				<tr>
					<td>Orada</td>
					<td class="cijena">32,00</td>
					<td>Gilthead</td>
				</tr>
				<tr>
					<td>Škampi na mediteranski način</td>
					<td class="cijena">35,00</td>
					<td>Scampi alla Mediterranean</td>
				</tr>
				<tr>
					<td>Pastrmka na žaru</td>
					<td class="cijena">18,00</td>
					<td>Grilled trout</td>
				</tr>

			</table>

			<p id="cijenek">Cijene su izražene u KM / All prices are in KM</p>
			</div>
			
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>
		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>