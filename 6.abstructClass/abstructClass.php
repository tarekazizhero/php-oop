<?php
    abstract class  teacher{     //akti abstruct class nisi
        public $student;
        public function __construct($s){    // abstruct class a akti functio o nisi
            $this->student=$s;
        }
        abstract public function subteacher();  //atir kono kaj nei ,,child funcftion a kaj korar jonno ,,just daclare korsi,,ati abstruct cilo

    }

    class headteacher extends teacher{         //child class
        public function subteacher(){          //parent class er declarable function  
            return "thanks for watching my " . $this->student . " tuitorial";
        }

    }
    $ob= new headteacher("school"); //object create
    echo  $ob->subteacher();        //child class k echo korsi
?>


<!--
    1. abstruct class er mane holo,,akti class arekti cloass er inherit cara object run kora somvob na 
     
->