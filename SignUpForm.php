<?php
include('php/session.php');
if (!empty($_SESSION["Log"]) && $_SESSION["Log"] == true)
    header("Location: http://i339805.hera.fhict.nl/index.php");
?>

<!DOCTYPE html>
<html>
<link rel="icon" type="image/logotitle.png" href="images/logotitle.png" sizes="32x32">
<link rel="stylesheet" type="text/css" href="css/demoG.css"/>
<link rel="stylesheet" type="text/css" href="css/BuyTicket.css">

<meta charset="utf-8">

<head>
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('captcha', {
                'sitekey': '6Lcjc3MUAAAAALkrmUe0GhmqaEl5pOuQ6A5Xjy2G',
                'theme': 'light'
            });
        };
    </script>
    <p class="codrops-demos">
        <a href="index.php"><img height="64" width="64" src="images/IcoHomeWhite.png"> </a>
        <a href="About.php"><img height="64" width="64" src="images/IcoAboutWhite.png"></a>
        <a href="Gallery.php"><img height="64" width="64" src="images/IcoGalleryWhite.png"></a>
        <a href="Location.php"><img height="64" width="64" src="images/locIconWhite.png"></a>
    </p>
</head>

<body>
<div id="errors">
</div>
<h1 id="title">Create an account</h1>
<div class="register">
    <form action="php/registration.php" method="POST" class="signupform">
        <br>
        <label>Email:</label>
        <input type="email" value="" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" value="" name="password" required>
        <br>
        <label>Confirm password:</label>
        <input type="password" value="" name="confPassword" required>
        <br>
        <div id="captcha"></div>
        <input type="submit" value="Sign up" class="btn">
        <br>
        <label>Already have an account? Then <a href="SignInForm.php" style="color:white; font-weight: bolder;">sign in</a>.</label>
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


