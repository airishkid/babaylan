<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database.php"); 

session_start();

if($_SESSION['name'] != NULL){
    header("location: index.php");
}

$id = $_SESSION['id'];


$service = $_POST['service'];
$dor = $_POST['dor'];
$tor = $_POST['tor'];

mysql_query("INSERT INTO reservations (service_id, dor, tor, customer_id, status) VALUES
('$service', '$dor', '$tor', '$id', NULL)");
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
                        <?php include_once 'includes/nav.php'; ?>
                        <br class="clear" />
                    </div>
                </div>

                <div id="main">

                    <div id="content">
                        <div id="about">
                            <center><h2>
                                    Registration Complete!
                                </h2>
                                <form action="reserve.php" method="post">

                                    <input type="submit" value="Back">

                                </form>
                            </center>                            
                            
                            <br>
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
