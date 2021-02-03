<?php 
    require_once '../connection/connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>View, Contacts</title>
  </head>
    <?php 
        $sqlQuery = "SELECT * FROM contact";
        $result = mysqli_query($conn,$sqlQuery);
    ?>
  <body>
    
    <div class="container">
    <h1>List of Contacts</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            
                <?php 
                    while($fetchuser= mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $fetchuser[0]; ?></td>
                            <td><?php echo $fetchuser[1]; ?></td>
                            <td><?php echo $fetchuser[2]; ?></td>
                            <td><?php echo $fetchuser[3]; ?></td>
                        </tr>
                    <?php
                    }
                ?>
            
        </tbody>
        </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>