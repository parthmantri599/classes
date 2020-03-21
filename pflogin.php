<?php include 'db.php'; 
session_start();
$msg= "Invalid Email-Id or Password !";
$user = $_POST['pemail'];
$password = $_POST['ppassword'];

$query = mysqli_query($conn, "SELECT * FROM signup WHERE email='".$user."' AND password='".$password."' AND type='Prof'");

$numrows= mysqli_num_rows($query);
//$numrows=1;

if($numrows ==1) {
    while($row = mysqli_fetch_assoc($query)) {
        $username=$row['email'];
        $password=$row['password'];
        $name=$row['name'];
    }
    if($user == $username && $password == $password) {
        //Redirect Browser
        $_SESSION['user']=$user;
        $_SESSION['name']=$name;
        header('Location:http://localhost/classes/pfmyprofile.php');
    }
}
else {
    $_SESSION['msg']=$msg;
    header('Location:http://localhost/classes/Login/professorlogin.php');
}
?>