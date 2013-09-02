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
                            
                            
                            <?php  
                            $date = $_POST['date']; 
                            $time = $_POST['time'];
                            ?>
                            <form action="" method="post">
                            Last Name:<input type="text" name="last_name">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            First Name:<input type="text" name="first_name"><br>
                            Email:<input type="text" name="email"><br>
                            Address: <input type="text" name="address"><br>
                            Service:        
                                <select name="service">
                                    <option></option>
                                    <option>Foot Spa</option>
                                    <option>Manicure & Pedicure</option>
                                    <option></option>
                                </select><br>
                            Date and Time: <input type="date" name="date">&nbsp;&nbsp;<input type="time" name="time"><br>
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
