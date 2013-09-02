<?php
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_initial = $_POST['middle_initial'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password1 = $_POST['password1'];


$user = "root";
$password = "0pera=ingsystem";
$database = "babaylan";
mysql_connect(localhost, $user, $password);
@mysql_select_db($database) or die("Unable to select database");


$query = "INSERT INTO customers (id, last_name, first_name, middle_initial, birthdate, age, email, contact, username, password) VALUES
('' ,'$last_name', '$first_name', '$middle_initial', '$birthdate', '$age', '$email', '$contact', '$username', md5('$password1'))";





mysql_query($query);
mysql_close();
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
                        <?php include_once 'nav.php'; ?>
                        <br class="clear" />
                    </div>
                </div>

                <div id="main">

                    <div id="content">
                        <div id="about">
                            <center><h2>
                                    Registration Complete!
                                </h2>
                                <form action="index.php" method="post">

                                    <input type="submit" value="Back">

                                </form>
                            </center>
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
