<?php
    // Associative arrays are arrays that use named keys that you assign to them.
    // Associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA" => "Washington", 
                        "UK" => "London", 
                        "France" => "Paris", 
                        "Germany" => "Berlin");

    // echo $capitals["USA"] . "<br>";
    $capitals["USA"] = "New York";

    // to add a new element to the array
    $capitals["Italy"] = "Rome";

    // to remove an element from the array
    array_pop($capitals);
    // array_shift($capitals); // removes the first element
    array_shift($capitals);
    

    // to display all the elements in the array
    foreach($capitals as $country => $capital){
        echo "The capital of {$country} is {$capital}<br>";
    }

    // the keys of the array 
    $keys = array_keys($capitals);
    foreach($keys as $key){
        echo "{$key} <br>";
    }

    // the values of the array
    $values = array_values($capitals);

    foreach($values as $value){
        echo "{$value} <br>";
    }
?>