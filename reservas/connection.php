<?php

    $database= new mysqli("localhost","root","","deporteencordoba");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>