<?php
				$ime=$email=$naslov=$komentar="";
				$imeErr=$emailErr=$komentarErr="";
				$imeUzv=$mailUzv=$komentarUzv=0;
				$imeCol=$mailCol=$komentarCol="FFFFFF";
				$prolaziVal=true;

				function test_input($data){
					$data=stripcslashes($data);
					$data=htmlspecialchars($data);
					return $data;
				}

				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$ime=test_input($_POST["ime"]);
					if(empty($ime) || !preg_match("/^[a-zA-ZčćžšđČĆŽŠĐ]+[ ][a-zA-ZčćžšđČĆŽŠĐ]+$/", $ime)) {
						$imeCol="#FFE6E6";
						$imeErr="Greška!";
						$imeUzv=1;
						$prolaziVal=false;
					}
					
					$naslov=test_input($_POST["naslov"]);

					$email=test_input($_POST["mail"]);
					if(!empty($email)&& !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)){
						$mailCol="#FFE6E6";
						$emailErr="Pogrešan e-mail!";
						$mailUzv=1;
						$prolaziVal=false;
					}	

					$email=test_input($_POST["mail"]);//unakrsna validacija:ukoliko se trazi informacija potreban je mail
					if($naslov=="Tražim informaciju" && !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)){
						$emailErr="Unesite e-mail!";
						$mailUzv=1;
						$prolaziVal=false;
					}

					
					$komentar=test_input($_POST["poruka"]);
					if(empty($komentar) || preg_match("/[ ]+$/", $komentar)){
						$komentarCol="#FFE6E6";
						$komentarErr="Napišite poruku!";
						$komentarUzv=1;
						$prolaziVal=false;
					}					
					
				}
		    ?>