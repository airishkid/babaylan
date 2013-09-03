<?php
$Month = $_GET["Month"];
$Date = $_GET["Date"];
switch ($Month){
default:
$message1 = "";
$message2 = "";
case 1;
if ($Date == 1){
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "Holiday: New Years Eve";
break;
}
if ($Date == 24){
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "Holiday: Maulid un-Nabi";
break;
}
else
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "";
case 2;
if ($Date == 10){
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "Special Non-Working Holiday: Chinese New Year";
break;
}
if ($Date == 25){
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "Holiday: People Power Anniversary";
break;
}
else
$message1 = "Month is " . $Month ." and the Day is " . $Date . "\n";
$message2 = "";
}
?>

<HTML>
<BODY>
<CENTER>
<TABLE BORDER = 4>
<FORM ACTION="" METHOD="GET">
<select id="Month" name="Month">                      
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select id="Date" name="Date">                      
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select><br>
<?php echo $message1; ?><br>
<?php echo $message2; ?><br>
<input type =submit value="Submit"><br>
<A HREF = "home.php">BACK</A>
</FORM>
</BODY>
</HTML>