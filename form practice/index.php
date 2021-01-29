<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Form</title>
  </head>
  <body>
    <?php 

      $nameErr = $emailErr= $timeErr = $subjectsErr = $genderErr= $des = $subjectErr = "";
      $name = $email =$time = $sub = $gender = $subjects ="";
      if($_SERVER['REQUEST_METHOD']=="POST"){
        
        if(empty($_POST['name'])) {
          $nameErr = "Name is require";
        }else {
          $name = input($_POST['name']);
        }

        if(empty($_POST['email'])) {
          $emailErr = "Email is require";
        }else {

          $email = input($_POST['email']);
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter correct email";
          }
        }

        if(empty($_POST['description'])) {
          $des ="";
        }else {
          $des = $_POST['description'];
        }
        if(empty($_POST['time'])) {
          $timeErr = "time is require";
        }else {
          $time = input($_POST['name']);
        }

    

        if(empty($_POST['Subjects'])) {
          $subjectsErr = "Subjects is require";
        }else {
          $subjects = input($_POST['Subjects']);
        }

        if(empty($_POST['gender'])) {
          $genderErr = "gender is require";
        }else {
          $gender = input($_POST['gender']);
        }
      }

      if (empty($_POST["subjects"])) {
        $subjectErr = "You must select 1 or more";
     }else {
        $subject = $_POST["subjects"];	
     }
      function input($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
     }
    ?>
    <h1>This is a form that contains all the input controls.</h1>
    <table>
      <form action="#" method="POST">
        <tr>
          <td>Name:</td>
          <td>
            <input type="text" name="name" />
            <span class = "error">* <?php echo $nameErr;?></span>
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
            <input type="email" name="email" />
            <span class = "error">* <?php echo $emailErr;?></span>
          </td>
        </tr>
        <tr>
          <td>Time:</td>
          <td>
            <input type="date" name="time" />
            <span class = "error">* <?php echo $timeErr;?></span>
          </td>
        </tr>
        <tr>
          <td>Description:</td>
          <td>
            <textarea name="description" cols="10" rows="10"></textarea>
            <span class = "error">* <?php echo $descriptionErr;?></span>
          </td>
        </tr>
        <tr>
          <td>Subjects:</td>
          <td>
            <select name="subjects[]" multiple size="6">
              <option value="">Select-Subjects</option>
              <option value="c">c</option>
              <option value="c++">c++</option>
              <option value="java">Java</option>
              <option value="php">php</option>
              <option value=".net">.net</option>
            </select>
            
          </td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" value="male" />male
            <input type="radio" name="gender" value="female" />female
            <span class = "error">* <?php echo $genderErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" name="terms" value="1" />
          </td>
          <td>I agree.

          <?php if(!isset($_POST['terms'])){ ?>
               <span class = "error">* <?php echo "You must agree to terms";?></span>
          <?php } ?> 
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="submit">Submit</button>
          </td>
        </tr>
      </form>

      <?php
         echo "<h2>These are the form valus.</h2>";
         echo "<p>Your name is $name</p>";
         echo "<p> your email address is $email</p>";
         echo "<p>Your class time at $des</p>";
         echo ("<p>your gender is $gender</p>");
         
         for($i = 0; $i < count($subjects); $i++) {
            echo($subjects[$i] . " ");
         }
      ?>  
    </table>
  </body>
</html>
