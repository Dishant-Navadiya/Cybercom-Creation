<?php 
    $age = 16;
    try{
        if($age>18) {
            echo "old enough.";
        }else {
            throw new Exception ('Not old enough.<br>');
        }
    }catch(Exception $ex){
        echo 'Error:'.$ex->getMessage();
    }

    //Second Example
    // function numberCheck($num) {  
    //     if($num>=1) {  
    //       throw new Exception("Value must be less than 1");  
    //     }  
    //     return true;  
    //  } 
    //  try {  
    //     numberCheck(0);  
    //     echo 'This text will going to show if the user enter number less than 1';  
    //  }  
    //  catch (Exception $e) {  
    //     echo 'Exception Message: ' .$e->getMessage();  
    //  }   

     //Custom error handling

     class customException extends Exception {
        public function errorMessage() {
          $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
          return $errorMsg;
        }
      }
      
      $email = "someone@example.com";

      try {
        //This function verifies the email address
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //if this condition is goining to true than its throwing exception.
        //this current email that is not valid is going to pass in a constructer.
        throw new customException($email);
        }
        
        if(strpos($email, "example") !== FALSE) {
          throw new Exception("$email is an example e-mail");
        }
      }
      
      catch (customException $e) {
        echo $e->errorMessage();
      }
      
      catch(Exception $e) {
        echo $e->getMessage();
      }
?>