<?php
  abstract class Cars{
    abstract function go();
    }
    class Tesla extends Cars{
       function go(){
            return"we are going on";
        }
    }

    $tesla = new Tesla;
    echo $tesla->go();
?>