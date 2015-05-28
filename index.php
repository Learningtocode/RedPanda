<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PlainSong</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css"> 
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
        <link type="text/css" rel="stylesheet" href="css/styling.css">   
    </head>
    <header>
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">New User</a></li>
        <li><a href="<?php echo $path . "controller/logout-user.php"; ?>">Logout</a></li>               
        <li><a href="">Search</a></li>
    </ul>
    </header>
    <body onload="setupBlocks();">
       <div class="block">
           <img src="images/Adele Profile.jpg"> 
           <figcaption>Adele</figcaption>
       </div>
    </body>
</html>
