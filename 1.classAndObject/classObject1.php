<?php
   class person{

    public $name;
    public $age ="34";
    public  $address="dhaka";

     function male(){
        $this->dress="t-shirt"; //funtion er vitore variable hisebe kisu bebohar korle $this-> bebophar korte hy.
        return $this->dress;

    }

    function famale($fdress){  //funtion er vitore parameter niyeo amra class er baire call korte pari

        $this->dress=$fdress;
        return $this->dress;
    }

     function common($fdress,$gdress,$hdress){
        $this->name=$fdress;
        $this->age=$gdress;
        $this->address=$hdress;

         return $this->name . $this->age .  $this->address;
     }


 }

$ob=new person();

$ob->name="aziz is";
echo $ob->name; //function class er baire $this-> proyojon hy na,,simple object er nam diyei kora jai.


echo $ob->age; 


echo $ob->address;

 
echo $ob->male();

echo $ob->famale("borkha");

echo "<br>";
echo $ob->common("sari", "makeup","full");

?>