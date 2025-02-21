<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for_loop_10.php" method="post">
        <label for="">Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="Start">
    </form>
</body>
</html>


<?php

    $counter = $_POST["counter"];
    // increment the counter
    for($i = 0; $i <= $counter; $i++){
        echo "The number is: $i . <br>";
    }
    // decrement the counter
    for($i = 0; $i <= $counter; $i--){
        echo "The number is: $i . <br>";
    }
    // for loop = repeat some code a certain number of times

    for($i = 0; $i < 5; $i++){
        echo "The number is: $i . <br>";
    }

    // The increment will start from 2
    for($i = 2; $i < 5; $i+=2){
        echo "The number is: $i . <br>";
    }

    // The increment by 3
    for($i = 0; $i < 5; $i+=3){
        echo "The number is: $i . <br>";
    }

    // The decrement by 1
    for($i = 5; $i > 0; $i--){
        echo "The number is: $i . <br>";
    }
    // The decrement by 2
    for($i = 10; $i > 0; $i-=2){
        echo "The number is: $i . <br>";
    }
?>