<?php
    class Cars{
        function forword(){
            echo"Moving forword<br>";
        }

        function backword($name = "default"){
            return "$name is moving reverse<br>";
        }
        
    }

    $obj = new Cars;
   // $obj->forword();
    echo $obj->backword();

    $toyota = new Cars;
    echo $toyota->backword('toyota');
?>