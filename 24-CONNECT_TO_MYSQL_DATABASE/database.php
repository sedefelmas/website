<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "businessdb";
    $connection = "";

    try{
         $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect<br>";
    }
   
    // if($connection){
    //     echo "you are connected<br>";
    // }
?>