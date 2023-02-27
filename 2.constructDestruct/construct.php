<?php
    class employee{
        public $name;
        public $salary;

        function __construct($n="enter name",$s="enter salary"){   
            $this->name=$n;
            $this->salary=$s;
        }

        function info(){
            echo $this->name . "=" . $this->salary . "<br>";
        }


    }

    $person = new employee("aziz", 20200);
    $person->info();
    $person = new employee();
    $person->info();
?>

<!-- 
    1. we know,,normally function k call korte hy ,,,kintu construct function k call korte hy na ,,ati object create er sathe sathe nije call hye jai
    2.construct a parameter 2 ta nisi $n,$s ,,akane tokn e value ta asbe ,,jokn amra class object er parameter a  bole dei tokn
    3. object parameter a user konokisu na dile,,construct paramtera amra default value set kore diyeci,,jate defult value ti user dekte pai.
    4. then info() function a asbe and seti echo korbe ,,tokn e echo korbe ,,jokn amra class er baire info() function tike call korbo   

->