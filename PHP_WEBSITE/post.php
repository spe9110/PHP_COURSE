<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;
    
    // The abs() function returns the absolute (positive) value of a number.
    // $total = abs($x);

    // The round() function rounds a floating-point number.
    $total = round($x);
    
    // The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.
    $total = floor($x);

    // The ceil() function rounds a number UP to the nearest integer, if necessary.
    $total = ceil($x);

    // The pow() function returns x raised to the power of y.
    $total = pow($x, $y);

    // The sqrt() function returns the square root of a number.
    $total = sqrt($x);
    // The max() function returns the number with the highest value of two specified numbers.
    $total = max($x, $y, $z);
    // The min() function returns the number with the lowest value of two specified numbers.
    $total = min($x, $y, $z);
    // The pi() function returns the value of PI.
    $total = pi();
    // The rand() function generates a random integer.
    // $total = rand();
    $total = rand(1, 10);


    echo $total;


    echo(abs(6.7) . "<br>"); //output 6.7
    echo(abs(-6.7) . "<br>"); //output 6.7
    echo(abs(-3) . "<br>"); //output 3
    echo(abs(3)); //output 3
?>