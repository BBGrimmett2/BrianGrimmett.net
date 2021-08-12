<!DOCTYPE HTML>
<html>
	<head>
		<title>Brian Grimmett</title>
		
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link rel="icon" href ="images/logo.jpg">
		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Brian Grimmett</a></h1>
					
					<nav>
						<a href="#menu">Menu</a>
					
					</nav>
				</header>
			<!-- Menu -->
				<nav id="menu">
					<div class="inner">
						<h2>Menu</h2>
						
						<ul class="links">
							<li><a href="index.php">Home</a></li>
						
							<li><a href="#about">About Me</a></li>
						
							<li><a href="#portfolio">Portfolio</a></li>
						
							<li><a href="#footer">Contact</a></li>
						
							<li><a href="pages/resume.html">Resume</a></li>
						
						</ul>
						
						<a href="#" class="close">Close</a>
					</div>
				</nav>

			<!-- Title Banner -->
				<section id="banner">
					<div class="inner">
						<div class="logo">
							<a href = "index.php"><img class = "icon" src ="images/logo.jpg"></a>		
						</div>
						
						<p>Hi, my name is</p>

						<h2>Brian Grimmett</h2>

						<p>
							I am a student at Roanoke College studying physics, mathematics, and computer science. After
							graduation in May of 2022, I am interested in working in computer and software engineering. 
						</p>
					</div>
				</section>

			<!-- About me -->			
				<section id="about" class="wrapper spotlight style2">
					<div class="inner">
						<div class="content">
							<h2 class="major">About Me</h2>
								<p>
									<span class="image left"><img src="images/pic-of-me.jpg"/></span>
									As a student at Roanoke College, I have studied physics, mathematics, and computer 
									science where I have taken an interest in computer and software engineering specifically 
									in the field of robotics. I am a member of the men’s swim team, and I work in the physics 
									department as a lab assistant as well as the center for learning and teaching where I am a 
									physics, math, and engineering science tutor.
								</p>
							
								<h3>Technology I am Interested In:</h3>
								<ul class = "interest" style="list-style-type:none;">
									<li>C++</li>
									<li>Python</li>
									<li>Java</li>
									<li>Fusion 360</li>
									<li>Mathematica</li>
									<li>MATLAB</li>
									<li>LabView</li>
									<li>Arduino</li>
								</ul>
								<p>
						</div>
					</div>
				</section>

			<!-- Portfolio Gallery -->
				<section id="portfolio">
					<section id="four" class="wrapper alt style1">
						<div class="inner">
							<h2></h2>
							<h2 class="major">My Work</h2>
							
							<section class="features">
							
								<article>
									<a href="pages/hp-photos.html" class="image"><img src="images/hp-photos-article.jpg"/></a>
									<h3 class="major">Photography Website</h3>
								
									<p>
									A webpage to have a centralized place for a starting photography business. 
									The webpage contains a summary of the owner, pricing, photoshoot gallery, 
									and how to contact.
									</p>
								
									<a href="pages/hp-photos.html" class="special">Learn more</a>
								</article>

								<article>
									<a href="pages/my-string.html" class="image"><img src="images/string.jpg"/></a> <!-- href="cpp-string.html" -->
								
									<h3 class="major">C++ String Class</h3>
								
									<p>
										A modification on the C++ string class to include better functionality and 
										useful member functions.
									</p>
								
									<a href="pages/my-string.html" class="special">Learn more</a> <!-- href="cpp-string.html" -->
								</article>

								<article>
									<a class="image"><img src="images/pic05.jpg"/></a> <!-- href="powerpaddle.html" -->
								
									<h3 class="major">PowerPaddle | Coming Soon...</h3>
								
									<p>
										A device to measure power output in swimming and display the data for training uses.
									</p>
								
									<a class="special">Learn more</a> <!-- href="powerpaddle.html" -->
								</article>

							</section>
							<!--
							<ul class="actions">
								<li><a href="#portfolio" class="button">Browse All</a></li>
							</ul>
							-->
						</div>
					</section>
				</section>

			<!-- Footer -->
				<!-- PHP (Contact Form)-->
					<?php
						$message_sent = false;
						
						if(isset($_POST['email']) && $_POST['email'] != '') {
							
							if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {						
								$userName = $_POST['name'];
						
								$userEmail = $_POST['email'];
						
								$messageSubject = "Website Contact Request - ".$userEmail;
						
								$message = $_POST['message'];
						
								$to = "me@briangrimmett.net";
						
								$body = "";
						
								$body .= "From: ".$userName. "\r\n";
						
								$body .= "Email: ".$userEmail. "\r\n";
						
								$body .= "Message:\n".$message. "\r\n\n";
						
								mail($to, $messageSubject, $body);
						
								$message_sent = true;
							}
						}
					?>
				

				<section id="footer">
					<div class="inner">
						<h2 class="major">Get in touch</h2>
					
						<p>
							I am currently looking for new opportunities for after graduation and new connections. 
							Whether you have a question or want to connect, I will do my best to get back to you in a 
							timely fassion.
						</p>
					
						<form method="post" action="#footer">
							<!-- If message is sent then a confirmation message will be displayed -->
                            <?php
                                if($message_sent):
                            ?>
                                <div class="content container padding-64" id="contact">
                                    <h3 class="center">Thanks for contacting me!</h3>
                                    
                                    <p class="center"><em>I will get back with you as soon as possible!</em></p>
                                </div>
                            
                            <?php
                                else:
                            ?>
							
							<div class="fields">
								<div class="field">
									<label for="name">Name</label>
								
									<input type="text" name="name" id="name" />
								</div>
								
								<div class="field">
									<label for="email">Email</label>
								
									<input type="email" name="email" id="email" />
								</div>
								
								<div class="field">
									<label for="message">Message</label>
								
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
							</div>
							
							<button type="submit">Send Message</button>
							<button type="reset">Reset</button>
						
							<?php
                               endif;   
                            ?>

						</form>
											
						<ul class="copyright">							
								<li><a class = "icon solid fa-envelope" href = "mailto:me@briangrimmett.net">  Email</a></li>
								
								<li><a target = "_blank" class="icon brands fa-github" href="https://github.com/BBGrimmett2">  Github</a></li>
								
								<li><a target = "_blank" class="icon brands fa-linkedin" href="https://www.linkedin.com/in/brian-grimmett-7b42b11ab/">  LinkedIn</a></li>
								
								<li><a target = "_blank" class="icon brands fa-instagram" href="https://www.instagram.com/brian.grimmett/">  Instagram</a></li>
								
								<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								
								<li><a target="_blank" href="https://github.com/BBGrimmett2/BBG-Portfolio">Adapted by Brian Grimmett 2021</a></li>
							</ul>
					</div>
				</section>
			</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		
		<script src="assets/js/jquery.scrollex.min.js"></script>
		
		<script src="assets/js/browser.min.js"></script>
		
		<script src="assets/js/breakpoints.min.js"></script>
		
		<script src="assets/js/util.js"></script>
		
		<script src="assets/js/main.js"></script>
	</body>
</html>