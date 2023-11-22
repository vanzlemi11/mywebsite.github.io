<?php

$server    = "localhost";

$username  = "root";

$password  = "";

$database  = "db_promosale";

$connection = mysqli_connect($server, $username, $password, $database);
if($connection){
    echo "Database connection was successfull";    
}else{
    echo "Database connection not successfull " . mysqli_error($connection);
    die($connection);
}


try{
    throw new Exception("");
}catch(Exception $errormsg){
    echo $errormsg->getmessage();
}


/* ============== CRUD =========== */ 




?> 