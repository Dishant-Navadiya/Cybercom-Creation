<!doctype html>
<html lang="en">
  <?php 
    require_once "./masterpage/header.php";
    require_once "./connection/connection.php";
  ?>
  <body>
   <?php 
        if(isset($_POST['login'])) {
            
            $ErrMsg;
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) and !empty($password)){
                $obj = new Database();
                $response = $obj->FindOne($email,$password);
                if($response['status']===TRUE) {
                    $_SESSION['uid'] = $response['uid'];
                    header("location:blog-list.php");
                }
            }else {
                $ErrMsg = "Please Provide Valid information.";
            }

        }
    ?>
    <div class="container">
    <h1 class="mt-2">Login</h1>
    <form action="#" method="POST" class="row g-3" onsubmit="return validate();">
        <div class="col-md-12" id="err-msg">
        </div>
        <div class="col-md-12" id="err-msg">
        <?php 
             if(isset($ErrMsg)) {
                ?>
                    <div class="alert alert-success" role="alert">
                       <?php echo $ErrMsg; ?>
                    </div>
                <?php
            }
        ?>
        
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="jhondoe@example.com">
        </div>
        <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="********">
        </div>
        
        <div class="col-12">
            <button type="submit" name="login" class="btn btn-dark">Login</button>
            <a href="./register.php" class="btn btn-dark">Register</a>
        </div>
    </form>
    </div>
    <?php
        require_once "./masterpage/footer.php";
    ?>
  </body>
</html>