<!doctype html>
<html lang="en">
  <?php 
    require_once "./masterpage/header.php";
  ?>
  <?php 
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }
  ?>
  <body>
   <?php   
    require_once "./masterpage/navbar.php";
    require_once "./connection/connection.php";
   ?>
    <div class="container">
        <h1 class="mt-1">Blog post.</h1>
        <a href="./blog.php" class="btn btn-dark mt-1">Add blog post</a>
        <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">POST Id</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Publish At</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="output">
            <?php 
                $obj = new Database();
                $data = $obj->BlogFind();
                foreach($data as $single){
                    ?>
                        <tr>
                            <td><?php echo $single['bid']; ?></td>
                            <td><?php echo $single['categories']; ?></td>
                            <td><?php echo $single['title']; ?></td>
                            <td><?php echo $single['publishAt']; ?></td>
                            <td><a href="./update.php?cid=<?php echo $single['cid']; ?>" class="btn btn-light"><i class="bi bi-pencil"></i></a></td>
                            <td><button type="button" class="btn btn-light delete" id="<?php echo $single['cid']; ?>"><i class="bi bi-trash"></i></button></td>
                        </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
        </div>
    </div>
    <?php
        require_once "./masterpage/footer.php";
    ?>
  </body>
</html>