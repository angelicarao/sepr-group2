<?php
//Checks if all the required fields are filled in.
include('Connection.php');
$errors = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$required_fields = array('firstname', 'lastname', 'dob', 'gender', 'email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors = '*All fields are required';
			break 1;
		}
	}
	// checks if the username is not taken using the user_exist function in functions/users.php
	if(empty($errors) === true) {
		//if the username is not use, validates the email
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors = 'A valid email address is required!';
		}
		//if the username is not use, checks if the email is not in use using the email_exists function from functions/users.php
        $emaill = $_POST["email"];
		$sql = "SELECT Email FROM visitor WHERE Email = '$emaill'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result,MYSQLI_ASSOC);
        $count = mysql_num_rows($result);
        if ($count > 0) {
			echo "<script type='text/javascript'>alert('This email is in use')</script>";
		}
                else{
                    NewVisitor();
                }
	}
}
//functions
function email_exists($email) {
		$email = sanatize($email);
		return (mysql_result($query = mysql_query("SELECT COUNT(`VisitorID`) FROM `visitor` where `Email` = '$email'"), 0) == 1) ? true : false;
	}
function output_errors($errors) {
	return '<span style="color:red">' .$errors. '</span>';
}   
function array_sanitize(&$item){
	$item = mysql_real_escape_string($item);
}

function sanatize($data) {
	return mysql_real_escape_string($data);
}
function NewVisitor()
{
    
    $firstname =  mysql_real_escape_string($_POST["firstname"]);
    $lastname =mysql_real_escape_string($_POST["lastname"]);
    $email = mysql_real_escape_string($_POST["email"]);
    $gender = $_POST["gender"];
    //$from = mysql_real_escape_string($_POST["dob"]);
    //$date = DateTime::createFromFormat('m/d/Y',$from);
    //$dob = $date->format("Y-m-d");
    $from = $_POST["dob"];
    $phpdate=$from;
    $dob = date("Y-m-d",strtotime($phpdate));
    $email = mysql_real_escape_string($_POST['email']);
    $active = 0;
    
    $query = "INSERT INTO visitor (FirstName,LastName,Dob,Gender,Email,Active) VALUES ('$firstname','$lastname','$dob','$gender','$email','$active')";
    $data = mysql_query ($query)or die(mysql_error());
    //email($email,$firstname,$lastname);
    
    if($data)
    {
      echo "<script> $('#register').hide();"
        . "$('#success').show(); $('#boughtticket1').hide();</script>";
       // email();
        //header("Location: index.php");                 
    }
    else
    {
        echo "<script type='text/javascript'>alert('failed!')</script>";
    //header("location: Gallery.php");
        echo ('sadface'.mysql_error());
        
    }
}
function email(){
		require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
           $mail->SMTPDebug=true;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = gethostbyname("smtp.gmail.com");  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dreamteamfontysen@gmail.com';                 // SMTP username
        $mail->Password = 'dreamteam1';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('dreamteamfontysen@gmail.com', 'Dream');
        $mail->addAddress('dreamteamfontysen@gmail.com');

        $mail->Subject = 'Account Activation';
        $mail->Body    = 'Hello, ';
        $mail->IsHTML(true); 

        if(!$mail->send()) {
    echo "Message could not be sent.";
    echo "<script type='text/javascript'>alert('. $mail->ErrorInfo')</script>"  ;
        } else {
            echo "<script type='text/javascript'>alert('success')</script>";
        }
	}
?>