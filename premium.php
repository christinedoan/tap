<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome, Client Agent</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!-- SMOOTH SCROLL -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(function() {
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
					scrollTop: target.offset().top
					}, 1000);
					return false;
				}
				}
			});
			});
			</script>
        <!-- End of SMOOTH SCROLL -->
    </head>

    <?php

			
					// ----- Create Read and Delete test -----
					// Requirement : A table named "test" already created in MySQL
					// Create connection
					print("Testing.....<BR><BR>");
                    $servername = "localhost";
                    $username = "root";
                    $password = "cft108";
                    $dbname = "test";
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname); 

			
		?>
	<body>
		

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">AIG</a></h1>
				
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>						
						<li><a href= "clientagent.html">Client Agent</a></li>
						<li><a href="underwriter.html">Underwriter</a></li>
						<li><a href="actuary.html">Actuary</a></li>
					</ul>
				</nav>
				<h6>            Welcome, Client Agent</h6>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Calculate a Premium</h2>
						<p>Get an instant quote</p>
					</header>
					
					<section>
							<h3>Form</h3>
							<form method="get" action="premium.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="age" id="age" value="" placeholder="Age" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="state" id="state">
											<option value="state">-Select State of Residence-</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
   										</fieldset>
										</div>
									<h5>  </h5>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="gender" id="gender">
												<option value="">- Select a Gender -</option>
												<option value="1">Female</option>
												<option value="1">Male</option>
											</select>
										</div>
									</div>
									<h1>  </h1>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Calculate" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>

											<!--PUT THE PHP CODE HERE!!!!! -->
										</ul>
									</div>
								</div>
							</form>
						</section>
				</div>
			</section>

	</body>
</html>