<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fetch_data.php" method="get"> 
        <!-- you can use post method  -->
        <label for="username">username:</label>
        <input type="text" name="username" id="username">
        <label for="password">password:</label>
        <input type="password" name="password" id="username">
        <input type="submit" value="Log in">
    </form>
    
    <!-- form for a restaurant -->
     <form action="fetch_data.php" method="post">
        <label for="quantity">quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
     </form>
</body>
</html>

<?php
    echo $_GET["username"];
    echo $_GET["password"];

    // or

    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";
?>