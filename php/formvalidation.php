<?php
//Checks if all the required fields are filled in.
include('Connection.php');
include('session.php');
$errors = "";
if(!isset($_SESSION["id"])){
    header('Location: http://i339805.hera.fhict.nl/index.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
	$required_fields = array('firstname', 'lastname', 'dob', 'gender', 'email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors = '*All fields are required';
			break 1;
		}
    }
    $firstname =  $_POST["firstname"];
    $lastname =$_POST["lastname"];
    $gender = $_POST["gender"];
    $phpdate = $_POST["dob"];
    $dob = date("Y-m-d",strtotime($phpdate));
    $active = 0;

	// checks if the username is not taken using the user_exist function in functions/users.php
	if(empty($errors) === true) {
        // Regex
        if(!preg_match("/^([a-zA-Z' ]+)$/",$firstname)){
            $errors .= 'The first name must contain only letters!\n';
        }
        if(!preg_match("/^([a-zA-Z' ]+)$/",$lastname)){
            $errors .= 'The last name must contain only letters!\n';
        }
		//if the username is not use, validates the email
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors .='A valid email address is required!\n';
        }
        if($errors!=""){
            echo "<script type='text/javascript'>alert('$errors')</script>";
        }
        else{
            $email = $_POST["email"];
            $userId = $_SESSION["userId"];
            /* Prepared statement, stage 1: prepare */
		    $sql = "SELECT Email FROM visitor WHERE Email = '$email'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
		        	echo "<script type='text/javascript'>alert('This email is in use')</script>";
		        }
            else{
                $stmt =  $con->prepare("INSERT INTO visitor (FirstName,LastName,Dob,Email,Active,UserId,Gender) VALUES (?,?,?,?,?,?,?)");
                $stmt -> bind_param("ssssiis",$firstname,$lastname,$dob,$email,$active,$userId,$gender);

                if ($stmt->execute()) {
                    echo "New record created successfully";
                    echo "<script> $('#register').hide();"
                    . "$('#success').show(); $('#boughtticket1').hide();</script>"; 
                } else {
                    echo "<script type='text/javascript'>alert('Something went wrong')</script>";
                }
            }
                    
        }
	}
}

?>