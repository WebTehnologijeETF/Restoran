<?php
	$index=$_GET['id'];
	
		try{
			$veza=new PDO("mysql:host=127.0.0.1;dbname=restoran", "korisnik", "korisnik");
			$veza->exec("set names utf8");
			$rezultat=$veza->query("select id, autor, naslov, slika, datum, tekst, tekstDet from novosti where id=$index
			 order by datum desc");
			
								
			foreach ($rezultat as $item) {
				$item['naslov']=strtolower($item['naslov']);
				$item['naslov']=ucfirst($item['naslov']);
				
					print $item['datum']."<br>".$item['autor']."<br><div id='novostiNaslov'>".$item['naslov'].
					"</div><br><img src='".$item['slika']."'><br>".$item['tekstDet'];
					
				
			}
			
		}
		catch (Exception $e) {
		 	echo $e->getMessage();
		}
	
	
?>