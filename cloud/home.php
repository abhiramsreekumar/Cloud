<!-- This cloud was designed and developed By Abhiram sreekumar(Random sasi).
I am just a student.  -->





<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo '<html>
	<head>
		<title>Random Sasi-CLOUD </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets1/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets1/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets1/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets1/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Random Sasi cloud</a></h1>
					<nav id="nav">
						<ul>
							
							<li>
								<a href="#upl" class="button special">File upload</a>
								
							</li>
							<li><a href="./system">My computer</a></li>
							<li><a href="./uploads">Files</a></li>
							<li><a href="./logout.php">Log out</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>The future has come!</h2>
							<p>And there are no hoverboards or flying cars.<br />
							Just this amazing home made cloud by Abhiram.</p>
						</header>
						<span class="image"><img src="images1/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images1/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>About the cloud.</h2>
										<p>This was designed and developed by Abhiram(Random Sasi)</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>This was my dream project and i have spent 120+ hours on developing and perfecting this project.
									   This is just beginners stuff.</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>This is a single user cloud system.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images1/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Cookie Based authentication system.</h2>
							<p>Cookie is used to identify whether a user is signed in or not.</p>
						</header>
						<p>This is website is designed with templates from html5up.</p>
						<ul class="actions">
							<li><a href="https://html5up.net/" class="button">Visit html5up</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images1/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>First Github Project.</h2>
							<p>Did you find a bug? </p>
						</header>
						<p>This is my first ever Github project.</p>
						<ul class="actions">
							<li><a href="https://www.youtube.com/randomsasi" class="button">Subscribe to Random sasi on youtube.</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
						 <a name ="upl"></a>
							<h2>File upload</h2>
							<p>For security reason you can upload only one file at a time. </p>
						</header>
						<form method="post" action="upload.php" enctype="multipart/form-data" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="file" name="fileToUpload" id="fileToUpload" required/></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Upload file" name="submit" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						
						<li><a href="https://www.facebook.com/randomsasi" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.youtube.com/randomsasi" class="icon alt fa-youtube"><span class="label">Youtube</span></a></li>
						
					</ul>
					<ul class="copyright">
						<li>&copy; Random Sasi -CLOUD. All rights reserved.</li><li>Design: <a href="http://www.randomsasi.esy.es">Cybermonster</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets1/js/jquery.min.js"></script>
			<script src="assets1/js/jquery.scrolly.min.js"></script>
			<script src="assets1/js/jquery.dropotron.min.js"></script>
			<script src="assets1/js/jquery.scrollex.min.js"></script>
			<script src="assets1/js/skel.min.js"></script>
			<script src="assets1/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets1/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets1/js/main.js"></script>

	</body>
</html>
';
		
	 } 
	 else
	 {
	 	echo '<script>window.location.replace("./index.php");</script>';
		
	 }
?>