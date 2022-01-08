<?php  

include 'config.php';


$username = $_POST['username'];
$email = $_POST['mail'];
$password = $_POST['pwd'];


$qeury = $connect->prepare("INSERT INTO `login`(`uidUsers`,`emailUsers`,`pwdUsers`) VALUES ( :username,:mail,:pwd)");

$qeury->bindParam(':username',$username);
$qeury->bindParam(':mail',$mail);	
$qeury->bindParam(':pwd',$password);


$qeury->execute();

if ($query) {
    header("location: index.php?Signup Success");
}
else{
    echo "Please enter all fields";
}

?>