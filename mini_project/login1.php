<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
  </head>

    <body>
      <h1 class="first-h1">STUDENT ONLINE RESULT MANAGEMENT</h1>
      <div class="mainDiv">

        <div class="studentDIV">
        <form action ="validate.php" method="post">
          <h1>Student Login</h1>
          <label  class="inputs">Username:</label>
          <input  class="input1" type="text" name="username" autocomplete="off">
          <label  class="inputs">Password:</label>
          <input  class="input1" type="password" name="passwor" autocomplete="off">
          <button type="submit" class="btn btn-primary login1-button">Login</button>
          not a user? <a href="register.php">Register</a>
          </form>
        </div>

        <div class="adminDIV">
        <form action ="validate2.php" method="post">
          <h1>Admin Login</h1>
          <label  class="inputs">Username:</label>
          <input  class="input1" type="text" name="username" autocomplete="off">
          <label  class="inputs">Password:</label>
          <input  class="input1" type="password" name="passwor" autocomplete="off">
          <button type="submit" class="btn btn-primary login2-button">Login</button>
         </form>
      </div>
</div>


    </body>
</html>
