<?php
//class
      class Cars{
           //properties
        public $color = "";
        public $doors = "";
            //magic method
        function __construct($given_color = "blue" ,$given_doors = 4 ){
            $this->color = $given_color;
            $this->doors = $given_doors;
        }
       
          //method
        function forword(){
            echo"Moving forword<br>";
        }

        function backword($name = "default"){
            return "$this->color $name with $this->doors is moving reverse<br>";
        }
      //magic method
      function __destruct(){
          echo "by<br>";
      }
        
    }
    //object
    $toyota = new Cars('orange');
    //accasor
   echo $toyota->backword('toyota');
   $bmw = new Cars('yellow');
   echo $bmw->backword('bmw');
?>