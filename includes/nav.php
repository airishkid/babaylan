<?php

session_start();
$_SESSION['name'];


$id = $_SESSION['id'];



?>

<ul>
    <li>
        <a href="index.php">Home</a>
    </li>
    <li>
        <a href="services.php">Services</a>
    </li>
    <li>
        <a href="support.php">Support</a>
    </li>
    <li>
        <a href="about.php">About</a>
    </li>
    <li class="last">
        <a href="contact.php">Contact</a>
    </li>
    
    <li>&nbsp;</li>
    <li>&nbsp;</li>
    <li>&nbsp;</li>
    <li><?php echo $_SESSION['name']; ?></li>
    <li><?php
    
    if($id != NULL){
        echo '<a href="logout.php">Logout</a>';
    }else if($id == NULL){
        echo '<a href="login.php">Login</a><a href="register.php"> &nbsp; Register!</a>';
    }
    
    
    ?></li>
</ul>