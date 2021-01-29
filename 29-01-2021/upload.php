<?php 
    if(isset($_POST['upload'])) {
        $name = $_FILES['file']['name'];
        $from = $_FILES['file']['tmp_name'];
        $maxSize = 200000;
        $fileSize = $_FILES['file']['size'];
        // This logic is for getting extension name;
        //we used string function to get the result;
        $fileExtention = substr($name,strpos($name,".")+1);
       
        echo $fileExtention;
        if($fileSize <= $maxSize) {
            if(move_uploaded_file($from,'uploads/'.$name)){
                echo "Files uploads successfully";
            }
        }else {
            echo "Please uploads file under $maxSize";
        }
        print_r($_FILES['file']);

        
    }
?>
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <button type="submit" name="upload">Upload</button>
</form>