<?php
    // session  = SGB used to store information on a user to be used accross multiple pages. A user is assigned a session-id, 
    // ex. login credentials

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is the login page
    <a href="sessionLog.php">This goes to the home page</a> -->

    <form action="session_23.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php
    $_SESSION['username'] = "Spencer";
    $_SESSION["password"] = "123aaa";

    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";

?>