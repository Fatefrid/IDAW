<!DOCTYPE html>
<html>
<head>
    <title>Draco by @afnizarnur</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Draco is free PSD &amp; HTML template by @afnizarnur">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<style>
		.intro h1:before {
			/* Edit this with your name or anything else */
			content: 'Julien FREMAUX';
		}
	</style>
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">DRACO</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav">
				    <ul>
				        <li class="active"><a href="#about">Accueil</a></li>
				        <li><a href="#experiences">Mon CV</a></li>
				        <li><a href="#achievements">Mes projets</a></li>
				        <li><a href="#skills">Contact</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro section" id="about">
		<div class="container">
			<p>Hi, I’m Draco the Dragon</p>
			<div class="units-row units-split wrap">
				<div class="unit-20">
					<img src="img/ava.jpg" alt="Avatar">
				</div>
				<div class="unit-80">
					<h1>I live in<br><span id="typed"></span></h1>
				</div>
				<p>
					Draco is a constellation in the far northern sky. Its name is Latin for dragon. Draco is circumpolar (that is, never setting) for many observers in the northern hemisphere. It was one of the 48 constellations listed by the 2nd century astronomer Ptolemy.
				</p>
			</div>
		</div>
	</div>

	<!-- Work Experience -->
	<div class="work section second" id="experiences">
		<div class="container">
			<h1>Work<br>Experiences</h1>
			<ul class="work-list">
				<li>2014-2015</li>
				<li><a href="#">PT Traveloka Indonesia</a></li>
				<li>Web Designer</li>
			</ul>
			<ul class="work-list">
				<li>2014-2015</li>
				<li><a href="#">Wego</a></li>
				<li>UI/UX Designer</li>
			</ul>
			<ul class="work-list">
				<li>2014-2015</li>
				<li><a href="#">Garuda Indonesia</a></li>
				<li>System Designer</li>
			</ul>
		</div>
	</div>

	<!-- Award & Achievements -->
	<div class="award section second" id="achievements">
		<div class="container">
			<h1>Award &amp;<br>Achievements</h1>
			<ul class="award-list list-flat">
				<li>January 2014</li>
				<li>Attained PHP5 certification</li>
				<li>Hold world/Olympic record</li>
			</ul>
			<ul class="award-list list-flat">
				<li>December 2014</li>
				<li>Audited X number of clients in only Y amount of time</li>
				<li>Held a perfect attendance record</li>
				<li>Were promoted after only X months in the role</li>
			</ul>
			<ul class="award-list list-flat">
				<li>March 2014</li>
				<li>Placed employees at X companies</li>
				<li>United multiple teams post-merger</li>
			</ul>
		</div>
	</div>

	<!-- Technical Skills -->
	<div class="skills section second" id="skills">
		<div class="container">
			<h1>Technical<br>Skills</h1>
			<ul class="skill-list list-flat">
				<li>Web Technology</li>
				<li>HTML / CSS / SASS / PHP / Javascript</li>
			</ul>
			<ul class="skill-list list-flat">
				<li>Database</li>
				<li>MySQL / MongoDB / Oracle / Access</li>
			</ul>
			<ul class="skill-list list-flat">
				<li>Framework</li>
				<li>Laravel / CodeIgniter / Zend / Ruby On Rails</li>
			</ul>
		</div>
	</div>

	<!-- Quote -->
	<div class="quote">
		<div class="container text-centered">
			<h1>fight against the ugliness.</h1>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
			    	<p>Handcrafted by Afnizar Nur Ghifari</p>
			    </div>
			    <div class="unit-50">
					<ul class="social list-flat right">
						<li><a href="mailto:afnizarhilmi@gmail.com"><i class="fa fa-send"></i></a></li>
						<li><a href="http://twitter.com/afnizarnur"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://dribbble.com/afnizarnur"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="http://behance.com/afnizarnur"><i class="fa fa-behance"></i></a></li>
					</ul>
			    </div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/typed.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/site.js"></script>
    <script>
		function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["far northern sky", "your galaxy", "everywhere"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
</body>
</html>
