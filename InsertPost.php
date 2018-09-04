<?php
include('php/Connection.php');
include('includes/header.php');
include('php/session.php');
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = "";
    $number = $_POST["nrofguests"];
    $Guest1 = $_POST["guest1"];
    $Guest2 = $_POST["guest2"];
    $Guest3 = $_POST["guest3"];
    $Guest4 = $_POST["guest4"];
    $Guest5 = $_POST["guest5"];
    $i = $_SESSION["id"];
    $_SESSION["Success"] = 0;
    if ($number == 1) {
        
        if ($Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1)) {
                $insertSQL = "INSERT INTO booking (ID_main,ID_1) VALUES ('$i','$Guest1')";
                $data = mysql_query($insertSQL) or die(mysql_error());
                updatte($Guest1);
                $_SESSION["Success"] = 1;
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist or ID has a spot')</script>";
        }
    }
    if ($number == 2) {
        if ($Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2)) {
                $insertSQL = "INSERT INTO booking (ID_main,ID_1,ID_2) VALUES ('$i','$Guest1','$Guest2')";
                $data = mysql_query($insertSQL) or die(mysql_error());
                updatte($Guest1);
                updatte($Guest2);
                $_SESSION["Success"] = 1;
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist or ID has a spot')</script>";
        }
    }
    if ($number == 3) {
        if ($Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3)) {
                $insertSQL = "INSERT INTO booking (ID_main,ID_1,ID_2,ID_3) VALUES ('$i','$Guest1','$Guest2','$Guest3')";
                $data = mysql_query($insertSQL) or die(mysql_error());
                updatte($Guest1);
                updatte($Guest2);
                updatte($Guest3);
                $_SESSION["Success"] = 1;
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist or ID has a spot')</script>";
        }
    }
    if ($number == 4) {
        if ($Guest4 == null || $Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3) && exist($Guest4)) {
                $insertSQL = "INSERT INTO booking (ID_main,ID_1,ID_2,ID_3,ID_4) VALUES ('$i','$Guest1','$Guest2','$Guest3','$Guest4')";
                $data = mysql_query($insertSQL) or die(mysql_error());
                updatte($Guest1);
                updatte($Guest2);
                updatte($Guest3);
                updatte($Guest4);
                $_SESSION["Success"] = 1;
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist or ID has a spot')</script>";
        }
    }
    if ($number == 5) {
        if ($Guest5 == null || $Guest4 == null || $Guest3 == null || $Guest2 == null || $Guest1 == null)
            echo "<script type='text/javascript'>alert('Empty fields')</script>";
        else {
            if (exist($Guest1) && exist($Guest2) && exist($Guest3) && exist($Guest4) && exist($Guest5)) {
                $insertSQL = "INSERT INTO booking (ID_main,ID_1,ID_2,ID_3,ID_4,ID_5) VALUES ('$i','$Guest1','$Guest2','$Guest3','$Guest4','$Guest5')";
                $data = mysql_query($insertSQL) or die(mysql_error());
                updatte($Guest1);
                updatte($Guest2);
                updatte($Guest3);
                updatte($Guest4);
                updatte($Guest5);
                $_SESSION["Success"] = 1;
                header('location: Profile.php');
            } else
                echo "<script type='text/javascript'>alert('ID does not exist or ID has a spot')</script>";
        }
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
        $update = "UPDATE visitor SET GuestOf = '$i' WHERE VisitorID = '$i'";
        $data2 = mysql_query($update) or die(mysql_error());
    } else
        echo "<script type='text/javascript'>alert('Wrong ID')</script>";
}
    
function exist($gue) {
    $sql = "Select * From visitor Where VisitorID = '$gue'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    if ($count > 0) {
        $sql = "Select GuestOf From visitor Where VisitorID = '$gue'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result, MYSQLI_ASSOC);
        $u = $row["GuestOf"];
        if($u == null)
            return true;
        else 
            return false;
    } else
        return false;
}
$_SESSION["Success"] = 0;
?>
