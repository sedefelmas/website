<?php
    $username = "Bro The Code";
    $username_array = array("Bro", "The", "Code");
    $phone_number = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, 0);
    // $username = str_replace("-", " ", $phone_number);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equal = strcmp($username, "Bro Code");
    // $count = strlen($username);
    // $index = strpos($username, " ");
    // $firstname = substr($username,0, 3);
    // $lastname = substr($username, 4);
    // $fullname = explode(" ", $username);
    // foreach($fullname as $name){
    //     echo $name."<br>";
    // }
    $username_array = implode(" ", $username_array);
    echo $username_array;

    





?>