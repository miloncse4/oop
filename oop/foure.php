<?php
    class Cars{
        public $color = "red";
        function toyota(){
            return "$this->color Move forword toyota";
        }
    }

    $obj = new Cars;
    $obj->color;
    echo $obj->toyota();
?>