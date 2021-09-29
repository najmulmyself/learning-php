<?php

class Classname{
    public $name;

    // function __construct($name){
    //     this->name = $name;
    // }
    // function welcome(){
    //     echo "Welcome to " . "this->$name";
    // }

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$testclass = new Classname();

echo $testclass->set_name('Najmul');
echo $testclass->get_name();