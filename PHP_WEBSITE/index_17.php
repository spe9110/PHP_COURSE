<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index_17.php" method="POST">
        <!-- <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br> -->
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
        echo "You selected Pizza<br>";
    }
    if(isset($_POST["hamburger"])){
        echo "You selected Hamburger<br>";
    }
    if(isset($_POST["hotdog"])){
        echo "You selected Hotdog<br>";
    }
    if(isset($_POST["taco"])){
        echo "You selected Taco<br>";
    }
    if(empty($_POST["pizza"])){
        echo "Yout don't like Pizza<br>";
    }
    if(empty($_POST["hamburger"])){
        echo "You don't like Hamburger<br>";
    }
    if(empty($_POST["hotdog"])){
        echo "You don't like Hotdog<br>";
    }
    if(empty($_POST["taco"])){
        echo "You don't like Taco<br>";
    }
}


// foods example

if(isset($_POST["submit"])){
    $foods = $_POST["foods"];
    echo $foods[0];
}

?>