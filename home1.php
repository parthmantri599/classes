<?php
session_start();
if (!(isset($_SESSION['user']) ))
{
  header('location: Login/studentlogin.php');

}
?>

<!DOCTYPE HTML>
<html>
	<head>
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
								<li class="btn-cta"><a href="stmyprofile.php"><span>Hello, <?php
             echo $_SESSION['name'];
             ?></span></a></li>
								<li class="btn-cta"><a href="logout.php"><span>logout  </span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/wdl0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/wdl2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/wdl5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>ENROLL NOW</h1>
				   					<p><a href="regform/index.php" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4 intro-wrap">
						<div class="intro-flex">
							<div class="one-third color-1 animate-box">
								<span class="icon"><i class="flaticon-market"></i></span>
								<div class="desc">
									<h3>Learn Courses Online</h3>
									<p><a href="#" class="view-more">View More</a></p>
								</div>
							</div>
							<div class="one-third color-2 animate-box">
								<span class="icon"><i class="flaticon-open-book"></i></span>
								<div class="desc">
									<h3>Online Library Store</h3>
									<p><a href="#" class="view-more">View More</a></p>
								</div>
							</div>
							<div class="one-third color-3 animate-box">
								<div class="desc2">
									<h3>50% off in all selected Courses</h3>
									<p><a href="#" class="view-more">View More</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="about-desc animate-box">
							<h2>Welcome to KP EDUCATION </h2>
							<p>KP EDUCATION stands synonymous to quality education and provides a learning environment that extends education beyond the confines of traditional classroom learning. We at KP EDUCATION understand that education is the most powerful weapon to help bring the desired change in our society and to contribute to the society at large.  The institute has now become the preferred choice for students, who want to build a strong foundation for their higher studies in Engineering or achieve top ranks in competitive exams or Study Abroad programs.</p>
							<div class="fancy-collapse-panel">
	                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingOne">
	                             <h4 class="panel-title">
	                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                             <div class="panel-body">
	                                 <div class="row">
									      		<div class="col-md-6">
									      			<p>Our innovative learning solutions have revolutionized the concept of comprehensive approach in IIT JEE coaching classes. Our team comprises of highly qualified members, retired IIT professors, IITians and doctorates. Our classroom model is interactive & constantly developing to suit individual needs by providing abundant mental stimulation.</p>
									      		</div>
									      		<div class="col-md-6">
									      			<p>Besides books, our faculty members remain present round-the-clock in the library for doubt-solving and individual teaching. Our student-centric approach aims at the well being of the students, enabling them to learn at their comfort and convenience. Our topic-wise tests, major tests and rigorous feedback mechanism help the students to know their level of understanding.</p>
									      		</div>
									      	</div>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingTwo">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                             <div class="panel-body">
	                                 <p>You Aspire, We Inspire.
