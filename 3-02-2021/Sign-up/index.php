<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
  <body>
  <?php
        require_once "../connection/connection.php"; 
        if(isset($_POST['submit'])) {

            if(empty($_POST['fname'])) {
                
              echo "First name is require";
            
            }else if (empty($_POST['lname'])) {
            
              echo "Last name is require";
            
            }else if (empty($_POST['dob'])) {
            
              echo "Date of birth is require";
            
            }else if (empty($_POST['gender'])) {
            
              echo "gender is require";
            
            }else if (empty($_POST['country'])) {
            
              echo "country is require";
            
            }else if (empty($_POST['email'])) {
            
              echo "email is require";
            
            }else if (empty($_POST['phone'])) {
            
              echo "phone is require";
            
            }else if (empty($_POST['password'])) {
            
              echo "password is require";
            
            }else if (empty($_POST['agree'])) {
            
              echo "agree is require";
            
            }else {
            
              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              $dob = implode('-',$_POST['dob']);
              $gender = $_POST['gender'];
              $country = $_POST['country'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $password = $_POST['password'];
              $agree = $_POST['agree'];
              $sql = "insert into signup (fname,lname,dob,gender,country,email,phone,password,agree)
                      values  ('$fname', '$lname', '$dob','$gender','$country','$email','$phone','$password','$agree')";

              if ($conn->query($sql) === TRUE) {
                echo "Inserted successfully";
              } else {
                echo "Error:". $conn->error;
              }
    ?>
        <table class="table container mt-2">
          <thead>
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Gender</th>
              <th scope="col">country</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Password</th>
              <th scope="col">Terms</th>
            </tr>
          </thead>
          <tbody>
              <td>
                    <?php echo $fname; ?>
              </td>
              <td>
                    <?php echo $lname; ?>
              </td>
              <td>
                  <?php echo "$dob[0]-$dob[1]-$dob[2]"; ?>
              </td>
              <td>
                    <?php echo $gender; ?>
              </td>
              <td>
                    <?php echo $country; ?>
              </td>
              <td>
                    <?php echo $email; ?>
              </td>
              <td>
                    <?php echo $phone; ?>
              </td>
              <td>
                    <?php echo $password; ?>
              </td>
              <td>
                    <?php echo $agree; ?>
              </td>
              
          </tbody>
        </table>
    <?php
            }
        }
    ?>
  <div class="container col-md-6">
  <div class="alert-danger" role="alert" id="err-msg">
  </div>
      <h1 class="mt-2">Sign Up</h1>
      <form action="#" method="POST" onsubmit="return check();" novalidate>
        <div class="form-group mt-2">
          <label >FIRST NAME</label>
          <input
            type="text"
            class="form-control"
            name="fname"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label >LAST NAME</label>
          <input
            type="text"
            class="form-control"
            name="lname"
            required
          />
        </div>
        <div class="mt-2">
          <label>Date of Birth</label>
          <div class="row">
                <div class="col-md-4">
                    <select name="dob[]" class="form-select" id="date">
                        <option value="" selected>Date</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="dob[]" class="form-select" id="month">
                        <option value="" selected>Month</option>
                        <option value="feb">Feb</option>
                        <option value="mar">March</option>
                        <option value="apr">Apr</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="dob[]" class="form-select" id="year">
                        <option value="" selected>Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                    </select>
                </div>
          </div> 
          
          
        </div>
        <div class="form-group mt-2">
          <label for="password">GENDER : </label>
          <input
            type="radio"
            class="form-check-input"
            name="gender"
            value="male"
            required
          />MALE 
          <input
            type="radio"
            class="form-check-input"
            name="gender"
            value="female"
            required
          />FEMALE
        </div>
        <div class="mt-2">
          <label>Country</label>
            <select name="country" class="form-select" id="country">
                <option value="" selected>country</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="New Zeland">New Zeland</option>
            </select>
        </div>
        <div class="form-group mt-2">
          <label >E-mail</label>
          <input
            type="email"
            class="form-control"
            name="email"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label >Phone</label>
          <input
            type="text"
            class="form-control"
            name="phone"
            id="phone"
            maxlength="10"
            pattern="\d{10}"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label >Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            id="password"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label >Confirm Password</label>
          <input
            type="password"
            class="form-control"
            name="confirm-password"
            id="confirm-password"
            required
          />
        </div>
        
        <div class="mt-2 form-check">
            <input type="checkbox" class="form-check-input" name="agree" value="true" required/>
            <label class="form-check-label">I agree to the Terms of use</label>
        </div>
        
        <div class="mt-2">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          <button class="btn btn-light" type="reset">Cancle</button>
        </div>
        
      </form>
    </div>
    <script src="./custom.js"></script>
    
  </body>
</html>
