<?php

    //note that we have to write this function each and every page then and then we can set or unset the session variable.
    // mendatory.
    session_start();

    // if(isset($_SESSION['name'])) {
    //     echo $_SESSION['name'];
    // }
    //Using this method we can delete one only one session value at a time.
    unset($_SESSION['name']);


    //Using this method we can delete all session value at a time.
    session_destroy();
?>