</html>
<head> <link rel="stylesheet" type="text/css" href="style.css"> <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Your Result</title></head>
<body>
  <center>
    <div class="txt">Online Result Management </div>
    <div class="content">
      <div class="content3">
        <div class="max">Result Panel</div>





        <?php
$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "subconnect";
$rollno = $_POST["rollno"];
$branch = $_POST['branch'];
$section = $_POST["section"];

  
// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM marks  WHERE rollno = '$rollno' AND branch = '$branch' AND section ='$section'";
$runQuery = mysqli_query($conn,$sql);

$countRows = mysqli_num_rows($runQuery);
if($countRows > 0)
{
  while ($row = mysqli_fetch_array($runQuery))
  {
    echo "  ROLL      : " . $row['rollno'] ."<br><br>";
    echo "  Branch     : " . $row['branch'] ."<br><br>";
    echo "  Section    : " . $row['section'] ."<br><br>";
    echo "  Marks_out_of:    : " . $row['Marks_out_of'] ."<br><br>";
    echo "  Datamining : " . $row['Data mining'] ."<br><br>";
    echo "  ppl        : " . $row['ppl'] ."<br><br>";
    echo "  python     : " . $row['python'] ."<br><br>";
    echo "  sppm       : " . $row['sppm'] ."<br><br>";
    echo "  cloudcomputing : " . $row['cloud computing'] ."<br><br>";
    
  }
} 
else{
  echo "<center><h2>sorry no result found!</h2></center>";
}
#$conn->close();
?>
<center><button><a href="index.php">Back</a></button></center>

</div></div></center></body></html>