<?php
include('php/Connection.php');
include ('includes/header.php');
include('php/session.php');

?>

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<link rel="icon" type="image/logotitle.png" href="images/logotitle.png" sizes="32x32">
<meta name="keywords" content="July,Morning" />
<link rel="stylesheet" type="text/css" href="css/demoG.css" />
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/demoG.css"/>
<link rel="stylesheet" type="text/css" href="css/style4.css"/>
<link rel="stylesheet" type="text/css" href="css/BuyTicket.css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<div id="register">
    <h1 id="title">Buy Ticket</h1>
    
    <div class="box4e2">
        <form  method="POST" name="register-form" >
            <br>
            <label>First name: </label>
            <input type="text" name="firstname" maxlength="50" class="input" required>
            <br>
            <br><br>
            <label>Last name: </label> 
            <input type="text" name="lastname" maxlength="50" class="input" required>
            <br><br><br>
            <label> Date of birth: </label>
            <input type="date" name="dob" class="input" id="datepicker" min="1900-01-01" max="1997-12-31" required>
            <br><br><br>
            <label>Gender:</label><br><br><br><br>
            <input type="radio" name="gender" id = "gender" value="F"><p>Female</p>
            <br>
            <input type="radio" name="gender" id = "gender" checked="" value="M"><p>Male</p>
            <br>
            <label>E-mail: </label> <input type="email" name="email" maxlength="50" value="" class="input" required>
            <br>
            <input type="submit" value="Continue" class="btn">
        </form>
    </div>
    <div class="kobobqdeli">
            <img id="img" src="images/ticketinfo.jpg" alt="Ticket information">
    </div>
</div>
<div class="boughtticket">
    <div id="success" style="display:none">
        <h1>You have successfully bought a ticket for July Morning. Check your email for more information!<br>
            Click <a href="index.php">here</a> to go back to the website.</h1>
    </div>
    <div id="boughtticket1" style="display:none"><h1>You have already bought a ticket!<br> If you wish to buy another one, please log out and create a new profile!</h1></div>
</div>
<script type="text/javascript">
    var datefield = document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type != "date") { //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>

<script>
    if (datefield.type != "date") { //if browser doesn't support input type="date", initialize date picker widget:
        jQuery(function ($) { //on document.ready
            $('#datepicker').datepicker();
        })
    }
</script>
<?php
include 'includes/footer.php';
require('php/formvalidation.php');
if($_SESSION["Log"] == true){
    echo "<script> $('#register').hide();"
        . "$('#boughtticket1').show(); $('#success').hide(); </script>";
}
?>
