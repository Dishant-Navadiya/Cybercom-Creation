<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form1</title>
  </head>
  <body>
      <form action="#" method="POST" enctype="multipart/form-data" novalidate> 
      <table>
          <tr>
              <td>
                  Enter name
              </td>
              <td>
                 <input type="text" name="name" required/>
              </td>
          </tr>
          <tr>
              <td>
                  Enter Password
              </td>
              <td>
                 <input type="password" name="password" required/>
              </td>
          </tr>
          <tr>
              <td>
                  Enter Address
              </td>
              <td>
                <textarea name="address" required></textarea>
              </td>
          </tr>
          <tr>
              <td>
                  Select Game
              </td>
              <td>
               <input type="checkbox" name="game[]" value="hockey" />hockey<br/>
               <input type="checkbox" name="game[]" value="football" />football<br/>
               <input type="checkbox" name="game[]" value="badminton" />badminton<br/>
               <input type="checkbox" name="game[]" value="cricket" />cricket<br/>
               <input type="checkbox" name="game[]" value="volleyball" />volleyball
              </td>
          </tr>
          <tr>
              <td>
                  Gender
              </td>
              <td>
               <input type="radio" name="gender" value="male" required/>Male<br/>
               <input type="radio" name="gender" value="female" required/>Female
              
              </td>
          </tr>
          <tr>
              <td>
                  Select your age
              </td>
              <td>
               <select name="age" required>
                   <option value="" selected >Select</option>
                   <option value="16">15</option>
                   <option value="16">16</option>
                   <option value="17">17</option>
                   <option value="18">18</option>
                   <option value="19">19</option>
                   <option value="20">20</option>
                   
               </select>
              </td>
          </tr>
          <tr>
              <td>
                 
              </td>
              <td>
               <input type="file" name="file" required/>
              </td>
          </tr>
          <tr>
              <td>
                 <button type="reset" name="reset">Reset</button>
              </td>
              <td>
                <button type="submit" name="submit">Submit form</button>
              </td>
          </tr>
      </table>
      </from>
      <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name']; 
            $password = $_POST['password']; 
            $address = $_POST['address']; 
            $games = $_POST['game']; 
            $gender = $_POST['gender']; 
            $age = $_POST['age']; 
            $file = $_FILES['file']; 
                
            ?>

            <table>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Password
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Games
                    </th>
                    <th>
                        Gender    
                    </th>
                    <th>
                        Age
                    </th>
                    <th>
                        File
                    </th>
                </tr>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $password; ?>

                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    
                    <td>
                        <?php 
                            foreach($games as $game) {
                                echo $game."|";
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo $gender; ?>
                            
                    </td>
                    <td>
                        <?php echo $age; ?>       
                    </td>
                    <td>    
                        <?php echo $file['name']; ?>
                    </td>
                </tr>
            </table>
            <?php
        }

      ?>
  </body>
</html>
