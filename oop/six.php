<?php
     //parent class
    class Cars{
       
        protected $color="red";
        function forword(){
            return "forword going on <br>";
        }

        function backword(){
            return "backword going on <br>";
        }
    }

     //child class
    class Tesla extends Cars{
       function colorname(){
           return $this->color;
       }
       function tesla(){
           return "tesla is flying sky";
       }
    }

    $obj = new Tesla;
    //echo $obj->colorname();

    $tesla = new Tesla;
    echo $tesla->tesla();

    
?>