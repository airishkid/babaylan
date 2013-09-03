<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database.php"); 

session_start();

if($_SESSION['name'] != NULL){
    header("location: index.php");
}


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
					<form action="login.php" method="post">
                                    <center>
                                        <?php
                                        
                                        
                                        
                                        ?>
                                        
                                        
                                        Username: <input type="text" name="username"><br>
                                        Password: <input type="password" name="password"><br>
                                                
                                                <input type="submit" value="Login">
                                        
                                                   <?php
                                                   $username = $_POST['username'];
                                                   $password = $_POST['password'];
                                                   
                                                   $select_customers = "SELECT id, username, password from customers where username = '$username' AND password = md5('$password')";
                                                   $count_customers = "SELECT count(*) from customers where username = '$username' AND password = md5('$password')";
                                                   
                                                   $result_query_customers = mysql_query($select_customers);
                                                   $result_count_customers = mysql_query($count_customers);
                                                   
                                                   
                                                   $result_query = mysql_fetch_array($result_query_customers);
                                                   $result_count = mysql_fetch_array($result_count_customers);
                                                   
                                                   
                                                   if($result_count[0] == 1){
                                                       $_SESSION['name'] = $username;
                                                       $_SESSION['id'] = $result_query['id'];
                                                       echo "<script>document.location.href='index.php'</script>";
                                                   }else{
                                                       
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
