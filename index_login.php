<?php 
		include 'config.php';
	
		session_start();

		$uidUsers = $_POST['uid'];	
		$pwd = $_POST['pwd'];

		$qeury = $connect->prepare("SELECT * FROM `login` WHERE uidUsers = :uidUsers AND pwdUsers = :pwd;");
		$qeury->bindParam(':uidUsers',$uidUsers);
		$qeury->bindParam(':pwd',$pwd);
		$qeury->execute();
	
		$rowc = $qeury->rowCount();
		

		if($rowc >= 1){

			$_SESSION['uidUsers'] = $uidUsers; 
			header("location:welcome.php");

		}else{
			header("location:index.php?error");
		}
		
 ?>