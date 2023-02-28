  <?php
  
  class teacher{
        public $teacher;
        public $salary;
        public function __construct($t,$p){
           
            $this->teacher=$t;
            $this->salary=$p;
        }
          function info(){
            echo "teachers info:";
            echo "teachers: $this->teacher salary:  $this->salary";
          }
          
        }
    


 class headmaster extends teacher{
            
                public $extra=12000;
                
            
                function hinfo(){
                $this->extra +=$this->salary;
                echo "head master info:";
                echo "teachers: $this->teacher salary:   $this->extra";
              }
              
            }

 $teach=new teacher("alim:",20000);
 $teach->info();
echo "<br>";
$hteach=new headmaster("alim:",20000);
$hteach->hinfo();
    
  ?>

  <!--
            1. inheritence holo akti class k amra onnanno class thekeo acess korte parbo
            2.2nd class a amra aro extra kisu  add kore diyeci,,setao ager class er sathe inherit hyece 
  ->

