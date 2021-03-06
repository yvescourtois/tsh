<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Texas Secular Humanists</title>
	<link href="images/tsh.png" rel="shortucut icon" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href="font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">

</head>

<body>

	<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<img src="images/tsh.png">
			</div>

			<div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li data-slide="1">Home</li>
					<li data-slide="2">About</li>
					<li data-slide="3">Work</li>
					<li data-slide="4">Contact</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>Texas Secular Humanists</h1>
				<h2>At the University of Texas at Austin</h2>
				<p>As UT Austin's first non-prophet non-profit, we promote the values of secular humanism on campus and in the greater community.</p>
				
			</div>

		</div>
	</div>

	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>We're a community!</h1>
				<h2>Come be a part of it.</h2>
			</div>

		</div>
	</div>

	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>What We Do</h1>
	
			<div class="grid_6">
				<h2>Mission</h2>
				<p>To engage UT's secular students in community service and to promote the values of humanism.</p>
				<h2>Volunteer</h2>
				<p>We do our best to give back to the community through various volunteering events around Austin.</p>
				<p>
					Some of the events are:<br>
					- 26th st. Cleanup<br>
					- Holiday Toy Drives<br>
					- Different rallies and events on campus<br>
				</p>
			</div>
			<div  class="grid_5">
				<h2>Description</h2>
				<p>Texas Secular Humanists is a registered student organization at the University of Texas. We are an affiliate of the national organization, Secular Student Alliance. We serve several purposes. We are a community for secular students on campus, many of whom may have a difficult time "coming out" as secularists or atheists. We also work to educate the UT Austin community about secular topics, such as nontheistic ethics and what it means to be a humanist. Finally, we cooperate with other organizations, some religious, to help our fellow humans.</p>
			</div>
			</div>
		</div>
	</div>

	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div class="grid_6">
				<h1>Contact</h1>

				<div id="contact-area">
					
					<form method="post" action="">
						<input type="hidden" name="action" value="submit">
						<input type="text" placeholder="Name" name="name" id="Name" />
				
						<input type="text" placeholder="Email" name="email" id="Email" />
						
						<textarea name="message" placeholder="message" rows="20" cols="20" id="Message"></textarea>

						<input type="submit" name="submit" value="Submit" class="submit-button" />
					</form>

					<?php 
          	$action=$_REQUEST['action'];
          	if($action != "") {
          		$name=$_REQUEST['name']; 
	            $email=$_REQUEST['email']; 
	            $message=$_REQUEST['message'];

	            if ($name!="" && $email!="" || $message!="") {
	              $subject="TSH Website Contact";
	              $from="From: $name<$email>\r\nReturn-path: $email";
	              mail("courtois1337@gmail.com", $subject, $message, $from); 
	            }
          	}
					?>

				</div>
			</div>

			<div  class="grid_5">
				<h1>Meetings</h1>
				<h2>Tuesdays, 7:00 PM</br>
				PAR 301</h2>
				<p>Newcomers are always welcome!
					In case you don't know where PAR is: <a href="http://www.utexas.edu/maps/main/buildings/par.html">check here.</a>
				</p>
				
			</div>
		</div>
	</div>
	<footer>
		<div class="container clearfix">

			<div  class="grid_6">
			
				<i class="fa fa-quote-left fa-2x pull-left fa-border"></i>
				<p>The grand victories of the future must be won by man, and by man alone.</p> - Robert Ingersoll

			</div>
			<div  class="grid_4">
<!-- 				<p>Join our mailing list.</p>
				<i class="fa fa-envelope fa-2x pull-left "></i>
				<form method="post" action="contactengine.php">
	
					<input type="text" value="Email" name="Email" id="Email" />

					<input type="submit" name="submit" value="Submit" class="submit-button" />
				</form> -->

			</div>
			<div class="grid_1">
				<a href="http://on.fb.me/1cOS3lT"><i class="fa fa-facebook-square fa-2x pull-right "></i></a>
				<!-- <a href=""><i class="fa fa-twitter-square fa-2x pull-right "></i></a> -->

			</div>
			<div style="clear:both;text-align:right">
				Created by: <a href="http://yvescourtois.com/" style="color:#888;">Yves Courtois</a>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>