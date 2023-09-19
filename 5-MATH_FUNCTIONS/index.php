<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <br>
        <label>y:</label>
        <input type="text" name="y">
        <br>
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form> -->
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <br>
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(1,10);
    $radius = $_POST["radius"];
    $delimeter = null;
    $area = null;
    $volume = null;
    $delimeter = $radius * 2 * pi();
    $delimeter = round($delimeter, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);




    echo "Circumference = {$delimeter}cm <br>";
    echo "Area = {$area}cm^2<br>";
    echo "Volume = {$volume}cm^3<br>";
?>