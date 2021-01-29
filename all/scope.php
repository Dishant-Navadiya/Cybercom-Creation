<?php 
    $string = "Dishant";

    function Scope(){
        global $string;     
        echo "My name is ".$string;
    }
    Scope();
?>