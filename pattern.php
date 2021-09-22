<?php

for($i=1;$i<10;$i++){
    
    echo PHP_EOL;
    // echo "i: {$i}";
    
    for($j=0;$j<$i;$j++){
        echo "*";
        // echo "j : {$j}";
    }
    // echo "iins: {$i}";
    // echo "jins: {$j}";
}
// echo PHP_EOL;
// echo "iout: {$i}";
// echo "jout: {$j}";


/*
Undersanding Pattern:

first i = 1 then it will go for second loop . 

j = 0 and it matches the condition and will print * then 
j will increment its number to 1:
the condition of the second loop will not match the condition ( j=1 === i=1):
it will go out of the second loop and increment the i number to i = 2;

then second loop will continues and its print * in second line and continues incrementing j value of 0 to 1
and will print the * for the second time;
then it will increment its number to j=2 ; then the condition wont match ( j=2 === i=2);

loop continues this way
 */