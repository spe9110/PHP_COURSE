<?php
    include("database_27.php");

    $sql = "SELECT * FROM users WHERE user = 'Spencer'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // This code will output : No user found
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    else{
        echo "No user found";
    }
    mysqli_close($conn)




    // OR

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // This code will output : No user found
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        };
        
    }
    else{
        echo "No user found";
    }
    mysqli_close($conn)
?>