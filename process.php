<?php include 'db.php'; 
session_start();
$name = $_POST['name'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$type =  $_POST['as'];


$_SESSION['email']=$email;

$sql = "INSERT INTO signup(name,email,password,type) VALUES('$name','$email','$password','$type')";

		if(!mysqli_query($conn, $sql)){
			die(mysqli_error($conn));
		} else {
			header("Location: http://localhost/classes/Rform/signupform.html?success=Details%20Added");
		}
		header("Location: http://localhost/classes/home.html");
//$query=mysqli_query($conn,$sql);
?>
