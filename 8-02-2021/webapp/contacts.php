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
    <div class="container">
        <h1 class="mt-1">Read contacts.</h1>
        <a href="./create.php" class="btn btn-dark mt-1">Create Contacts</a>
        <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody id="output">
            <?php 
                $obj = new Database();
                $data = $obj->Find();
                foreach($data as $single){
                    ?>
                        <tr>
                            <td><?php echo $single['cid']; ?></td>
                            <td><?php echo $single['name']; ?></td>
                            <td><?php echo $single['email']; ?></td>
                            <td><?php echo $single['phone']; ?></td>
                            <td><?php echo $single['title']; ?></td>
                            <td><?php echo $single['created']; ?></td>
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
        require_once "./footer.php";
    ?>
  </body>
</html>