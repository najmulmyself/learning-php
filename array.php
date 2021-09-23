<?php
    // an array should look like this;

    $Array = array("john" , 12 , 18.54);
    // traversing an array;
    $x = count($Array); // it simply returns the number of elements in the array;

    for($i = 0; $i < $x ; $i++){

        // echo $Array[$i]."\n";
    }

    // Associative Array

    $Age = array(
        "peter" => 35,
        "john" => 25,
        "emily" => 21
    );

    // echo $Age["peter"]. "\n". $Age["john"]. "\n" . $Age["emily"];


    // traversing associative array

    // we cant find the expected result when traversing typical loop method 
    // rather we need to use foreach method to traverse associative array
    
    foreach($Age as $key => $valaue){
        echo $key. "=".$valaue."\n";
    }

    // we can use another method to traverse associative array

    // this is built in function in php array_keys()

    $keys = array_keys($Age);
    echo PHP_EOL;

    // echo $keys; // we can't echo here to print array;
    // we need to use print_r to print array

    print_r($keys);

    for($i= 0 ; $i < count($keys) ; $i++){
        $key = $keys[$i];
        echo $Age[$key]. "\n";
    }
?>