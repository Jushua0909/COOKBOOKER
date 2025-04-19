<?php

function create_connection(){
    $host= "localhost";
    $username="root";
    $password="";
    $database="cookerbook";
    
    return new mysqli($host, $username, $password, $database);
    
     
}