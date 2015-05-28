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
        <script type="text/javascript" src="jquery-1.7.1.js"></script>
        <script type="text/javascript">
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
    </ul>
    </header>
    <body>
       <div id="columns">
           
        <figure>
            <img name="Adele" src="images/Adele Profile.jpg"  id="Adele" alt=""  />
            <div id="trackA"></div>
	<figcaption>Adele - Chasing Pavement</figcaption>
	</figure>
           
	<figure>
            <img name="Kendrick" src="images/Kendrick Profile.jpg"  id="Kendrick" alt=""  />
            <div id="trackK"></div>
	<figcaption>Kendrick Lamar - Money Trees</figcaption>
	</figure>
         
        <figure>
            <img name="Lana" src="images/Lana Profile.jpg"  id="Lana" alt=""  />
            <div id="trackL"></div>
	<figcaption>Lana Del Rey - Blue Jeans</figcaption>
	</figure>
  
	<figure>
            <img name="Cole" src="images/Cole Profile.jpg" id="Cole" alt=""  />
            <div id="trackJC"></div>
	<figcaption>J Cole - She Knows</figcaption>
	</figure>
	
   <figure>
	<img name="" src="images/" id="" alt=""  />
	<figcaption></figcaption>
	</figure>
	
   <figure>
	 <img name="" src="images/" id="" alt=""  />
	<figcaption></figcaption>
	</figure>
  	
       </div>
    </body>
</html>
