<?php 
    $server = "10.0.0.228"; 
    $user = "orin"; 
    $password = "Anindhita!07"; 
    $nama_database = "dbpus"; 

    $db = mysqli_connect($server, $user, $password, $nama_database); 
    if( !$db ) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error()); 
    }
?>