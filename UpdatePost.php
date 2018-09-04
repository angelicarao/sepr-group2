<?php
include('php/Connection.php');
include('includes/header.php');
include('php/session.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = "";
    $Guest1 = $_POST["updateGuest1"];
    $Guest2 = $_POST["updateGuest2"];
    $Guest3 = $_POST["updateGuest3"];
    $Guest4 = $_POST["updateGuest4"];
    $Guest5 = $_POST["updateGuest5"];
    $i = $_SESSION["id"];
    
    
    if($_SESSION["number"] == 6)
        $Guest1 = $_SESSION["id1"];
    if($_SESSION["number"] == 7)
    {
        $Guest1 = $_SESSION["id1"];
        $Guest2 = $_SESSION["id2"];
    }
    if($_SESSION["number"]==8)
    {
        $Guest1 = $_SESSION["id1"];
        $Guest2 = $_SESSION["id2"];
        $Guest3 = $_SESSION["id3"];
    }
    if($_SESSION["number"]==9)
    {
        $Guest1 = $_SESSION["id1"];
        $Guest2 = $_SESSION["id2"];
        $Guest3 = $_SESSION["id3"];
        $Guest4 = $_SESSION["id4"];
    }
        if ($Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1)) {
                
                if(updatte($Guest1))
                {
                    $insertSQL = "UPDATE booking SET ID_1 = '$Guest1' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());
                }
                
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist')</script>";
        }
    
    
        if ($Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2)) {
                
                if(updatte($Guest1))
                {$insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest2))
                {$insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist')</script>";
        }
    
   
        if ($Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3)) {
                
                
                if(updatte($Guest1))
                {$insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest2))
                {$insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest3))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist')</script>";
        }
    
    
        if ($Guest4 == null || $Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3) && exist($Guest4)) {
                
                if(updatte($Guest1))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());
                }
                if(updatte($Guest2))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());
                }
                if(updatte($Guest3))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());
                }
                if(updatte($Guest4))
                { 
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());
                }
                
                
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist')</script>";
        }
    
    
        if ($Guest5 == null || $Guest4 == null || $Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3) && exist($Guest4) && exist($Guest5)) {
                
                if(updatte($Guest1))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4', ID_5 = '$Guest5' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest2))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4', ID_5 = '$Guest5' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest3))
                {
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4', ID_5 = '$Guest5' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest4))
                { 
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4', ID_5 = '$Guest5' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                if(updatte($Guest5))
                { 
                $insertSQL = "UPDATE booking SET ID_1 = '$Guest1', ID_2 = '$Guest2', ID_3 = '$Guest3', ID_4 = '$Guest4', ID_5 = '$Guest5' Where ID_main = '$i'";
                $data = mysql_query($insertSQL) or die(mysql_error());}
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist')</script>";
        }
    }
function updatte($g) {
    $i = $_SESSION["id"];
    $sql = "SELECT GuestOf From visitor Where VisitorID = '$g'"; //dali ima booking spot veche
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result, MYSQLI_ASSOC);
    $rr = $row["GuestOf"];
    if ($rr == null) { //ako nqma
        $update = "UPDATE visitor SET GuestOf = '$i' WHERE VisitorID = '$g'";
        $data2 = mysql_query($update) or die(mysql_error());
        return true;
    } else if($rr != $i)
    {    echo "<script type='text/javascript'>alert('Wrong ID')</script>";
    return false;
    }
}

function exist($gue) {
    $sql = "Select * From visitor Where VisitorID = '$gue'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    if ($count > 0) {
        return true;
    } else
        return false;
}

?>