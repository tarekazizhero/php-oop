<?php
    abstract class A{
        protected $name;

        abstract protected function show($b,$c);
    }

    class B extends A{
        public function show($b,$c){
            echo $b;
            echo "<br>";
            echo "tarek aziz";
            echo "<br>";
            echo $b+$c;
          
        }
    }

    $ob=new B();
    $ob->show(10,5);
    
?>

<!-- 
    1. abstract class k object a declare kopr jai na
    2.ajopnno take inherit er help nite hy
    3.ukto parent class a protectected use korsi,,security baranor jonn
    4. kintu protected k to abar object kora jai na
    5.tai amra protected k  child  class a public kore niyeci
    6.parent class a abstract k ,,function a abstract function hisebe declare kore diyecilam 
->