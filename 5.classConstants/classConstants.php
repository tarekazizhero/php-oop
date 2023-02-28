
<?php
    class goodIdea{
        const MY_MESSAGE = "self learn is the best learn";  //class constants hosse ,, case sensative

    }

    echo goodIdea::MY_MESSAGE;  //  ::  means scope resulation operator
    //class const a amra scope resulation operator er help niye ,,class er baire amra direct run korte pari 

echo "<br>";


    class goodness{
        const MY_MESSAGE1="yes self learn is the best learn";
        public function messege1(){
          return self::MY_MESSAGE1;   //akane sudu const k function a use korle self keyword bebohar korte hy
        }
    }
    $goodness= new goodness();
    echo $goodness->messege1();


?>
<!-- jodi amra const k function a niye kaj korte cai ,,tahole 
amader self keyword extra use korte hba  ->




