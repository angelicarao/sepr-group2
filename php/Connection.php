<?php
    define('DB_SERVER', 'studmysql01.fhict.local');
    define('DB_USERNAME', 'dbi334307');
    define('DB_PASSWORD', '12345678');
    define('DB_DATABASE', 'dbi334307');
    $con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Failed to Connect to MySQL : ". mysql_error());
    $db=mysql_select_db(DB_DATABASE,$con) or die("Failed to connect to MySQL: ". mysql_error());

?>