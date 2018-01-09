<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Health risk monitor</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">RPM</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.html">Health Admin</a></li>
						<li><a href="index.html">Statistics</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Health Admin portal</h2>
						<p>Monitoring the risk pools</p>
					</header>
                    <section>
                        <center> <h2>
                        <?php
                        if(isset($_POST['submit'])){
                        
                            if(!empty($_POST['low'])) {
                                
                                $checked_count = count($_POST['low']);
                                echo "You have selected the following " .$checked_count. " option(s): <br/>";
                                foreach($_POST['low'] as $selected) {
                                echo "<p>".$selected;
                                echo "<br>";
                                    
                                if ($selected == "binge"){
                                    echo "Low risk";
                                }
                                if ($selected == "smoke"){
                                    echo "Low risk";
                                }
                                    if ($selected == "physical"){
                                    echo "Low risk";
                                }
                                    if ($selected == "obesity"){
                                    echo "Low risk";
                                }
                                    if ($selected == "sleep"){
                                    echo "Low risk";
                                }
                                    if ($selected == "insurance"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "checkup"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "dental"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "bp"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "chol"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "arthiritis"){
                                    echo "High risk";
                                }
                                    if ($selected == "mammo"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "pap"){
                                    echo "Medium risk";
                                }
                                    if ($selected == "colon"){
                                    echo "High risk";
                                }
                                    if ($selected == "clinic"){
                                    echo "High risk";
                                }
                                    if ($selected == "asthma"){
                                    echo "High risk";
                                }
                                    if ($selected == "cancer"){
                                    echo "High risk";
                                }
                                    if ($selected == "kidney"){
                                    echo "High risk";
                                }
                                    if ($selected == "copd"){
                                    echo "High risk";
                                }
                                    if ($selected == "heart"){
                                    echo "High risk";
                                }
                                    if ($selected == "diabetes"){
                                    echo "High risk";
                                }
                                    if ($selected == "stroke"){
                                    echo "High risk";
                                }
                                    if ($selected == "mhealth"){
                                    echo "High risk";
                                }
                                 
                                
                                }
                            }
                            
                            else {
                                echo "<b> Please select atleast one option </b>";
                            }
                            
                            
                        }
                        
                        ?>
                            </h2>
                        </center>
							
			</section>



	</body>
</html>