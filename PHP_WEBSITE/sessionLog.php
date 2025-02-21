<?php

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
    This is the Home page
    <form action="sessionLog.php" method="post">
        <input type="text" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    // $_SESSION['username'] = "Spencer";
    // $_SESSION["password"] = "123aaa";

    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: session_23.php");
        exit;
    }
?>