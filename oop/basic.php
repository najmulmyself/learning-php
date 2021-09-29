<?php

class Classname{
    public $name;

    function __construct($name){
        this->name = $name;
    }
    function welcome(){
        echo "Welcome to " . "this->$name";
    }
}