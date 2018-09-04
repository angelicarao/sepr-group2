<?php
    $guest1 = $_POST["guest1"];
    $guest2 = $_POST["guest2"];
    $guest3 = $_POST["guest3"];
    $guest4 = $_POST["guest4"];
    $guest5 = $_POST["guest5"];
    $campers = array();
    array_push($campers,$guest1,$guest2,$guest3,$guest4,$guest5);
    $camp = serialize($campers);
?>
Would you like to book a camping spot? 
    
    <br>
    <input type="radio" name="camping"  value="1" onchange = "show()">Yes
    <input type="radio" name="camping" checked=""  value="0" onchange = "hide()">No
    <br>
    <div id = "optional" style="display:none">
        How many guests would you like to bring?(max. 5)<br>
        <select id="nrofguests" >
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        Please specify their visitor id's:<br>
        <div id="1" class="box">Guest 1: <input type="text" name="guest1" ><br> <br></div>
        <div id="2" class="box">Guest 2: <input type="text" name="guest2" ><br> <br></div>
        <div id="3" class="box">Guest 3: <input type="text" name="guest3" ><br> <br></div>
        <div id="4" class="box">Guest 4: <input type="text" name="guest4" ><br> <br></div>
        <div id="5" class="box">Guest 5: <input type="text" name="guest5" ><br> <br></div>
        
    </div>  
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
    function show(){
        document.getElementById('optional').style.display = 'block';
    }
    function hide() {
        document.getElementById('optional').style.display = 'none';
    }
    $(document).ready(function () {
        $('.box').hide();
        
        $('#nrofguests').change(function () {
            $('.box').hide();
            if($(this).val()==0){
                e.display = 'none';
            }
            if($(this).val() == 1){
                $('#1').show();
            }
            if($(this).val() == 2){
                $('#1').show();
                $('#2').show();
            }
            if($(this).val() == 3){
                $('#1').show();
                $('#2').show();
                $('#3').show();
            }
            if($(this).val() == 4){
                $('#1').show();
                $('#2').show();
                $('#3').show();
                $('#4').show();
            }
            if($(this).val() == 5){
                $('#1').show();
                $('#2').show();
                $('#3').show();
                $('#4').show();
                $('#5').show();
            }
         
        });
    });
</script>

