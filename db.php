<?php

$conn = mysqli_connect('localhost','root','root','classes');
if(mysqli_connect_error()){
	echo 'DB Connection Error:'.mysqli_connect_error();
}
?>