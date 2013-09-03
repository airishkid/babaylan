					<html>
<body>
<h2>Reservation List</h2>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="reservation"; // Database name 
$tbl_name="list"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>Reservation Data </strong> </td>
</tr>

<tr>
<td align="center"><strong>Full Name</strong></td>
<td align="center"><strong>School/Company Name</strong></td>
<td align="center"><strong>Contact Number</strong></td>
<td align="center"><strong>Email Address</strong></td>
<td align="center"><strong>Purpose</strong></td>
<td align="center"><strong>Date</strong></td>
<td align="center"><strong>Destination</strong></td>
<td align="center"><strong>Bus Needed</strong></td>
<td align="center"><strong>Extra Hours</strong></td>
<td align="center"><strong>Extra Day</strong></td>
<td align="center"><strong>Update</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><? echo $rows['Fname']; ?></td>
<td><? echo $rows['Cname']; ?></td>
<td><? echo $rows['Cnum']; ?></td>
<td><? echo $rows['Eadd']; ?></td>
<td><? echo $rows['Purpose']; ?></td>
<td><? echo $rows['Dor']; ?></td>
<td><? echo $rows['Pneed']; ?></td>
<td><? echo $rows['Bneed']; ?></td>
<td><? echo $rows['Ehour']; ?></td>
<td><? echo $rows['Eday']; ?></td>

<td align="center"><a href="update.php?id=<? echo $rows['id']; ?>">update</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>