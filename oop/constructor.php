<?php 

    class Fruit{
        public $name;
        public $color;
        public $price;

        function __construct($name, $color, $price){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        function get_name(){
            echo " Price: $this->price  for $this->name"; ;
        }
    }

    $apple = new Fruit('Apple' , 'red' , 15);

    echo $apple;

?>