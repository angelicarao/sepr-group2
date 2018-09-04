<?php
include('php/Connection.php');
include('includes/header.php');
include('php/session.php');
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
</script>
<script type="text/javascript" src="js/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel='stylesheet'type='text/css'href="css/ProfileStyle.css"/>
<script> /* plug-in for jquery */
 (function(a){a.event.special.textchange={setup:function(){a(this).data("lastValue",this.contentEditable==="true"?a(this).html():a(this).val());a(this).bind("keyup.textchange",a.event.special.textchange.handler);a(this).bind("cut.textchange paste.textchange input.textchange",a.event.special.textchange.delayedHandler)},teardown:function(){a(this).unbind(".textchange")},handler:function(){a.event.special.textchange.triggerIfChanged(a(this))},delayedHandler:function(){var c=a(this);setTimeout(function(){a.event.special.textchange.triggerIfChanged(c)},
 25)},triggerIfChanged:function(a){var b=a[0].contentEditable==="true"?a.html():a.val();b!==a.data("lastValue")&&(a.trigger("textchange",[a.data("lastValue")]),a.data("lastValue",b))}};a.event.special.hastext={setup:function(){a(this).bind("textchange",a.event.special.hastext.handler)},teardown:function(){a(this).unbind("textchange",a.event.special.hastext.handler)},handler:function(c,b){b===""&&b!==a(this).val()&&a(this).trigger("hastext")}};a.event.special.notext={setup:function(){a(this).bind("textchange",
 a.event.special.notext.handler)},teardown:function(){a(this).unbind("textchange",a.event.special.notext.handler)},handler:function(c,b){a(this).val()===""&&a(this).val()!==b&&a(this).trigger("notext")}}})(jQuery);
</script>

<style> /* sidebar css */
#sidebar {
    right:0px;
    height: 35px;
    opacity: 0.7;
    overflow:auto;
    position: absolute;
    width: 100px;
    background: #000;
    margin: 0 auto;
    padding: 8px;
    background: #fff;
    top:1px;
}
</style>

<div class="campingspot">
<h1><?php
    echo "ID : " . $_SESSION["id"] . " ";
    echo "<br> Name: ".$_SESSION["Visitor"] . " ";
    echo $_SESSION["VisitorLname"] . " ";
    echo "<br>";
    echo " Email : " . $_SESSION["email"];
    ?></h1>
</div>

<?php
//PROVERKA DALI TOVA E CHOVEKA koito plashta i dali ima entry v booking ! raboti
$i = $_SESSION["id"];
$sql = "SELECT GuestOf From visitor Where VisitorID = '$i'"; //dali ima booking spot veche
$result = mysql_query($sql);
$row = mysql_fetch_array($result, MYSQLI_ASSOC);
$rr = $row["GuestOf"];

