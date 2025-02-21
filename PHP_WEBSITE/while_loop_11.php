
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while_loop_11.php" method="post">
        <label>stop:</label>
        <input type="text" name="stop">
    </form>
</body>
</html>
<?php
    // while loop is very similar to a for loop
    // while loop = do some code infinitely while some condition remains true
    // The while loop executes a block of code as long as the specified condition is true.

    $counter = 0;
    while($counter <= 10){
        $counter++;
        echo "The number is: $counter . <br>";
    }

    $second = 0;
    $running = true;

    while($running){
        // wait 1 second
        $second++;
        echo "The second is: $second . <br>";
        if($second == 10){
            $running = false;
        }

        // OR
        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            $second++;
            echo "The second is: $second . <br>";
        }
    }
?>