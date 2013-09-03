<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database.php"); 


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

                    <div id="content">
                        <div id="about">
                            <h2>
                                Reservation <br>
                                Note: Only one service per reservation.
                            </h2>
                            

                            
                            <form action="add_reserve.php" method="post">
                            Service:
                            <select name = 'service'>
                                <?php                                                    
                                $sql="SELECT id, name FROM services";
                                $result=mysql_query($sql);
                                while($rows=mysql_fetch_array($result)){

                                  ?>    
                                <option value="<?php  echo $rows['id'];?>">                            
                                <?php  echo $rows['name'];
                                }
                                ?></option> 
                                                          
                                </select><br>
                            Date and Time: <input type="date" name="dor">&nbsp;&nbsp;<input type="time" name="tor"><br>
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
