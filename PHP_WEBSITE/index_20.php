<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index_20.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="">Age:</label><br>
        <input type="text" name="age"><br>
        <label for="">Email:</label><br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        // $username = $_POST["username"];
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Your email is {$email} <br>";
        echo "You are {$age} old <br>";
        echo "Hello {$username} <br>";
    }

    // use validation to check if the user has entered a valid email address

    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        if(empty($age)){
            echo "That number is not valid <br>";
        }
        else{
            echo "You are {$age} years old <br>";
        }
        // OR
        if(empty($email)){
            echo "That email is not valid <br>";
        }
        else{
            echo "You email is : {$email}<br>";
        }
    }
?>