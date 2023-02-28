<?php
    class fruit{
        public $name;
        public $color;
        public $weight;


        function set_name($m){
            $this->name=$m;
            echo $this->name . "<br>";

        }

        protected function set_color($m){
            $this->color=$m;
            echo $this->color . "<br>";

        }

        private function set_weight($m){
            $this->weight=$m;
            echo $this->weight;

        }





    }
    $mango= new fruit();

    $mango->set_name("mango");  //ok print  ,,,public means,, anywhere in acces 
    $mango->set_color("yellow");  // error ,,,protected means ,, only access class ,,base class ,,derived class also acess
    $mango->set_weight("100gm");  //error  ,,only acess one class,,mane je class a thakbe ,,se class ei sudu acess korte parbe.
?>