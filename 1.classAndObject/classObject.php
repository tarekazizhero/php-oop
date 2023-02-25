<?php
    class namePrint{
        public $name="aziz";
        public $age =26;

        function name(){
            return "php object oriented programming";

        }

    }

    $object=new namePrint();
    echo $object->name . "<br>";
    echo $object->age . "<br>";
    echo $object->name();

?>


<!-- 
    
  1. 1st a amra akta class nisi,,class er name namePrint.
  2. class er modde 2 ti topic add korsi 
  2.1.property disi variable akare,,bole disi ati public keyword
  2.2 method disi function akare ,,nam hosse name(),, and vitore value return korsi
  3. then amra class er baire property and method k acess korsi
  4. acess korte new keyword diye access korte hy ,, r class er namti bole dite hy namePrint(); ,,seti hye jai amader object .
  5.object k $object variable raksi ,,then class er vitorer 
  varible/property and function/method k echo korsi

->