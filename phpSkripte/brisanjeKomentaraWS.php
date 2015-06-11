<?php

	function test_input($data){
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}


	$id=test_input($_GET['id']);
	
	try{				
		$veza=new PDO("mysql:host=127.0.0.1;dbname=restoran", "korisnik", "korisnik");
		$veza->exec("set names utf8");
		
		$sql= $veza->query("SELECT * FROM komentari where id='$id'");
		
		if($sql->rowCount()==0) echo "Uneseni id je nepostojeci!";
		else{															
		$sql="DELETE FROM komentari where id='$id'";
		$veza->exec($sql); 
		echo "Komentar je obrisan!";   
		}       
	}
	catch (Exception $e) {
	 	echo $e->getMessage();
	}      

?>