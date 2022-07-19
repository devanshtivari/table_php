<?php
    
    // servername => localhost
    // username => root
    // password => empty
    // database name => mlag
    $conn = mysqli_connect("localhost", "root", "", "mlag");
    
    // Check connection
    if($conn == false){
        die("ERROR: Could not connect.". mysqli_connect_error());
    }

?>