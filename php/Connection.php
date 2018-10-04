<?php
    define('DB_SERVER', 'studmysql01.fhict.local');
    define('DB_USERNAME', 'dbi339805');
    define('DB_PASSWORD', '12345678');
    define('DB_DATABASE', 'dbi339805');
    $con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Failed to Connect to MySQL : ". mysqli_error());
    $db=mysqli_select_db($con,DB_DATABASE) or die("Failed to select to database: ". mysqli_error());

?>