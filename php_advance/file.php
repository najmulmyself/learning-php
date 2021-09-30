<?php

// echo readfile("./test.txt");

// there's a better method to handle a file 

$file = fopen("./test.txt", "r") or die("Can't open file'");

echo fread($file,filesize("test.txt"));

fclose($file);

?>