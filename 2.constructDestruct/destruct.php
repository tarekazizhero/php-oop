<?php
    class fruit 
    {
        public $name;
        public $color;

        function __construct($n,$c){
            $this->name=$n;
            $this->color=$c;
        }
         function __destruct(){
            echo "the fruit is  " . $this->name. "and color is  " . $this->color;

         }


    }

    new fruit("apple", "red");
    
?>

<!-- 
    1. constructor/destructor function er kaj e holo ,,,auto call kora.
    tai objkect declare korei ami run korte pereci
->

<!- output =
        the fruit is appleand color is red
->