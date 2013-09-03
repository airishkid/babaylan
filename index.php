<?php

session_start();

$_SESSION['name'];
$id = $_SESSION['id'];

?>






<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Babaylan</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
		<div id="bg">
			<div id="outer">
                            <div id="banner">
					<img src="images/babaylan_logo.png" width="932" height="172" alt="" />
				</div>
				<div id="header">
					
					
					<div id="nav">
						<?php include_once 'includes/nav.php'; ?>
						<br class="clear" />
					</div>
				</div>
				
				<div id="main">
					<div id="sidebar">
						<h3>
							Featured Services
						</h3>
						<ul class="linkedList">
							
							<li>
								<a href="hilot_at_bentosa.html">Hilot at Bentosa</a>
							</li>
							<li>
								<a href="hilot_at_bato.html">Hilot at Bato</a>
							</li>
							<li>
								<a href="nailart.html">Nail Art</a>
							</li>
							<li class="last">
								<a href="footspa.html">Foot Spa</a>
							</li>
						</ul>
						
					</div>
					<div id="content">
						<div id="box1">
							<h2>
								Welcome to Babaylan Spa
							</h2><img class="left" src="images/banner.png" width="184" height="184" alt="" />
							<p>
								Babaylan Spa and restaurant Corp. thought of having a business that promotes Filipino products and services with each and every Filipino will soon be proud of what the Philippines has to offer to the global market.
                                                                <a href="about.php">Read More...</a>
							</p>
						</div>
						
						<br class="clear" />
					</div>
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				<?php include_once 'includes/footer.php'; ?>
			</div>
		</div>
    </body>
</html>
