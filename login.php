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
					<form action="" method="post">
                                    <center>
                                        
                                        
                                        
                                        Username: <input type="text" name="username"><br>
                                        Password: <input type="password" name="pass"><br>
                                                
                                                <input type="submit" value="Login">
                                        
                                        <?php 
                                        
                                        $username = $_POST['username'];
                                        $pass = $_POST['pass'];
                                        
                                        if($username == 'admin' && $pass == 'administrator'){
                                            header('Location: /profile.php');
                                        }
                                        
                                        
                                        ?>
                                        
                                    </center>
                                        </form>
                                    
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				<?php include_once 'includes/footer.php'; ?>
			</div>
		</div>
    </body>
</html>
