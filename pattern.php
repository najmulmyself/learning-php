<?php

for($i=1;$i<10;$i++){
    
    echo PHP_EOL;
    echo "i: {$i}";
    
    for($j=0;$j<$i;$j++){
        echo "*";
        echo "j : {$j}";
    }
    echo "iins: {$i}";
    echo "jins: {$j}";
}
echo PHP_EOL;
echo "iout: {$i}";
echo "jout: {$j}";

