<?php 
    $handler = fopen('names.txt','w');
    fwrite($handler,"Dishant\n");
    fwrite($handler,"Ayush\n");
    fwrite($handler,"Dharmik\n");
    fwrite($handler,"Manav\n");
    fwrite($handler,"Keval\n");
    fclose($handler);
?>