<?php
$connection = mysqli_connect('athena01.fhict.local', 'dbi339805', '1LD6XTYh06', 'dbi339805');
if (!$connection) {
    echo 'no database';
}
//else{
    //echo 'check';
//}

mysqli_query($connection, 'SET NAMES utf8');
?>