if ($rr == null) { //ako nqma
    $sql = "SELECT SpotID FROM booking WHERE SpotID >= 15"; //ima li free spot
    $result = mysql_query($sql);

    $count = mysql_num_rows($result);
    if ($count > 0) {
        echo "<script type='text/javascript'>alert('FULL')</script>";
        // SORRY MOTORI
        $fff=2;
    } else {
        $fff=3;
        
        //Purvo entry
    }
} else { //ako ima
    $id1 = "";
    $id2 = "";
    $id3 = "";
    $id4 = "";
    $id5 = "";
    $sql = "SELECT * From booking Where ID_main = '$rr'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result, MYSQLI_ASSOC);
    $Spot = $row["SpotID"];
    $fff=4;

    if ($rr == $i) { // ako toi e shefa
        $sql1 = "SELECT ID_1 From booking Where ID_main = '$i'";
        $idd = mysql_query($sql1);
        $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
        $id1 = $row["ID_1"];
        $_SESSION["id1"]= $id1;
        if ($id1 == null) {
            $row = GetInfo($id1);
            $Fname1 = $row["FirstName"];
            $Lname1 = $row["LastName"];
            $Email1 = $row["Email"];
            $fff=5;
            $_SESSION["number"] = $fff;
            //JAVASCRIPT
        } else {
            $sql2 = "SELECT ID_2 From booking Where ID_main = '$i'";
            $idd = mysql_query($sql2);
            $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
            $id2 = $row["ID_2"];
            $_SESSION["id2"]= $id2;
            if ($id2 == null) {
                $fff=6;
                $row = GetInfo($id1);
                $Fname1 = $row["FirstName"];
                $Lname1 = $row["LastName"];
                $Email1 = $row["Email"];
                $_SESSION["number"] = $fff;

                //JAVASCRIPT
            } else {
                $sql3 = "SELECT ID_3 From booking Where ID_main = '$i'";
                $idd = mysql_query($sql3);
                $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
                $id3 = $row["ID_3"];
                $_SESSION["id3"]= $id3;
                if ($id3 == null) {
                    $fff = 7;
                    $row = GetInfo($id1);
                    $Fname1 = $row["FirstName"];
                    $Lname1 = $row["LastName"];
                    $Email1 = $row["Email"];

                    $row = GetInfo($id2);
                    $Fname2 = $row["FirstName"];
                    $Lname2 = $row["LastName"];
                    $Email2 = $row["Email"];
                    $_SESSION["number"] = $fff;


                    //JAVASCRIPT
                } else {
                    $sql4 = "SELECT ID_4 From booking Where ID_main = '$i'";
                    $idd = mysql_query($sql4);
                    $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
                    $id4 = $row["ID_4"];
                    $_SESSION["id4"]= $id4;
                    if ($id4 == null) {
                        $fff = 8;
                        $row = GetInfo($id1);
                        $Fname1 = $row["FirstName"];
                        $Lname1 = $row["LastName"];
                        $Email1 = $row["Email"];

                        $row = GetInfo($id2);
                        $Fname2 = $row["FirstName"];
                        $Lname2 = $row["LastName"];
                        $Email2 = $row["Email"];

                        $row = GetInfo($id3);
                        $Fname3 = $row["FirstName"];
                        $Lname3 = $row["LastName"];
                        $Email3 = $row["Email"];
                        $_SESSION["number"] = $fff;


                        //JAVASCRIPT
                    } else {
                        $sql5 = "SELECT ID_5 From booking Where ID_main = '$i'";
                        $idd = mysql_query($sql5);
                        $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
                        $id5 = $row["ID_5"];
                        $_SESSION["id5"]= $id5;
                        if ($id5 == null) {
                            $fff = 9;
                            $row = GetInfo($id1);
                            $Fname1 = $row["FirstName"];
                            $Lname1 = $row["LastName"];
                            $Email1 = $row["Email"];

                            $row = GetInfo($id2);
                            $Fname2 = $row["FirstName"];
                            $Lname2 = $row["LastName"];
                            $Email2 = $row["Email"];

                            $row = GetInfo($id3);
                            $Fname3 = $row["FirstName"];
                            $Lname3 = $row["LastName"];
                            $Email3 = $row["Email"];

                            $row = GetInfo($id4);
                            $Fname4 = $row["FirstName"];
                            $Lname4 = $row["LastName"];
                            $Email4 = $row["Email"];
                            $_SESSION["number"] = $fff;

                            //JAVASCTIPT
                        } else {
                            $fff = 4;
                            $rrFname = $_SESSION["Visitor"];
                            $rrLname = $_SESSION["VisitorLname"];
                            $rrEmail = $_SESSION["email"];
                            $row = GetInfo($id1);
                            $Fname1 = $row["FirstName"];
                            $Lname1 = $row["LastName"];
                            $Email1 = $row["Email"];

                            $row = GetInfo($id2);
                            $Fname2 = $row["FirstName"];
                            $Lname2 = $row["LastName"];
                            $Email2 = $row["Email"];

                            $row = GetInfo($id3);
                            $Fname3 = $row["FirstName"];
                            $Lname3 = $row["LastName"];
                            $Email3 = $row["Email"];

                            $row = GetInfo($id4);
                            $Fname4 = $row["FirstName"];
                            $Lname4 = $row["LastName"];
                            $Email4 = $row["Email"];

                            $row = GetInfo($id5);
                            $Fname5 = $row["FirstName"];
                            $Lname5 = $row["LastName"];
                            $Email5 = $row["Email"];
                            //JAVA INFO,all from booking
                        }
                    }
                }
            }
        }
    } else {
        //current user $i shefa e na $rr
        $sql = "SELECT * From booking Where ID_main = '$rr'";
        $idd = mysql_query($sql);
        $row = mysql_fetch_array($idd, MYSQLI_ASSOC);
        $Spot = $row["SpotID"];
        $id1 = $row["ID_1"];
        $id2 = $row["ID_2"];
        $id3 = $row["ID_3"];
        $id4 = $row["ID_4"];
        $id5 = $row["ID_5"];
        $sql = "SELECT FirstName, LastName, Email From visitor Where VisitorID = '$rr'";
        $idd = mysql_query($sql);
        $row = mysql_fetch_array($idd, MYSQL_ASSOC);
        $rrFname = $row["FirstName"];
        $rrLname = $row["LastName"];
        $rrEmail = $row["Email"];
        $row = GetInfo($id1);
        $Fname1 = $row["FirstName"];
        $Lname1 = $row["LastName"];
        $Email1 = $row["Email"];

        $row = GetInfo($id2);
        $Fname2 = $row["FirstName"];
        $Lname2 = $row["LastName"];
        $Email2 = $row["Email"];

        $row = GetInfo($id3);
        $Fname3 = $row["FirstName"];
        $Lname3 = $row["LastName"];
        $Email3 = $row["Email"];

        $row = GetInfo($id4);
        $Fname4 = $row["FirstName"];
        $Lname4 = $row["LastName"];
        $Email4 = $row["Email"];

        $row = GetInfo($id5);
        $Fname5 = $row["FirstName"];
        $Lname5 = $row["LastName"];
        $Email5 = $row["Email"];
        //JAVA INFO,all from booking
    }
    
}

