<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
  <div class="container col-md-6">
      <h1 class="mt-4">User Form</h1>
      <form action="#" method="POST">
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">FIRST NAME</label>
          <input
            type="text"
            class="form-control"
            name="fname"
            required
          />
        </div>
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">PASSWORD</label>
          <input
            type="password"
            class="form-control"
            name="password"
            required
          />
        </div>
        <div class="form-group mt-4">
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
        <div class="mt-4">
          <label>D.O.B</label>
          <div class="row">
                <div class="col-md-4">
                    <select name="dob[]" class="form-select">
                        <option value="jan" selected>Jan</option>
                        <option value="feb">Feb</option>
                        <option value="mar">March</option>
                        <option value="apr">Apr</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="dob[]" class="form-select">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="dob[]" class="form-select">
                        <option value="1999" selected>1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                    </select>
                </div>
          </div> 
          
          
        </div>
        <div class="form-group mt-4">
            <label>SELECT GAMES : </label>
              
            <input
                type="checkbox"
                class="form-check-input" 
                name="games[]"
                value="Hockey"
                
            />Hockey 
            <input
                type="checkbox"
                class="form-check-input" 
                name="games[]"
                value="Football"
                
            />Football 
            <input
                type="checkbox"
                class="form-check-input" 
                name="games[]"
                value="Cricket"
                
            />Cricket 
            <input
                type="checkbox"
                class="form-check-input" 
                name="games[]"
                value="VolleyBall"
                
            />Volleyball 
        </div>
        <div class="form-group mt-4">
            <label for="password">MARITAL STATUS : </label>
            <input
                type="radio"
                class="form-check-input"
                name="status"
                value="married"
                required
            />married 
            <input
                type="radio"
                class="form-check-input"
                name="status"
                value="unmarried"
                required
            />unmarried
        </div>
        <div class=" mt-4">
          <button class="btn btn-light" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit" name="register">Register</button>
        </div>
        <div class="mt-4 form-check">
            <input type="checkbox" class="form-check-input" name="agree" value="true" required/>
            <label class="form-check-label">I accept this agrement</label>
        </div>
      </form>
    </div>
    <?php 
        if(isset($_POST['register'])) {
            $fname = $_POST['fname'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $games = $_POST['games'];
            $status = $_POST['status'];
            $agree = $_POST['agree'];
            
            

    ?>
        <table class="table container mt-2">
          <thead>
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Password</th>
              <th scope="col">Gender</th>
              <th scope="col">D.O.B</th>
              <th scope="col">Games</th>
              <th scope="col">Married Status</th>
              <th scope="col">Terms and Conditions.</th>
            </tr>
          </thead>
          <tbody>
              <td>
                    <?php echo $fname; ?>
              </td>
              <td>
                    <?php echo $password; ?>
              </td>
              <td>
                  <?php echo $gender; ?>
              </td>
              <td>
                    <?php echo "$dob[0].$dob[1].$dob[2]"; ?>
              </td>
              <td>
                    <?php 
                        foreach ($games as $game ) {
                            echo "$game |";
                        }
                    ?>
              </td>
              <td>
                    <?php echo $status; ?>
              </td>
              <td>
                    <?php echo $agree; ?>
              </td>
              
          </tbody>
        </table>
    <?php
        }
    ?>
  </body>
</html>
