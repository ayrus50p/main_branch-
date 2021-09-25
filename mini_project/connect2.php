<?php
session_start();
header('location:login1.php');

error_reporting(0);
$conn = mysqli_connect("localhost","root","","register");
if(!$conn)
{
    echo "Database connection failed";
}
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$rollno =$_POST['rollno'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$passwor = $_POST['passwor'];
$query = "SELECT * from register2 where email = ? Limit 1";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($rows == 1)
{
    echo "username is already exist";
}else {
    $reg = "INSERT INTO  register2 (username,firstname,lastname,rollno,email,phonenumber,passwor) 
    VALUES ('$username','$firstname','$lastname','$rollno','$email','$phonenumber','$passwor')";
    mysqli_query($conn,$reg);
    #echo "registration successfull";
    }

?>