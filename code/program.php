<?php 
    $String = " this This is an example of string this functions..";
    $find = "this";
    $needsToReplace = "";

    $offSet = 0;    
    $length = strlen($find);
    // echo $pos = strpos($String,$find,$offSet);
    while($pos = strpos($String,$find,$offSet)) {
        $offSet = $pos + $length;
        $String  =  substr_replace($String,$needsToReplace,$pos,$length);
    }
    echo $String;
?>