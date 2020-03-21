<?php
session_start();
if (!(isset($_SESSION['user']) ))
{
  header('location: classes/admin_login.html');

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>KP ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
    
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					
                    <?php

$conn = mysqli_connect('localhost','root','root','classes');
if(mysqli_connect_error()){
	echo 'DB Connection Error:'.mysqli_connect_error();
}

                    
                    
                $sql = "SELECT *
FROM signup WHERE type='Student'";     

$result = mysqli_query($conn, $sql);
                ?>
                    <table>
					
							
						<tbody>
                           <?php    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
								<tr>
									<td class="column1"><?php echo $row['name']; ?></td>
									<td class="column2"><?php echo $row['email']; ?></td>
									<td class="column3"><?php echo $row['type']; ?></td>
									
                            </tr>
                             <?php } }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
