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
        <h1 class="mt-1">Blog Category</h1>
        <a href="./add-category.php" class="btn btn-dark mt-1">Add Category</a>
        <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Category id</th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="output">
            <?php 
                $obj = new Database();
                $data = $obj->CategoryFind();
                foreach($data as $single){
                    ?>
                        <tr>
                            <td><?php echo $single['cid']; ?></td>
                            <td><img src="<?php echo $single['url']; ?>" alt="img" height="70px" height="70px"/></td>

                            <td><?php echo $single['title']; ?></td>
                            <td><?php echo $single['createdAt']; ?></td>
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
    <script src="./js/app.js"></script>
    <?php
        require_once "./masterpage/footer.php";
    ?>
  </body>
</html>