<?php
  
    trait phpLanguage{
        public function php(){
            echo "php is a programming language";
        }
        
    }

    trait javaLanguage{
        public function java(){
            echo "java is a programming language";
        }
        
    }

    class language{
        use phpLanguage;
        use javaLanguage;

    } 

   

    $ob=new language();
    $ob->php();
    echo "<br>";
    $ob->java();
?>

<!-- 
    1.treats means--akadhik trait class thekle ,,segula akta new child class a acess neya jai.
    2.amra 2 ti trait class nisi,,
    akn cacci 2 tike akti class a nite,,,sejonno amader 
    use   keyword likhe ,,trait class er nam dite hy.
    3.then object nibo child class theke,,
    then jei parent class k use korsi,,tar method k call korbo object dara
-->