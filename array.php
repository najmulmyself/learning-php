<?php
    // an array should look like this;

    $Array = array("john" , 12 , 18.54);
    // traversing an array;
    $x = count($Array); // it simply returns the number of elements in the array;

    for($i = 0; $i < $x ; $i++){

        echo $Array[$i]."\n";
    }

    // Associative Array

    $Age = array(
        "peter" => 35,
        "john" => 25,
        "emily" => 21
    );

    echo $Age["peter"]. "\n". $Age["john"]. "\n" . $Age["emily"];
?>