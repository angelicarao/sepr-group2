<?php
include('Connection.php');
include('session.php');

if (!empty($_POST)) {
    $error = "";
    $_SESSION["Log"] = FALSE;
    if (empty($_POST['email'])) {
        $error .= "Email field is empty ";
    }
    if (empty($_POST['password'])) {
        $error .= "Password field is empty ";
    }
    if (empty($_POST['confPassword'])) {
        $error .= "Confirm password field is empty ";
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
        if ($responseData->success && $_POST['password'] == $_POST['confPassword']) {
            if(empty($error)) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT email FROM users WHERE email ='$email'";

                if (mysqli_query($con,$sql) === TRUE) {
                    $error .= "Email already exists.";
                    $_SESSION['errors'] = $error;
                    header("Location: http://i339805.hera.fhict.nl/SignUpForm.php");
                    return false;
                }
                $password = password_hash($password, PASSWORD_BCRYPT);
                $sql = "INSERT INTO users(email,password) VALUES ('$email','$password')";
                $result = mysqli_query($con, $sql, MYSQLI_USE_RESULT) or die("Failed inserting user: " . mysqli_error());
                if ($result) {
                    $_SESSION["Log"] = TRUE;
                    $_SESSION["email"] = $email;
                    $_SESSION["id"] = mysqli_insert_id($con);
                    header("Location: ../index.php");
                    return true;
                } else {
                    $error .= "Could not insert user. ". $result;
                    $_SESSION['errors'] = $error;
                    header("Location: http://i339805.hera.fhict.nl/SignUpForm.php");
                    return false;
                }
            }
        }
        else
            $error .= "Captcha is not confirmed";
    }
    echo $error;
        $_SESSION['errors'] = $error;
        header("Location: http://i339805.hera.fhict.nl/SignUpForm.php");
}
?>
