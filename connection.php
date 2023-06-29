<?php

function initConnectionDb(){
    $db_host="localhost"; //localhost server 
    $db_user="root";	//database username
    $db_password="";	//database password   
    $db_name="bbdd";	//database name

    $mysqli = @new mysqli($db_host,$db_user,$db_password, $db_name);

    if($mysqli -> connect_error) {
        die('Error: '.$mysqli->connect_error);
    }

    return $mysqli;
    
} 

?>