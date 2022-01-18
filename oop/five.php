<?php
     //parent class
    class Cars{
       
        public $color="red";
        function forword(){
            return "forword going on <br>";
        }

        function backword(){
            return "backword going on <br>";
        }
    }

     //child class
    class Tesla extends Cars{
       function flying(){
           return "telsa is flying";
       }
       function backword(){
           return"tesla backword going<br>";
       }
    }

    class Teslabd extends Tesla{

    }


    $obj = new Tesla;
    //echo $obj->backword();
    //echo $obj->color;
    echo $obj->backword();

    $teslabd = new Teslabd;
     echo $teslabd->forword();
    
?>