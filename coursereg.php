<?php include 'db.php'; 
session_start();
$name = $_POST['name'];
$gender =  $_POST['gender'];
$birthdate =  $_POST['birthdate'];
$email =  $_POST['email'];
$contact =  $_POST['contact'];
$education =  $_POST['education'];
$subject =  $_POST['subject'];


$sql = "INSERT INTO course(name,gender,birthdate,email,contact,education,subject) VALUES('$name','$gender','$birthdate','$email','$contact','$education','$subject')";

		if(!mysqli_query($conn, $sql)){
			die(mysqli_error($conn));
		} else {
			header("Location: http://localhost/classes/regform/index.php?success=Details%20Added");
		}

		header("Location: http://localhost/classes/home1.php");
//$query=mysqli_query($conn,$sql);
?>
