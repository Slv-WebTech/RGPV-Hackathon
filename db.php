<?php

// database name hackathon
// for this import hackathon.sql file 

// if this does't work in your system try to change 
// localhost:3307  to  localhost

$conn = new mysqli("localhost:3307" , "root","","hackathon");
    if(!$conn){
        echo "This is an error ".$conn->connect_error;
    }
?>
