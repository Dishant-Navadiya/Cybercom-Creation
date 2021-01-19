<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML Practice 8</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/custome.js"></script>
  </head>
  <body>
    <section>
      <form
        action="./information.php"
        method="POST"
        onsubmit="return checkValidation()"
      >
        <h1>Personal information</h1>
        <table>
          <tr>
            <td>First Name:</td>
            <td>
              <input type="text" name="firstName" required />
            </td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td>
              <input type="text" name="lastName" />
            </td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>
              <input type="datetime-local" name="date" required />
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <select name="gemder" required>
                <option value="">Choose a gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </td>
          </tr>
        </table>
        <h1>Account information</h1>
        <table>
          <tr>
            <td>Email</td>
            <td>
              <input type="email" name="email" required id="email" /><br />
              <label>(Your email address will be your username)</label>
            </td>
          </tr>
          <tr>
            <td>Re-type Email</td>
            <td>
              <input type="email" name="reEmail" required id="reEmail" />
            </td>
          </tr>
          <tr>
            <td>Password:</td>
            <td>
              <input
                type="password"
                name="password"
                required
                id="password"
              /><br />
              <label>(Min 8 characters, 1 number, case-sensetive)</label>
            </td>
          </tr>
          <tr>
            <td>Re-type Password:</td>
            <td>
              <input
                type="password"
                name="rePassword"
                required
                id="rePassword"
              />
            </td>
          </tr>
          <tr>
            <td>Security Question:</td>
            <td>
              <select name="question">
                <option value="">Choose a security question</option>
                <option value="1">what is your best friend name.?</option>
                <option value="2">What is your teacher name.?</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Security Answer:</td>
            <td>
              <input type="text" name="answer" /><br />
              <label>(Not case sensetive)</label>
            </td>
          </tr>
        </table>

        <h1>Contact information</h1>
        <table>
          <tr>
            <td>Address:</td>
            <td>
              <input type="text" name="address" />
            </td>
          </tr>
          <tr>
            <td>city:</td>
            <td>
              <input type="text" name="city" />
            </td>
          </tr>
          <tr>
            <td>State:</td>
            <td>
              <select name="state">
                <option selected>select state</option>
                <option value="1">Maharastra</option>
                <option value="2">Delhi</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Zip code:</td>
            <td>
              <input type="text" name="zipcode" />
            </td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td>
              <input type="text" name="phone" required id="phone" />
              <select name="mobile">
                <option selected>choose</option>
                <option value="1">Mobile</option>
                <option value="2">Phone</option></select
              ><br />
              <label>(No spaces or dashes)</label>
            </td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <button type="submit" name="send">Submit</button>
            </td>
            <td>
              <button type="reset" name="reset">Reset</button>
            </td>
          </tr>
        </table>
      </form>
    </section>
  </body>
</html>
