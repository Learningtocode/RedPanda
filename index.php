<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PlainSong: Artists</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css"> 
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"> 

        <link type="text/css" rel="stylesheet" href="css/styling.css">   
    </head>
    <body>
        
        <!-- NAVIGATION BAR -->
<h1 class="plaintext">PlainSong</h1>
<div class="stuck-head">
            <a class="nav-btn" id="nav-open" href="#sidebar" menu><span>menu</span></a>
        </div>
            <!--off canvas nav-->
            <div id="menu">
                <nav class="navigation">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">New User</a></li>
                        <li><a href="<?php echo $path . "controller/logout-user.php"; ?>">Logout</a></li>
                    </ul>
                </nav>
            </div>
            
        <!-- END OF NAVIGATION BAR -->
          
       <div id="columns">
           
           <figure>
               <img name="Adele" src="images/Adele Profile.jpg"  id="Adele" alt=""  />
               <figcaption>
                   <p>Adele - Chasing Pavement</p>
                   <audio controls>
                   <source src="music/Pavements.mp3" >
               </figcaption>
           </figure>

           <figure>
               <img name="Kendrick" src="images/Kendrick Profile.jpg"  id="Kendrick" alt=""  />
               <figcaption>
                   <p>Kendrick Lamar - Money Trees</p>
                    <audio controls>
                        <source src="music/Money Trees.mp3" >
               </figcaption>
           </figure>
              

           <figure>
               <img name="Chance" src="images/Chance Profile.jpg"  id="Chance" alt=""  />
               <figcaption>
                   <p>Chance The Rapper - Prom Night</p>
                    <audio controls>
                     <source src="music/Prom Night.mp3" >
               </figcaption>
           </figure>
           
           <figure>
               <img name="Lana" src="images/Lana Profile.jpg"  id="Lana" alt=""  />
               <figcaption>
                   <p>Lana Del Rey - Lolita</p>
                   <audio controls>
                       <source src="music/Lolita.mp3" >
               </figcaption>
           </figure>

           <figure>
               <img name="Cole" src="images/Cole Profile.jpg" id="Cole" alt=""  />
               <figcaption>
                   <p>J Cole - She Knows</p>
                   <audio controls>
                   <source src="music/She Knows.mp3" >
               </figcaption>
           </figure>

           <figure>
               <img name="21" src="images/21 Pilots Profile.jpg" id="21" alt=""  />
               <figcaption>
                   <p>21 Pilots - Tear In My Heart</p>
                   <audio controls>
                   <source src="music/Tear In My Heart.mp3" >
               </figcaption>
           </figure> 
           
           <figure>
               <img name="Dumb" src="images/Dumbfounded Profile.jpg" id="Dumb" alt=""  />
               <figcaption>
                   <p>Dumbfoundead - 24KTOWN</p>
                   <audio controls>
                       <source src="music/24KTOWN .mp3" >
               </figcaption>
           </figure>

           <figure>
               <img name="Aiko" src="images/Jhene Aiko Profile.jpg" id="Aiko" alt=""  />
               <figcaption>
                   <p>Jhene Aiko - Spotless Mind</p>
                   <audio controls>
                   <source src="music/Spotless Mind.mp3" >
               </figcaption>
           </figure>
           
           <figure>
               <img name="Amy" src="images/Winehouse Profile.jpg" id="Amy" alt=""  />
               <figcaption>
                   <p>Amy Winehouse - Tears Dry On Their Own</p>
                   <audio controls>
                   <source src="music/Tears Dry On Their Own.mp3" >
               </figcaption>
           </figure>
           
           <figure>
               <img name="Bring" src="images/Bring H Profile.jpg" id="Bring" alt=""  />
               <figcaption>
                   <p>Bring Me The Horizon - Can You Feel My Heart</p>
                   <audio controls>
                       <source src="music/Can You Feel My Heart.mp3" >
               </figcaption>
           </figure>
           
           <figure>
               <img name="Coldplay" src="images/Coldplay Profile.gif" id="Coldplay" alt=""  />
               <figcaption>
                   <p>Coldplay - Clocks</p>
                   <audio controls>
                       <source src="music/Clocks.mp3" >
               </figcaption>
           </figure>
           
           <figure>
               <img name="Queen" src="images/Queen Profile.jpg" id="Queen" alt=""  />
               <figcaption>
                   <p>Queen - Don't Stop Me Now</p>
                   <audio controls>
                       <source src="music/Don't Stop Me Now.mp3" >
               </figcaption>
       </div>
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script
           <script src="customs.js"</script>
    </body>
</html>
