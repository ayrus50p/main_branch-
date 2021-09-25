<?php 
error_reporting(0);
$conn = mysqli_connect('localhost','root','','subconnect');
if($conn)
{
    //echo "connection is granted";
}else{
    echo "something went wrong".mysqli_connect_error();
}
$rollno = $_POST['rollno'];
$branch = $_POST['branch'];
$section = $_POST['section'];
$Marks_out_of = $_POST['Marks_out_of'];
$Datamining = $_POST['Datamining'];
$ppl = $_POST['ppl'];
$python = $_POST['python'];
$sppm = $_POST['sppm'];
$cloudcomputing = $_POST['cloudcomputing'];

$query = "INSERT INTO marks VALUES('$rollno','$branch','$section','$Marks_out_of','$Datamining','$ppl','$python','$sppm','$cloudcomputing')";
$data = mysqli_query($conn,$query);
if($data)
{
    #echo "data is inserted ";
    #header('location:subject.php');

    
    
}else{
    echo "data is not inserted".mysqli_connect_error;
}

?>