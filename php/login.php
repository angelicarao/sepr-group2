<?php
include('Connection.php');
include('session.php');

if (!empty($_POST)) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    if (empty($email)) {
        $error .= "Email field is empty ";
    }
    if (empty($password)) {
        $error .= "Password field is empty ";
    }

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6Lcjc3MUAAAAAJ1oo_NUZE42Oxds7Nimr40VZF6A';
        $post_data = http_build_query(
            array(
                'secret' => $secret,
                'response' => $_POST['g-recaptcha-response']
            )
        );
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $post_data
            )
        );
        $context  = stream_context_create($opts);
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify',false,$context);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success && empty($error)) {
            $sql = "SELECT userId, email, password FROM users WHERE email ='$email'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if (password_verify($password, $row["password"]) && $row["email"] == $email) {
                $_SESSION["Log"] = TRUE;
                $_SESSION["email"] = $row["email"];
                $_SESSION["userId"] = $row["userId"];

                header("Location: http://i339805.hera.fhict.nl/index.php");
            } else {
                $error .= "Incorrect email or password.";
            }
        } else {
            $error .= "Captcha is not confirmed";
        }
    }
}
?>
