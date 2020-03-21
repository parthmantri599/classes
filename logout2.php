<?php
session_start();
session_destroy();
header("location: http://localhost/classes/admin_login.php");


?>