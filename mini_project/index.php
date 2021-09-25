/**/
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css"> <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Online Result Management</title></head>
<body>
	<center>
		<div class="txt">Online Result Management </div>
		<div class="content">
			<div class="content2">
				<div class="max">Input Panel</div>
      <!-- ADDDING FORM-->
      	<form action="result.php" method="post"><br>
      		<input type="text" name="rollno" placeholder="Roll Number" required><br><br>
      		


      	<select name='branch'> 
        <option value="cse" name = 'cse'>CSE</option>
    <option value="ece" name= 'ece'>ECE</option>
    <option value="eee" name = 'eee'>EEE</option>
    <option value= "civil" name= 'civil'>CIVIL</option>

</select> <br><br>

<select name = "section">
<option value='a' name='a'>A</option>
<option value='b' name = 'b'>B</option>
<option value='c' name= 'c'>C</option>
<option value ='d' name= 'd'>D</option>
</select><br><br>
<select  name="class">
    <option value="B-tech IV 1st sem">B-tech IV 1st sem</option>
    <option value="B-tech IV 2nd sem">B-tech IV 2nd sem</option>
    </select><br><br>
    <input type="submit" name="submit" value="Fetch Result">
    <button><a href="login1.php">Log out</a></button>
       </form>





			</div></div></center></body></html>