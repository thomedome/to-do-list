<?php
    $env = parse_ini_file('.env');

    $hostname = $env['db_hostname'];
    $user = $env['db_name'];
    $password = $env['db_pass'];
    $database = $env['db_db'];
    
    $con = mysqli_connect($hostname, $user, $password, $database);
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL:" . mysqli_connect_error());
    }
?>
