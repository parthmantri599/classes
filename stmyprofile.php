<?php
session_start();
if (!(isset($_SESSION['user']) ))
{
  header('location: http://localhost/classes/Login/studentlogin.php');

}
?>

<!DOCTYPE HTML>
<html>
	<head>

        <style>
        .profile{
            width: 30%;
            height: 500px;
            background:grey;
            margin-left:5%;
            margin-bottom: 10%;
            float: left;
        }
        .img_prof{
            margin-left: 30%;
            margin-top: 5%;
            border-radius: 100%;
        }
    
        p{
            color: white;
            font-size: 25px;
            position: relative;
            left: 30px;
            top: 50px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 40%;
            position: relative;
            left: 15%;
                }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;

        }
        h2{
text-align: center
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        #colorlib-footer{
            margin-top: 35%;
        }
        </style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KP EDUCATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p>Welcome to KP EDUCATION</p>
						</div>
						<div class="col-xs-6 col-md-push-2 text-right">
							<p>
								<ul class="colorlib-social-icons">
									<li><a href="http://www.twitter.com"><i class="icon-twitter"></i></a></li>
									<li><a href="http://www.facebook.com"><i class="icon-facebook"></i></a></li>
									<li><a href="http://www.linkedin.com"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
							<p class="btn-apply">Apply Now !</p>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="home.html">KPE.com</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="home.html">Home</a></li>
								<li class="has-dropdown">
									<a href="courses.html">Courses</a>
									<ul class="dropdown">
										<li><a href="maths.html">maths</a></li>
										<li><a href="#">physics</a></li>
										<li><a href="#">chemistry</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">java</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="event.html">Events</a></li>
								<li><a href="news.html">News</a></li>
								<li><a href="contact.html">Contact</a></li>
                                
								<li class="btn-cta"><a><span>Hello,<?php
             echo $_SESSION['name'];
             ?></span></a></li>
								<li class="btn-cta"><a href="http://localhost/classes/logout.php"><span>logout  </span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
        
       
        <div class="profile">
            <img src="images/person2.jpg" alt="profile" height="150" class="img_prof">
            <p style="font:40px">Student Name: <?php echo $_SESSION['name']?></p> 
            <p>Id: KP123</p>      
        </div>
        
        
        
        
        
        <div>
            <h2>My Attendence</h2>
        </div>
        <table>
                <tr>
                  <th style="text-align:center">Name</th>
                  <th style="text-align:center">Attendance</th>
                </tr>
                <tr>
                  <td><?php echo $_SESSION['name']; ?></td>
                  <td>80%</td>
                </tr>
               <tr>
                 
                
              </table>
        <?php include 'db.php';
                $sql = "SELECT *
FROM test
INNER JOIN course ON test.email = course.email";     

$result = mysqli_query($conn, $sql);

?>

              <div>
                    <h2 style="margin-top:5%;">My Test Marks</h2>
                </div>
                <table>
                        <tr>
                          <th style="text-align:center">Test</th>
                          <th style="text-align:center">Name</th>
                          <th style="text-align:center">Subject</th>
                          <th style="text-align:center">Marks</th>
                          <th style="text-align:center">Status</th>

                        </tr>
                    
                <?php    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row['email']==$_SESSION['user']){?>
                        <tr>
                          <td><?php echo $row['testname']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['subject']; ?></td>
                          <td><?php echo $row['testmarks']; ?></td>
                          <td><?php echo $row['teststatus']; ?></td>
                             <?php }} }?>
                      </table>

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About KPE</h4>
						<p>KPE is a recognised institute for IIT JEE preparation and for learning and enhancing various coding aspects on Web Designing, App development and lot more.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="http://www.twitter.com"><i class="icon-twitter"></i></a></li>
								<li><a href="http://www.facebook.com"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.linkedin.com"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="about.html"><i class="icon-check"></i> About Us</a></li>
								<li><a href="courses.html"><i class="icon-check"></i> Courses</a></li>
								<li><a href="event.html"><i class="icon-check"></i> Event</a></li>
								<li><a href="news.html"><i class="icon-check"></i> News</a></li>
								<li><a href="contact.html"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Post</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Seminar on Modern Physics</a></h2>
								<p class="admin"><span>25 September 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Bootstrap Frameworks</a></h2>
								<p class="admin"><span>15 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>29 April 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>B-29, KP Education HUB, Jasmine Street, <br> Fort, Mumbai IND 400016</li>
							<li><a href="tel://9898989856"><i class="icon-phone"></i>+91 9898 989 856</a></li>
							<li><a href="mailto:info@KPEducation.com"><i class="icon-envelope"></i> info@KPEducation.com</a></li>
							<li><a href="http://localhost/classes/home.html"><i class="icon-location4"></i> KPEducation.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
							&copy;Copyrights Reserved.&copy; KP Education 2014.								
                            </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
