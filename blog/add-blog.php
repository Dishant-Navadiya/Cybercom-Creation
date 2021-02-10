<!doctype html>
<html lang="en">
  <?php 
    require_once "./masterpage/header.php";
    require_once "./connection/connection.php";
  ?>
   <?php 
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }
  ?>
  <body>
   <?php 
        if(isset($_POST['add'])) {
            
            $ErrMsg;
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = $_POST['date'];
            $pid = $_POST['pid'];
            $image = $_FILES['image'];

            if(!empty($title) and !empty($content) and !empty($date) and !empty($image) and !empty($pid)){
                $obj = new Database();
                $response = $obj->AddBlog($title,$content,$date,$pid,$image);
            }else {
                $ErrMsg = "Please Provide Valid information.";
            }

        }
    ?>
    <div class="container">
    <h1 class="mt-2">Add new Blog</h1>
    <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="col-md-12" id="err-msg">
        </div>
        <div class="col-md-12" id="err-msg">
        <?php 
            if(isset($response)) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $response["msg"]; ?>
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
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="col-md-12">
            <label for="content">Content</label>
            <textarea class="form-control" id="content"  name="content" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="date" class="form-label">Publish date.</label>
            <input type="date" name="date" class="form-control" id="date" placeholder="select date.">
        </div>
        <div class="col-md-12">
            <?php 
                $obj = new Database();
                $data = $obj->CategoryFind();
                ?>
                    <select class="form-select" aria-label="Default select example" name="pid[]" multiple>
                    <option value="" selected></option>
                <?php            
                foreach($data as $single){
                    ?>
                        <option value="<?php echo $single['cid'] ?>"><?php echo $single['title'] ?></option>
                    <?php
                }
            ?>
            </select>
        </div>
        <div class="col-md-12">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
        <div class="col-12">
            <button type="submit" name="add" class="btn btn-dark">Add</button>
        </div>
    </form>
    </div>
    <script src="./js/app.js"></script>
    <?php
        require_once "./masterpage/footer.php";
    ?>
  </body>
</html>