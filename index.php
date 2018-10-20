<?php

include('php/Connection.php');

include('php/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>July Morning Event</title>
    <link rel="icon" type="image/logotitle.png" href="images/logotitle.png" sizes="32x32">
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style-mobile">
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/style7.css"/>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' type='text/css' href="css/style4.css"/>

</head>
<body>
<h1><img height="30" width="35" src="images/logo5.png">
    July Morning <span>event</span>
</h1>
<div class="login">
    <div class="pe4en">
        <div id="hided">
            <a href="php/logout.php" type="submit" class="btnwe4iek">Logout</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="content">
        <ul class="bmenu">
            <li id="camping"><a href="Profile.php" id="nameLogged">Book camping spot</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Location.php">Location</a></li>
            <li id="signed"><a href="SignUpForm.php">Sign up</a></li>
            <li id="ticket"><a href="BuyTicket.php">Buy Ticket</a></li>
        </ul>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <?php
    if (!empty($_SESSION["Log"]) && $_SESSION["Log"] == true) {
        echo "<script>
                $('#hide').hide();
                $('#hided').show();
                // Hide sign in from menu if used is logged in
                document.getElementById('signed').style.display = 'none';
                    </script>";
        $userId = $_SESSION["userId"];
        $sql = "SELECT Email FROM visitor WHERE UserId ='$userId'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            echo "<script> $('#ticket').show(); $('#camping').hide(); </script>";
        } else {
            echo "<script> $('#ticket').hide(); $('#camping').show(); </script>";
        }
    } else {
        echo "<script>   
    $('#hided').hide();
    $('#hide').show();
    document.getElementById('signed').style.display = 'normal';
     $('#ticket').hide(); $('#camping').hide();
    </script>";
    }

    ?>
    <?php
    include 'includes/footer.php';
    require('php/login.php');
    ?>
