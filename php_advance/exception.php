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

// try{
//     echo divide(6 , 0);
// }
// catch(Exception $e) {
//     echo "Unable to divide";
// }

//we can add finally statement to execute the final statement of our code . it will always be executed

// finally {
//     echo "\nProcess complete.";
//   }

  //there are several method we can use handling error

//   getMessage()	Returns a string describing why the exception was thrown
//   getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
//   getCode()	Returns the exception code
//   getFile()	Returns the full path of the file in which the exception was thrown
//   getLine()	Returns the line number of the line of code which threw the exception

// lets comment the above code 


try{
    echo divide( 6, 0 );
}
catch( Exception $ex){
    $err_code = $ex->getCode();
    $err_msg = $ex->getMessage();
    $err_line = $ex->getLine();

    echo "Exception thrown on line:" . $err_line . "\nError message : " . $err_msg; 
}