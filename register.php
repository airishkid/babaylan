<?php 

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_initial = $_POST['middle_initial'];
$username = $_POST['username'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];


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

                    <div id="content">
                        <div id="about">
                            <h2>
                                Register
                            </h2>
                            <form action="<?php 
                            
                            if ((preg_match('#[0-9]#', $last_name || $first_name || $middle_initial)) || (preg_match('[^A-Za-z]', $age))) {
                                echo '';
                            }else {
                                echo 'add_user.php';
                            }
                            
                            
                            ?>" method="post">
                            <?php 
                            
                            
                            
                            ?>    
                                
                                
                                
                                
                            Last Name: <input type="text" name="last_name">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            First Name: <input type="text" name="first_name">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Middle Initial: <input type="text" name="middle_initial"><br><br>
                            Username: &nbsp;<input type="text" name="username">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Password: &nbsp;&nbsp;&nbsp;<input type="password" name="password1"><br><br>
                            Birthdate: <input type="date" name="birthdate">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                            Age:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="age">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            Email:
                            <input type="text" name=""><br><br>
                            Address: &nbsp;&nbsp;&nbsp;<input type="text" name="email">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Contact Number: <input type="text" name="contact">
                            
                                
                                
                                
                            <br>    
                            <input type="submit" value="Submit">    
                            </form>

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
