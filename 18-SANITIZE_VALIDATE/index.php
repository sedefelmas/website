<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>username: </label>
    <br>
    <input type="text" name="username">
    <br>
    <label>age: </label>
    <br>
    <input type="text" name="age">
    <br>
    <label>email: </label>
    <br>
    <input type="text" name="email">
    <br>
    <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            echo "That email wasn't valid";
        }
        else{
            echo "Your email is {$email}";
        }
    } 
    // if(isset($_POST["login"])){
    //     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    //     // <script> alert("You have a VIRUS!");</script>
    //     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    //     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    //     echo $email;
    // } 







?>