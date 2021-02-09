<!doctype html>
<html lang="en">
  <?php 
    require_once "./header.php";
  ?>
  <body>
   <?php
    require_once "./navbar.php";
    require_once "./connection/connection.php";
   ?>

    <?php 
        if(isset($_POST['update'])) {
            $obj = new Database();
            $cid= $_POST['cid'];
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];
            $title= $_POST['title'];
            $created= $_POST['created'];
            $status = $obj->Update($cid,$name,$email,$phone,$title,$created);
            if($status===TRUE){
                header('location:contacts.php');
            }else {
                echo "Not updated";
            }
        }
    ?>

    <div class="container">
    <?php 
        if(isset($_GET['cid'])) {
            $obj = new Database();
            $result = $obj->FindOne($_GET['cid']);
            $data = $result->fetch_row();
         ?>
            <h1 class="mt-2">Update Contact #<?php echo $_GET['cid']; ?></h1>
         <?php   
        }
    ?>
    <form action="#" method="POST" class="row g-3">
        
    <div class="col-md-6">
            <label for="inputPassword4" class="form-label">ID</label>
            <input type="text" class="form-control" name="cid" placeholder="Auto" value="<?php echo $data[0]; ?>" id="ID">
        </div>
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $data[1]; ?>" placeholder="Jhon Doe">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" value="<?php echo $data[2]; ?>" placeholder="jhondoe@example.com">
        </div>
        <div class="col-md-6">
            <label for="name" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="Phone" value="<?php echo $data[3]; ?>" placeholder="6546546541">
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo $data[4]; ?>" placeholder="Employee">
        </div>
        <div class="col-md-6">
            <label for="created" class="form-label">Created</label>
            <input type="date" name="created" class="form-control" id="created" value="<?php echo $data[5]; ?>">
        </div>
        
        <div class="col-12">
            <button type="submit" name="update" class="btn btn-dark">update</button>
        </div>
    </form>
    </div>
    <?php
        require_once "./footer.php";
    ?>
  </body>
</html>