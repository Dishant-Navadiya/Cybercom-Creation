<?php 
    require_once '../connection/connection.php';
    session_start();
    if(isset($_SESSION['name'])) {
      header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="./custom.js" defer></script>
  </head>
  <body>
  <div class="container col-md-6">
  <?php 
        if(isset($_POST['login'])) {
          if(empty($_POST['email'])) {
              echo "Email is required";  
          }else if(empty($_POST['password'])) {
              echo "Password is required";  
          }else {

            $email=$conn->real_escape_string($_REQUEST['email']);
            $password=$conn->real_escape_string($_REQUEST['password']);
            
            $check=$conn->query("select * from signup where email like '$email' and password like '$password'");
            $fstudent= mysqli_fetch_array($check);
            
            if($fstudent[0]==""){
              
              echo "Invalid credentials";
              
            } else {
              
              $_SESSION['name']=$fstudent[0];
              header("location:home.php");
            
            }
            ?>
        <table class="table container mt-2">
          <thead>
            <tr>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
              <td>
                    <?php echo $email; ?>
              </td>
              <td>
                    <?php echo $password; ?>
              </td>
              
          </tbody>
        </table>
    <?php
      }
    }
    ?>
      <h1 class="mt-4">Contact us!</h1>
      <div class="alert-danger" role="alert" id="err-msg">
      </div>
      <form action="#" method="POST" onsubmit="return validation();">
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">Email</label>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="mail@address.com"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            id="password"
            placeholder="**********"
          />
        </div>
        <div class=" mt-4">
          <button class="btn btn-primary" type="submit" name="login">Sign In</button>
        </div>
      </form>
    </div>
    
  </body>
</html>
