<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>



<?php
    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Kyoto",
        "South Korea" => "Seoul",
        "India" => "New Delhi");
    $capital = $capitals[$_POST["country"]];
    
    echo "The capital is {$capital}.";
    
    
    
    // $capitals["Japan"] = "Tokyo"; //değiştirmek için
    // $capitals["China"] = "Beijing"; //Eklemek için
    // array_pop($capitals); //Çıkarmak için
    // $keys = array_keys($capitals); //key değerlerini bulmak için
    // $values = array_values($capitals); // value değerlerini bulmak için
    // $capitals_flip = array_flip($capitals); // key ve value değerlerinin yerlerini değiştirmek için

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
?>