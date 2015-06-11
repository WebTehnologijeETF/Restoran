<?php
					
	try{
		$id=$_GET['id'];
		$veza=new PDO("mysql:host=127.0.0.1;dbname=restoran", "korisnik", "korisnik");
		$veza->exec("set names utf8");				

		$rezultat= $veza->query("select id, datum, autor, email, tekst
			from komentari where novosti='$id' order by datum"); 

		if($rezultat->rowCount()==0) print "<br><br><div id='komentarObavijest'>Nema komentara na ovu vijest!</div>";
							
		foreach ($rezultat as $item) {
			print "<br><br><br>";
			print $item['datum'].'<br>';
			if($item['email']!=''){ 
				print '<a href="mailto:'.$item['email'].'">'.$item['autor'].'</a><br>';
				print $item['email'].'<br>';
			}
			else if($item['autor']!='') print $item['autor'].'<br>';
			
			print 'id:'.$item['id'].'<br>'.$item['tekst'];
			}	
				          

	}
	catch (Exception $e) {
	 	echo $e->getMessage();
	}      

?>