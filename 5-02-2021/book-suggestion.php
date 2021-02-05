<?php
    $bookList = array("James Joyce"," One Hundred Years of Solitude"," Moby Dick");
    $name = $_GET['bookName'];
    if($name !== ""){
        foreach($bookList as $book) {
            if(strpos($book,$name)!==false) {
                echo "$book";
                break;
            }
        }
    }
?>