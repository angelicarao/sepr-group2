<?php
include('php/session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('captcha', {
                'sitekey' : '6Lcjc3MUAAAAALkrmUe0GhmqaEl5pOuQ6A5Xjy2G',
                'theme' : 'light'
            });
        };
    </script>
    <link rel="stylesheet" type="text/css" href="css/BuyTicket.css"/>
    <link rel="stylesheet" type="text/css" href="css/demoG.css"/>
    <p class="codrops-demos">
        <a href="index.php"><img height="64" width="64"   src="images/IcoHomeWhite.png"> </a>
        <a href="About.php"><img height="64" width="64" src="images/IcoAboutWhite.png"></a>
        <a href="Gallery.php"><img height="64" width="64" src="images/IcoGalleryWhite.png"></a>
        <a href="Location.php"><img height="64" width="64" src="images/locIconWhite.png"></a>
    </p>
</head>
<body>
<br>
<div id="title">Log in</div>
<div id="errors"> </div>
<div class="register">
<form class="buyform" action="php/login.php" method="POST">
    <br>
    <label>Email:</label>
    <input style="float:right" type="email" value="" name="email" required>
    <br>
    <label>Password:</label>
    <input style="float:right" type="password" value="" name="password" required>
    <br>
    <div id="captcha"></div>
    <div style="align-items: center">
    <input style="
    border-radius: 5px;
    font-family: Georgia;
    color: #fff;
    font-size: 16px;
    background: #005580;
    padding: 10px 20px 10px 20px;
    margin: 0;" type="submit" value="Submit">
    </div>
    <label>Don't have an account?<a href="SignUpForm.php" style="color:white; font-weight: bolder;">Register</a> now!</label>
</form>
</div>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script>
    var content = document.createTextNode("<?php echo $_SESSION['errors']; ?>");
    document.getElementById("errors").appendChild(content);
    <?php $_SESSION['errors'] = ""; ?>
</script>
</body>
</html>
