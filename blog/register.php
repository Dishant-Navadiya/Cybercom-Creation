<!doctype html>
<html lang="en">
  <?php 
    require_once "./masterpage/header.php";
    require_once "./connection/connection.php";
  ?>
  <body>
   <?php 
        if(isset($_POST['register'])) {
            
            $ErrMsg;
            $prefix = $_POST['prefix'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $information = $_POST['information'];

            if(!empty($prefix) and !empty($firstName) and !empty($lastName) and !empty($email) and
               !empty($mobile) and !empty($password) and !empty($confirmPassword) and !empty($information)
            ){
                $obj = new Database();
                $response = $obj->Insert($prefix,$firstName,$lastName,$mobile,$email,$password,$information);
            }else {
                $ErrMsg = "Please Provide Valid information.";
            }

        }
    ?>
    <div class="container">
    <h1 class="mt-2">Register</h1>
    <form action="#" method="POST" class="row g-3" onsubmit="return validate();">
        <div class="col-md-12" id="err-msg">
        </div>
        <div class="col-md-12" id="err-msg">
        <?php 
            if(isset($response)) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $response; ?>
                    </div>
                <?php
            }else if(isset($ErrMsg)) {
                ?>
                    <div class="alert alert-success" role="alert">
                       <?php echo $ErrMsg; ?>
                    </div>
                <?php
            }
        ?>
        
        </div>
        <div class="col-md-12">
            <select class="form-select" aria-label="Default select example" name="prefix">
                <option selected value="">Prefix</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
        </div>
        <div class="col-md-12">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com">
        </div>
        <div class="col-md-12">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="7894561234">
        </div>
        <div class="col-md-12">
            <label for="password" class="form-label">password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="********">
        </div>
        <div class="col-md-12">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="********">
        </div>
        <div class="col-md-12">
            <label for="information">Information</label>
            <textarea class="form-control" id="information"  name="information" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">Hereby, I Accept Terms & Conditions.</label>
        </div>
        <div class="col-12">
            <button type="submit" name="register" class="btn btn-dark">Register</button>
        </div>
    </form>
    </div>
    <script src="./js/app.js"></script>
    <?php
        require_once "./masterpage/footer.php";
    ?>
  </body>
</html>