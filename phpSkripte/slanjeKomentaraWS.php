<?php

	function test_input($data){
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}


	$ime=test_input($_GET['ime']);
	$email=test_input($_GET['email']);
	$komentar=test_input($_GET['komentar']);
	$id=test_input($_GET['ids']);


	try{				
		$veza=new PDO("mysql:host=127.0.0.1;dbname=restoran", "korisnik", "korisnik");
		$veza->exec("set names utf8");
		$sql="INSERT INTO komentari(novosti, autor, email, tekst)
		VALUES('$id', '$ime', '$email', '$komentar')";
		$veza->exec($sql); 
		print "Hvala Vam na ostavljenom komentaru!";          
	}
	catch (Exception $e) {
	 	echo $e->getMessage();
	}      

?>