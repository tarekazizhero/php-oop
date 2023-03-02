<?php
   interface youtubeChannel{    //interface korle ,,class na likhe interface likte hy

        public function makeVedio();  //akane sudu method declare korsi,,implements korbo  onnoo jekono class a

   }

   class tv implements youtubeChannel{   //akane parent claass k implement korteci,,sejonno extends na likhe ,,implements keyword likte hy
    public  function makeVedio(){        //parent class a j method ti nisilam,,seti akane diye,,implemnet korte parbo
        return "my youtube channel";
    }

   }

   class computer  implements youtubeChannel{
    public function makeVedio(){
        return "my computer setup";
    }
   }

//    $obtv= new tv();
//    $obtv->makeVedio();
//    echo "<br>";
//    $obcom=new computer();
//    $obcom->makeVedio();  //avabe object akti akti na kore amra ,,array er madhhome aksathe korte pari

$obtv= new tv();
$obcom=new computer();

$data = array($obtv,$obcom);
foreach ($data as $value) {
       echo $value->makeVedio() .  "<br>";
}


?>

<!-- 
    1.interface means --akti class nilam,,akn cacci oi class a implement na kore,,
    onno class er ,,implement korbo,,tahole amader interface keyword bebohar korte hba    
   2.interface a propertice neya jai na
   2.acesss modifier sudu public neya jai,,,protected,private are not allowed

    ->