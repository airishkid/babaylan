<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database.php"); 


$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];





mysql_query("INSERT INTO services (name, description, price) VALUES
('$name', '$description', '$price')");
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
                        <div id="contact">
                            <h2>
                            </h2>
                            <form action="" method="post">
                                Service Name: <input type="text" name="name"><br>
                                Service Description: <input type="text" name="description"> <br>       
                                Service Price: <input type="text" name="price"><br>        
                                
                                <input type="submit" value="Add">
                                
                            </form>
                            
                            
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
