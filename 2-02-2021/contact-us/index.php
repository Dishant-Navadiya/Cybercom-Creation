<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="./custom.js" defer></script>
  </head>
  <body>
  <div class="container col-md-6">
  <?php 
        if(isset($_POST['sendMsg'])) {
          if(empty($_POST['name'])) {
              echo "Name is required";  
          }else if(empty($_POST['email'])) {
              echo "Email is required";  
          }else if(empty($_POST['subject'])) {
            echo "Subject is required";  
          }else if(empty($_POST['message'])) {
            echo "Message is required";  
          }else {

            $conn = mysqli_connect('localhost','root','','test');
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
            $sql = "insert into contact (name,email,subject,message)
                    values  ('$name', '$email', '$subject','$message')";
            
            if ($conn->query($sql) === TRUE) {
              echo "Inserted successfully";
            } else {
              echo "Error:". $conn->error;
            }
            ?>
        <table class="table container mt-2">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
              <td>
                    <?php echo $name; ?>
              </td>
              <td>
                    <?php echo $email; ?>
              </td>
              <td>
                    <?php echo $subject; ?>
              </td>
              <td>
                    <?php echo $message; ?>
              </td>
              
          </tbody>
        </table>
    <?php
      }
    }
    ?>
      <h1 class="mt-4">Contact us!</h1>
      <div class="alert-danger" role="alert" id="err-msg">
      </div>
      <form action="#" method="POST" onsubmit="return validation();">
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">Name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Name..."
            style="height:38px; line-height:38px;"
          />
        </div>
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">Email</label>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Email..."
          />
        </div>
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">Subject</label>
          <input
            type="text"
            class="form-control"
            name="subject"
            id="subject"
            placeholder="subject..."
          />
         </div>
        <div class="form-group mt-2">
          <label>Message</label>
          <textarea class="form-control" placeholder="Message" rows="3" name="message" id="message"></textarea>
        </div>
        <div class=" mt-4">
          <button class="btn btn-primary" type="submit" name="sendMsg">SEND MESSAGE</button>
        </div>
      </form>
    </div>
    
  </body>
</html>