function GetInfo($idnum) {
    $sq = "SELECT FirstName, LastName, Email From visitor Where VisitorID = '$idnum'";
    $ress = mysql_query($sq);
    $r = mysql_fetch_array($ress, MYSQLI_ASSOC);
    return $r;
}
?>

<div id="sidebar">
            
                <h2>Total Price :</h2>
                <li><p class ="TotalPrice" id="TotalPrice"></p></li>
                    
                    
                
        
</div>
<div class="campingspot">
<div id="first" style="display:block">
    <form>
    <label>Would you like to book a camping spot?</label><br><br>
    <p>Yes <input type="radio" name="YesOrNo" value="1" onchange="YesShow()">   (30 euro)</p>
    <p>No <input type="radio" name="YesOrNo" value="0" onchange="NoShow()" checked>   (no fee)</p>
    </form>
</div>
</div>
<div class="campingspot">
<div id="Options">
    <form method="POST" name="Guests" action="InsertPost.php">
        <label>How many guests would you like to bring?<br> (maximum 5)
        <select id="nrofguests" name="nrofguests">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> (20 euro per guest)
            </label>
        <br>
        <div>    
            <div id="1" class="Guest">
                <label>Please, enter their <strong>ID numbers</strong>:</label><br>
               <p>Guest 1: <input type="number" name="guest1" id="guest1"></p> <br> </div>
            <div id="2" class="Guest"><p>Guest 2: <input type="number" name="guest2" id="guest2"> </p> <br> </div>
            <div id="3" class="Guest"><p>Guest 3: <input type="number" name="guest3" id="guest3"></p> <br> </div>
            <div id="4" class="Guest"><p>Guest 4: <input type="number" name="guest4" id="guest4"></p> <br> </div>
            <div id="5" class="Guest"><p>Guest 5: <input type="number" name="guest5" id="guest5"></p> <br> </div>
            <div id="7" class="Guest"><input type="submit" value="Submit"></div>
        </div>
    </form>
