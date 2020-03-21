<?php include 'db.php'; 
session_start();

$user = $_POST['admin_user'];
 $password = $_POST['password'];
$error= "Inavlid Authentication !";
$query = mysqli_query($conn, "SELECT * FROM signup WHERE name='".$user."' AND password='".$password."' AND type='admin'");

 $numrows= mysqli_num_rows($query);
//$numrows=1;
 if($numrows ==1)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $username=$row['name'];
 $password=$row['password'];
 
 }
 if($user == $username && $password == $password)
 {
 //Redirect Browser
 $_SESSION['user']=$user;
 
 header('Location:http://localhost/classes/admin2.php');
 }
 }
 else
 {
     $_SESSION['error']=$error;
 	header('Location:http://localhost/classes/admin_login.php');
}
?>