"Our Mission is to make your Mission possible."</p>
												<ul>
													<li>We offer the highest quality learning programs by delivering on rigorous content, best in class faculty and engaging user experiences in a personalized manner.</li>
													<li>Through education, enable each individual in the world to pursue the career they desire and thereby improve their quality of life.</li>
												</ul>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingThree">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Offer Services
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                             <div class="panel-body">
                                     <ul>
                                         <li>IIT JEE PCM</li>
                                         <li>Web Development </li>
                                         <li>Mobile App Development</li>
                                     </ul>
	                             </div>
	                         </div>
	                     </div>
	                  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-books"></i>
							</span>
							<div class="desc">
								<h3>Professional Courses</h3>
								<p>Professional courses related to JEE Entrance Examination along with other interests of engineering courses like Web Designing, Mobile App Development and lots more </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-professor"></i>
							</span>
							<div class="desc">
								<h3>Experienced Instructor</h3>
								<p>The strength of KP EDUCATION, is its expert and experienced faculty, meticulously chosen to maintain the best standards in teaching. They are a treasure trove of knowledge with sound credentials and well-versed with the IIT-JEE examination pattern and requirement of students to face the challenges with confidence. </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-book"></i>
							</span>
							<div class="desc">
								<h3>Practical Training</h3>
								<p>The aim of practical training is to help students develop skills and abilities that support professional studies and prepare them for work later on. For the student the practical training provides an opportunity to learn important skills which will help in becoming a professional of the future.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-diploma"></i>
							</span>
							<div class="desc">
								<h3>Tests and examinations</h3>
								<p>A series of tests and examinations are conducted each fortnight and term for each of our courses at our KP Headbranch Centres to evaluate our students and prepare them for facing the various board and other competitive examinations. We also conduct mock examinations in a manner similar to that in which the various board examinations are conducted, in order to offer a realistic experience to our students, with an aim to help boost their confidence when facing the board examinations.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-book"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="15" data-speed="3000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Courses</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-student"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Students</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-professor"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="2300" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Professors</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="counter-entry">
									<span class="icon"><i class="flaticon-earth-globe"></i></span>
									<div class="desc">
										<span class="colorlib-counter js-counter" data-from="0" data-to="1988" data-speed="5000" data-refresh-interval="50"></span>
										<span class="colorlib-counter-label">Qualified for IIT's</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="colorlib-classes colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>extra courses provided</h2>
						<p>We also provide some extra courses listed below</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Developing Mobile Apps</a></h3>
								<p>Basics of Mobile App Development on Android Studio 4.3 </p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert PSD to HTML</a></h3>
								<p>Learn how to convert PSD file extension to html</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>Be the master in converting html files to wordpress</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-4.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Developing Mobile Apps</a></h3>
								<p>step into mobile developing world and create your own masterpiece</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-5.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Learned Smoke Effects</a></h3>
								<p>seminar on smoke effects</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/classes-6.jpg);">
								<span class="price text-center"><small>₹450</small></span>
							</div>
							<div class="desc">
								<h3><a href="#">Convert HTML to WordPress</a></h3>
								<p>start converting your html files to wordpress</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div id="colorlib-testimony" class="testimony-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>What The Students Says</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row animate-box">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Ria Agarwal-AIR 3, IIT JEE 2017</span>
												<p>JEE preparation with KP EDUCATION was so smooth I never felt nervous. Teachers were always around to solve our doubts and guide us. We worked on our weaknesses relentlessly and converted them to our strengths. The professors were very supportive and even hung out with us during breaks so that we were always motivated.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person1.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Ritesh Panigrahi-AIR 7, IIT JEE 2017</span>
												<p>KP EDUCATION was like home during JEE preparations. Discussions and doubt solving was always going on and I did not want to miss it. KPE teachers assessed everybody and suggested the topics where we should concentrate and others which they were confident we could do easily. KPE is a place to experience. I cannot thank them enough. </p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person2.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Deepak Wadhwani-AIR 12, IIT JEE 2017 </span>
												<p>Learning at KP EDUCATION was a two way communication process and helped me learn complex topics easily. We were told to do everything with applications. The teachers explained to us with the help of diagrams, presentations and illustrations helping us relate topics to the practical world. I believe this is what makes KPE so great. My teachers at KPE were always available to solve our doubts</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person3.jpg);"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-trainers">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Experienced Professor</h2>
						<p> The faculty team is devoted to backup the value-driven objective of KPE; to deliver the expedient resolution to the most challenging IIT-JEE, enhancing the success of the students and find the route that will lead to the best outcome.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/person1.jpg)"></div>
							<div class="desc">
								<h3>Natalie Rosie</h3>
								<span>Professor</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/person2.jpg)"></div>
							<div class="desc">
								<h3>Parth Mantri</h3>
								<span>Professor</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/person3.jpg)"></div>
							<div class="desc">
								<h3>Karan Nagpal</h3>
								<span>Professor</span>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 animate-box">
						<div class="trainers-entry">
							<div class="trainer-img" style="background-image: url(images/person4.jpg)"></div>
							<div class="desc">
								<h3>Brigeth Smith</h3>
								<span>Professor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-event">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Upcoming Events</h2>
					</div>
				</div>
				<div class="event-flex row-pb-sm">
					<div class="half event-img animate-box" style="background-image: url(images/wdl4.jpg);">
					</div>
					<div class="half">
						<div class="row">
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">dec</span></p>
										<p class="organizer"><span>Organized by:</span> <span>KP Education</span></p>
										<h2><a href="event.html">All India Scholarship Test 1</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Pan India</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">19</span><span class="month">jan</span></p>
										<p class="organizer"><span>Organized by:</span> <span>KP Education</span></p>
										<h2><a href="event.html">KPE All India JEE Test 1</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Headbranch, Mumbai</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 animate-box">
								<div class="event-entry">
									<div class="desc">
										<p class="meta"><span class="day">27</span><span class="month">jan</span></p>
										<p class="organizer"><span>Organized by:</span> <span>kp education</span></p>
										<h2><a href="event.html">KPE All India JEE Test 2</a></h2>
									</div>
									<div class="location">
										<span class="icon"><i class="icon-map"></i></span>
										<p>Headbranch, Mumbai</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Recent News</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/bl1.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">JEE Main 2019 To Be Held Online, Twice By National Testing Agency (NTA)</a></h2>
								<p class="admin"><span>Posted by:</span> <span>KP_blogs</span></p>
								<p> Newly formed examination authority, National Testing Agency or NTA will conduct JEE Main twice a year online from 2019 and the Ministry of Human Resource Development (MHRD) has released schedule for both the editions yesterday. According to the schedule fixed by HRD ministry, the JEE Main 2019 examinations will be held in January and April. The detailed notification is yet to be released by the organisers, but it can be expected any time.</p>
							</div>
						</article>
					</div>
					<div class="col-md-6">
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/bl1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">NTA announces allotment of JEE Main 2019 exam cities</a></h2>
								<p class="admin"><span>20 October 2018</span></p>
								<p>NTA has allotted the exam cities of JEE Main 2019 to the registered candidates. To check the exam city allotted, the candidates will have to log into the link provided on the official website using their application number and the displayed security code. </p>
							</div>
						</div>
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">How to Convert PSD File to HTML File?</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>How to Convert PSD File to HTML File?</p>
							</div>
						</div>
						<div class="f-blog animate-box">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">How to Build Games App in Mobile</a></h2>
								<p class="admin"><span>04 March 2018</span></p>
								<p>With a global market generating $100 Billion this year, it’s no wonder that many people want to get in on the game app action. But getting rich off of the App Store is only one of the many possible motivations! </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
							<li><a href="home.html"><i class="icon-location4"></i> KPEducation.com</a></li>
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

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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

