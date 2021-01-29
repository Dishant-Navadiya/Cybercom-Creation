<?php 
    $handler = fopen("names.txt","r");
    $fileSize = filesize('names.txt');
    $gettingValue = fread($handler,$fileSize);
    echo $gettingValue;
?>