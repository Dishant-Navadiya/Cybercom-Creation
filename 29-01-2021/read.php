<?php 
    $names = file('names.txt');

    // print_r($names);
    $length = count($names)-1;
    $counter = 0;
    foreach($names as $name) {
        echo "$name";
        if($counter<$length) {
            echo ", ";
        }
        $counter++;
    }

?>