<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Registration</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="registrationcss.css">
  </head>
<body>
  <h1 class="h1">Registration</h1>
  <h3 class="h3">Fill the form with the correct values</h3>
  <form action="connect2.php" method="post">
  <div class="container">
       <h5>Already a user?</h5><bold><a  href="login1.php">Sign In</a></bold>
    </div>
  <div class="div1">

   <label  for="i1"  >Username:</label>
   <input class="i1" type="type" name="username" autocomplete="off"  required>

   <label  for="i2">First name:</label>
   <input class="i2" type="type" name="firstname" autocomplete="off" required>

   <label  for="i3">Last name:</label>
   <input class="i3" type="type" name="lastname" autocomplete="off" required>

   <label  for="i4">Roll Number:</label>
   <input class="i4" type="type" name="rollno" autocomplete="off"required>

   <label  for="i5">Email:</label>
   <input class="i5" type="type" name="email" autocomplete="off" required>

   <label  for="i6">PhoneNumber:</label>
   <input class="i6" type="type" name="phonenumber" autocomplete="off" required>

   <label  for="i7">Password:</label>
   <input class="i7" type="password" name="passwor" autocomplete="off" required>

   <button type="submit" class="btn btn-primary button1">Submit</button>
  </div>
</form>
</body>
</html>
