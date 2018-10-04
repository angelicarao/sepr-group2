<?php
include('php/session.php');
?>

<!DOCTYPE>
<html>
<head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('captcha', {
                'sitekey' : '6Lcjc3MUAAAAALkrmUe0GhmqaEl5pOuQ6A5Xjy2G',
                'theme' : 'light'
            });
        };
    </script>
</head>
<body>
<div id="errors">

</div>
<!-- POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
<form action="php/registration.php" method="POST">
    <br>
    <label>Email:</label>
    <input type="email" value="" name="email">
    <br>
    <label>Password:</label>
    <input type="password" value="" name="password">
    <br>
    <label>Confirm password:</label>
    <input type="password" value="" name="confPassword">
    <br>
    <div id="captcha"></div>
    <input type="submit" value="Submit">
</form>
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


