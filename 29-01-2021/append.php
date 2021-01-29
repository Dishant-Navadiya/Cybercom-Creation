<?php 
    $handler = fopen('names.txt','a');

    fwrite($handler,"Meet\n");

    fclose($handler);

?>