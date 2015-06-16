<?php 
	session_start();
	if(isset($_SESSION['login_user'])){
		$user=$_SESSION['login_user'];
		if($user=='admin') header('Location:adminPanel.php'); 
		header('Location:index.php'); 
	}

	$error="";
	if(!empty($_POST)){
		$loginName=$_POST['ime'];
		$loginPass=$_POST['pass'];

		//zastita od mysql injection
		$loginName=stripcslashes($loginName);
		$loginPass=stripcslashes($loginPass);
		
		$loginName=trim($loginName);
		$loginPass=trim($loginPass);

		$loginName=htmlspecialchars($loginName);
		$loginPass=htmlspecialchars($loginPass);

		try{				
			$veza=new PDO("mysql:host=127.0.0.1;dbname=restoran", "korisnik", "korisnik");
			$veza->exec("set names utf8");

			$rezultat= $veza->query("select username,password from loginpodaci where username='$loginName'");

			if($rezultat->rowCount()==0) $error="Korisnik ne postoji!";

			foreach ($rezultat as $item) {
				if($item['password']==$loginPass){
					$_SESSION['login_user']=$loginName;
					header("location:adminPanel.php");
				}
				else{
				$error="Password nije ispravan!";
				}
			}	
				
			} 
			catch (Exception $e) {
			 	echo $e->getMessage();
			}   
	}

?>
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
				    <li><a href="javascript:;" onclick="ucitajStranicu('stranica2.html')">O NAMA</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('novostiBaza.php')">NOVOSTI</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica3.html')">MENI</a></li>
					<li><a href="javascript:;" onclick="ucitajStranicu('galerija.php')">GALERIJA</a></li>					 
					<li><a href="javascript:;" onclick="ucitajStranicu('stranica5.php')">KONTAKT</a></li>
				</ul>
			</div>
			
			<a href="javascript:;" onclick="ucitajStranicu('login.php')"><div id="prijava"></div></a>

			<a href="https://www.facebook.com/pages/Palace/355407241330586"><div id="fb"></div></a>
			
			<div id='adminPanel'>
				<p>Admin prijava(admin/admin)</p>
				<form name='loginForma' method='post'  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<input type='text' name='ime' placeholder='user name' required><br>
				<input type='password' name='pass' placeholder='password' required><br>
				<input type='submit' value='Prijavi se'>
			    </form>
			    <br><div id="loginError"><?php echo $error; ?></div>
			</div>

			
						
			<div id="footer">
				<p>Copyright © 2015 Restoran Palace Sarajevo<br>
				Sva prava zadržana</p>
			</div>
			
		</div>

							

		<script src="js\UcitavanjeStranica.js"></script>		
	</body>
</html>



