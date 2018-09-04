<?php

    include('Connection.php');

include('session.php');
echo"<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>";

if($_POST){
    $error="";
    $_SESSION["Log"] = FALSE;

    $email = $_POST['email'];
    $id = $_POST['id'];
    
if(empty($_POST['email']))
{
    echo "<script type='text/javascript'>alert('Empty email field')</script>";
    return false;
}
    if(empty($_POST['id']))
    {
        echo "<script type='text/javascript'>alert('Empty password field')</script>";
        return false;
    }
    
    $sql = "SELECT VisitorID, Email, FirstName, LastName FROM visitor WHERE VisitorID = '$id' and Email = '$email'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result,MYSQLI_ASSOC);
    $count = mysql_num_rows($result);
    

    if ($count > 0) {
        
       
            if ($row["Email"] == $email && $row["VisitorID"]==$id) {

                $_SESSION["Visitor"] = $row["FirstName"];
                $_SESSION["Log"] = TRUE;
                $_SESSION["email"] = $row["Email"];
                $_SESSION["id"] = $row["VisitorID"];
                $_SESSION["VisitorLname"] = $row["LastName"];
                echo "<script> 
                
                $('#nameLogged').show();
                $('#hide').hide();
                $('#hided').show();
                </script>";
                header("Location: index.php");
            }
            
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('Wrong Email or ID')</script>";
    }
}
?>
