<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud_operations");


    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    
    if(!$connection){
        die("Connection Failed");
    }

?>











<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "crud_db";

// $conn = new mysqli($host, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
?>
