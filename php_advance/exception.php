<?php

function divide($a, $b){
    if($b === 0 ){
        throw new Exception("Division by zero");
    }
    return $a / $b;
}

// echo divide(6 , 0); // lets comment it out for try exception

// if we execute the following code will get an error message | it will fatal error 

// to stop showing this error message need to use try catch statement

// try{
//     code that can throw exceptions
// } catch(Exception $e) {
//   code that runs when an exception is caught
// }

try{
    echo divide(6 , 0);
}
catch(Exception $e) {
    echo "Unable to divide";
}

//we can add finally statement to execute the final statement of our code . it will always be executed

finally {
    echo "\nProcess complete.";
  }