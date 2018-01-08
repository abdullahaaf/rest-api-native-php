<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','restapi');
    
    $connection = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connnect');
    date_default_timezone_set('Asia/Jakarta');
?>