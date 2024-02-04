<?php 
    Class MyClass{
        public $x, $y, $z;

        public function __construct($a, $b){
            $this->x = $a;
            $this->y = $b;
        }

        //public function mysum(){
        //     $this->z = $this->x + $this->y;
        //     return $this->z;
        // }
    }
     $mini = new MyClass(200,250);
    //  $mini->x = 100;
    //  $mini->y = 120;

     echo $mini->mysum();

?>