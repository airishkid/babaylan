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
								Services<br>
							</h2>  
<?php                                                    
$sql="SELECT service_id, dor, tor FROM reservations where customer_id = {$id}";
$result=mysql_query($sql);
?>
<center>
<table width="900" border="1" cellspacing="1" cellpadding="3">

<tr>
<th><strong>Service</strong></th>
<th><strong>Time of Reservation</strong></th>
<th><strong>Date of Reservation</strong></th>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><? echo $rows['service_id']; ?></td>
<td><? echo $rows['tor']; ?></td>
<td><? echo $rows['dor']; ?></td>


<?php
}
?>

</table>
</td>
</tr>
</table>
</center>
<?php
mysql_close();
?>
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
