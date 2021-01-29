<?php
    include('temp.php') ;
    require('temp.php');

    // if required file does not exits then include will load the current files.

    // if required file does not exits then require will not load the current files.
    

    include_once 'temp.php';
    require_once 'temp.php';

   
    echo "$includes"."<br/>";
    echo "$requires";
    
?>