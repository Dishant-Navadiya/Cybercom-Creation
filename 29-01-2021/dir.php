<?php 
    // $handler = opendir('testToday'.'/');

    // while($getFile = readdir($handler)) {
    //     if($getFile!="." &&  $getFile!="..") {
    //         echo $getFile."<br>";
    //     } 
    // }
    // if(file_exists('testToday')) {  
    //         echo "Hey this folder is exits";
    // }

    //This function is for delete file in current directory.
    // if(unlink('del.php')) {
    //     echo "File has been deleted";
    // }

    //This function is for renaming file name.
    if(rename('ie.php',"implodeExplode.php")) {
        echo "File name is changed";
    }
?>