</div>
</div>
<br> <br>
<div class="campingspot">
<div id="second" style="display:block">
    <form method="POST" action="UpdatePost.php">
       <label>You are at spot number: <?php echo $Spot; ?></label>
        <br><p>Your Reserver ID is:  <?php echo $rr . " " . $rrFname . " " . $rrLname . " " . $rrEmail; ?></p>
        <div><p><?php echo $id1 . " " . $Fname1 . " " . $Lname1 . " " . $Email1 . " " . "<br>" . $id2 . " " . $Fname2 . " " . $Lname2 . " " . $Email2 . "<br>" . $id3 . " " . $Fname3 . " " . $Lname3 . " " . $Email3 . "<br>" . $id4 . " " . $Fname4 . " " . $Lname4 . " " . $Email4 . "<br>" . $id5 . " " . $Fname5 . " " . $Lname5 . " " . $Email5 . "<br>"; ?></p></div>
        <div id="update1"><p>Guest 1: </p><input type="number" name="updateGuest1" id="updateguest1"> <br></div>
        <div id="update2"><p>Guest 2: </p><input type="number" name="updateGuest2" id="updateguest2"> <br></div>
        <div id="update3"><p>Guest 3: </p><input type="number" name="updateGuest3" id="updateguest3"> <br></div>
        <div id="update4"><p>Guest 4: </p><input type="number" name="updateGuest4" id="updateguest4"> <br></div>
        <div id="update5"><p>Guest 5: </p><input type="number" name="updateGuest5" id="updateguest5"> <br></div>
        <div id="update6"><input type="submit" value="Submit"></div>
    </form>
    <br>
    <?php
    if ($Spot == 1)
    {
    ?>
        <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.842453%2C%206.736530&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php 
    }
    if($Spot == 2)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.842628%2C%206.736592&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 3)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.842867%2C%206.736731&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 4)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.843067%2C%206.736827&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 5)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.843283%2C%206.736847&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 6)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.843493%2C%206.736854&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 7)
    {
    ?>
    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.843746%2C%206.736912&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 8)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.843997%2C%206.737048&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 9)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844212%2C%206.737257&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 10)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844414%2C%206.737487&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 11)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844600%2C%206.737696&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 12)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844744%2C%206.737980&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 13)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844815%2C%206.738617&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 14)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844708%2C%206.739021&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    }
    if($Spot == 15)
    {
    ?>
    <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=52.844427%2C%206.739252&key=AIzaSyDTqAMExRZSh9R65Tn829JfhFIdjGuS22M" allowfullscreen></iframe>
    <?php
    } ?>
</div>
</div>



<script>
    
    
    
    function YesShow()
    {
        document.getElementById('Options').style.display = 'block';
    }
    function NoShow()
    {
        document.getElementById('Options').style.display = 'none';
    }
    NoShow();
    $(document).ready(function () {
        $('.Guest').hide();
        $('#nrofguests').change(function () {
            $('.Guest').hide();
            if ($(this).val() == 0) {
                e.display = 'none';
            }
            if ($(this).val() == 1) {
                $('#1').show();
                $('#7').show();
            }
            if ($(this).val() == 2) {
                $('#1').show();
                $('#2').show();
                $('#7').show();
            }
            if ($(this).val() == 3) {
                $('#1').show();
                $('#2').show();
                $('#3').show();
                $('#7').show();
            }
            if ($(this).val() == 4) {
                $('#1').show();
                $('#2').show();
                $('#3').show();
                $('#4').show();
                $('#7').show();
            }
            if ($(this).val() == 5) {
                $('#1').show();
                $('#2').show();
                $('#3').show();
                $('#4').show();
                $('#5').show();
                $('#7').show();
            }
        });
    });

