<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Information</title>
  </head>
  <body>
        <?php
            if(isset($_REQUEST['send'])){
                ?>
                <table border="1">
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Date of birth</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>question</th>
                        <th>answer</th>
                        <th>address</th>
                        <th>city</th>
                        <th>state</th>
                        <th>zipcode</th>
                        <th>phone</th>
                        <th>type</th>
                    <tr>
                    <tr>
                        <th><?php echo $_REQUEST['firstName']; ?></th>
                        <th><?php echo $_REQUEST['lastName']; ?></th>
                        <th><?php echo $_REQUEST['date']; ?></th>
                        <th><?php echo $_REQUEST['gemder']; ?></th>
                        <th><?php echo $_REQUEST['email']; ?></th>
                        <th><?php echo $_REQUEST['password']; ?></th>
                        <th><?php echo $_REQUEST['question']; ?></th>
                        <th><?php echo $_REQUEST['answer']; ?></th>
                        <th><?php echo $_REQUEST['address']; ?></th>
                        <th><?php echo $_REQUEST['city']; ?></th>
                        <th><?php echo $_REQUEST['state']; ?></th>
                        <th><?php echo $_REQUEST['zipcode']; ?></th>
                        <th><?php echo $_REQUEST['phone']; ?></th>
                        <th><?php echo $_REQUEST['mobile']; ?></th>
                    <tr>
                <table>
            
                <?php
            }
        ?>
  </body>
</html>
