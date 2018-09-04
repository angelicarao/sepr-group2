<?php 

include('php/Connection.php');

include('php/session.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>July Morning Event</title>
        <link rel="icon" type="image/logotitle.png" href="images/logotitle.png" sizes="32x32">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style-mobile">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />       
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
        <link rel='stylesheet' type='text/css' href="css/style4.css"/>
        
    </head>
    <body>
        <h1><img height="30" width = "35" src = "images/logo5.png">
            July Morning <span>event</span>
        </h1>
        <div class="login">
        <aside id="hide">
        <div class="orbe">
            <h5>Log in:</h5>
            </div>
            <form  method = "post" id="login">
            <label>Email:</label> <input type="email" name="email" size="10" maxlength = "40" ><br>
            <label>ID:</label> <input type="text" name="id" size="10" maxlength = "16"><br>
            <input type = "submit" value = "Sign in" class="btnwe4iek"/>
        
            </form>
        
        </aside>
        <div class="pe4en">
            <div id="hided">
            
            <a href="php/logout.php" type ="submit" class="btnwe4iek">Logout</a>
            </div>
        </div>
            </div>
        <div class="container">


            <div class="content">
                <ul class="bmenu">
                    <li><a href="Profile.php" id="nameLogged"> </a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Location.php">Location</a></li>
                    <li><a href="BuyTicket.php">Buy Ticket</a></li>
                </ul>
            </div>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
           <?php 
            if (!empty($_SESSION[ "Log" ])) 
            {
                if($_SESSION[ "Log" ]== true)
                {
                     echo "<script>
    document.getElementById('nameLogged').innerHTML='hello,".$_SESSION["Visitor"]."';
    $('#hide').hide();
    $('#hided').show();
                </script>";
                     
                }
            }
                else {
echo "<script>   
    $('#hided').hide();
    $('#hide').show();
    </script>";
                         
                     }
            
                
                ?>
<?php
   include 'includes/footer.php';
require('php/login.php');
            ?>