</script>
<script>
    
                    
                    $(document).ready(function(){
                        var prize = 0;
                    $('#guest1').bind('hastext', function () {
                        prize = prize +50;
                        $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest1').bind('notext', function () {
                        prize = prize-50;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest2').bind('hastext',function(){
                       prize = prize +20; 
                        $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest2').bind('notext', function () {
                        prize =prize-20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest3').bind('hastext',function(){
                       prize = prize +20; 
                        $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest3').bind('notext', function () {
                        prize = prize-20;
                    $('#TotalPrice').html(prize+" euro");
                    });    
                    $('#guest4').bind('hastext',function(){
                       prize = prize +20; 
                        $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest4').bind('notext', function () {
                        prize = prize-20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest5').bind('hastext',function(){
                       prize = prize +20; 
                        $('#TotalPrice').html(prize+" euro");
                    });
                    $('#guest5').bind('notext', function () {
                        prize = prize-20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest5').bind('hastext',function(){
                    prize = prize + 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest5').bind('notext',function(){
                    prize = prize - 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest4').bind('hastext',function(){
                    prize = prize + 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest4').bind('notext',function(){
                    prize = prize - 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest3').bind('hastext',function(){
                    prize = prize + 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest3').bind('notext',function(){
                    prize = prize - 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                     $('#updateguest2').bind('hastext',function(){
                    prize = prize + 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest2').bind('notext',function(){
                    prize = prize - 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                     $('#updateguest1').bind('hastext',function(){
                    prize = prize + 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    $('#updateguest1').bind('notext',function(){
                    prize = prize - 20;
                    $('#TotalPrice').html(prize+" euro");
                    });
                    });
                    
                    
    /* SideBar function */
    var name = "#sidebar";
    var menuYloc = null;
    
    menuYloc = parseInt($("#sidebar").css("top").substring(0, $(name).css("top").indexOf("px")))
        $(window).scroll(function () {
            offset = menuYloc + $(document).scrollTop() + "px";
            $(name).animate({ top: offset }, { duration: 500, queue: false });
        });
function ShowFirstHideSecond()
    {
        document.getElementById('first').style.display = 'block';
        
        document.getElementById('second').style.display = 'none';
    }
function HideAll()
    {
        $('#first').hide();
        $('#second').hide();
    }
function HideFirstShowSecond()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').hide();
        $('#update2').hide();
        $('#update3').hide();
        $('#update4').hide();
        $('#update5').hide();
        $('#update6').hide();
    }
function Show5()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').show();
        $('#update2').show();
        $('#update3').show();
        $('#update4').show();
        $('#update5').show();
        $('#update6').show();
       
    }
function Show4()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').hide();
        $('#update2').show();
        $('#update3').show();
        $('#update4').show();
        $('#update5').show();
        $('#update6').show();
    }
function Show3()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').hide();
        $('#update2').hide();
        $('#update3').show();
        $('#update4').show();
        $('#update5').show();
        $('#update6').show();
    }
function Show2()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').hide();
        $('#update2').hide();
        $('#update3').hide();
        $('#update4').show();
        $('#update5').show();
        $('#update6').show();
    }
function Show1()
    {
        $('#first').hide();
        $('#second').show();
        $('#update1').hide();
        $('#update2').hide();
        $('#update3').hide();
        $('#update4').hide();
        $('#update5').show();
        $('#update6').show();
    }
</script>
<?php
if($fff == 3) // ako e nov
    echo "<script>
    ShowFirstHideSecond();</script>";
else if ($fff == 2) //ako e pulno
    echo "<script>
    HideAll();</script>";
else if ($fff == 4) // ako ne e shef
    echo "<script>
    HideFirstShowSecond();</script>";
else if($fff==5) // ako e shef i ima mqsto za 5
    echo "<script>
    Show5();</script>";
else if($fff==6) //ako e shef i ima mqsto za 4
    echo "<script>
    Show4();</script>";
else if ($fff==7) //ako ima mqsto za 3
    echo "<script>
    Show3();</script>";
else if($fff==8) //ako ima mqsto za 2
    echo "<script>
    Show2();</script>";
else if ($fff==9) //ako ima mqsto za 1
    echo "<script>
    Show1();</script>";
?>