<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'dbi339805');
    define('DB_PASSWORD', '1LD6XTYh06');
    define('DB_DATABASE', 'dbi339805');
$con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Failed to Connect to MySQL : ". mysql_error());
$db=mysql_select_db(DB_DATABASE,$con) or die("Failed to connect to MySQL: ". mysql_error());
// variables


echo "BLATANT";
function NewVisitor()
{
    echo "BLATANT7";
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $dob = test_input($_POST["dob"]);
    $email = $_POST['email'];
    $active = $_POST['camping'];
    $campers = 0;
    echo "BLATANT2";
    $query = "INSERT INTO visitor (FirstName,LastName,Dob,Gender,Email,Active) VALUES ('$firstname','$lastname','$dob','$gender','$email','$active')";
    echo "BLATANT";
    $data = mysql_query ($query)or die(mysql_error());
    echo "BLATANT3";
    if($data)
    {
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        header("location: index.php");
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('failed!')</script>";
    //header("location: Gallery.php");
        echo ('sadface'.mysql_error());
        
    }
}
NewVisitor();
echo "BLATANT6";

?>