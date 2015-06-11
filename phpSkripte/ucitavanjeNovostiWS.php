<?php


	try{
		$veza=new PDO("mysql:dbname=restoran;host=127.0.0.1;charset=utf8", "korisnik", "korisnik");
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
			print "<br><a class='novosti2' href='javascript:;' onclick='ucitajStranicu(\"sviKomentari.php?id=$id\")'>Pogledajte sve komentare</a>";
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