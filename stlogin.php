<?php include 'db.php'; 
session_start();
$msg= "Invalid Email-Id or Password !";
$user = $_POST['semail'];
 $password = $_POST['spassword'];

$query = mysqli_query($conn, "SELECT * FROM signup WHERE email='".$user."' AND password='".$password."' AND type='Student'");

 $numrows= mysqli_num_rows($query);
//$numrows=1;
 if($numrows ==1)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $username=$row['email'];
 $password=$row['password'];
     $name=$row['name'];
 }
 if($user == $username && $password == $password)
 {
 //Redirect Browser
 $_SESSION['user']=$user;
 $_SESSION['name']=$name;
 header('Location:http://localhost/classes/home1.php');
 }
 }
 else
 {
        $_SESSION['msg']=$msg;
      	header('Location:http://localhost/classes/Login/studentlogin.php');
 }
?>