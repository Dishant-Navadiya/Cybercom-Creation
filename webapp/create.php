<!doctype html>
<html lang="en">
  <?php 
    require_once "./header.php";
    require_once "./connection/connection.php";
  ?>
  <body>
   <?php
    require_once "./navbar.php";
   ?>
   <?php 
        if(isset($_POST['insert'])) {
            $ErrMsg;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $title = $_POST['title'];
            $date = $_POST['created'];

            if(!empty($name) and !empty($email) and !empty($phone) and !empty($title)){
                $obj = new Database();
                $response = $obj->Insert($name,$email,$phone,$title,$date);
            }else {
                $ErrMsg = "Please Provide Valid information.";
            }

        }
    ?>
    <div class="container">
    <h1 class="mt-2">Create Contact.</h1>
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
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">ID</label>
            <input type="text" class="form-control" placeholder="Auto" disabled id="ID">
        </div>
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Jhon Doe">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="jhondoe@example.com">
        </div>
        <div class="col-md-6">
            <label for="Phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="Phone" placeholder="6546546541">
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Employee">
        </div>
        <div class="col-md-6">
            <label for="created" class="form-label">Created</label>
            <input type="date" name="created" class="form-control" id="created" value="<?php echo date("Y-m-d");?>">
        </div>
        
        <div class="col-12">
            <button type="submit" name="insert" class="btn btn-dark">Create</button>
        </div>
    </form>
    </div>
    <?php
        require_once "./footer.php";
    ?>
  </body>
</html>