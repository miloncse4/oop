<?php
//class
      class Cars{
            //magic method
        function __construct(){
            echo "hi<br>";
        }
          //method
        function forword(){
            echo"Moving forword<br>";
        }

        function backword($name = "default"){
            return "$name is moving reverse<br>";
        }
      //magic method
      function __destruct(){
          echo "by<br>";
      }
        
    }
    //object
    $toyota = new Cars;
    //accasor
   echo $toyota->backword('toyota');
   $bmw = new Cars;
?>