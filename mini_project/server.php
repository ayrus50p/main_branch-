<?php
#include("connect2.php");
error_reporting(0);
session_start();
//intializing variables
$username=" ";
$email=" ";
$errors=array();

//connection

$conn = mysqli_connect("localhost","root","","register") or die(" could not connect to database");

//registering user

$username = mysqli_real_escape_string($conn,$_POST["username"]);
$firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
$lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$phonenumber = mysqli_real_escape_string($conn,$_POST["phonenumber"]);
$passwor = mysqli_real_escape_string($conn,$_POST["passwor"]);

//form validation
#if(empty($username)){array_push($errors,"username is required")};
#if(empty($firstname)){array_push($errors,"firstname is required")};
#if(empty($lastname)){array_push($errors,"lastname is required")};
#if(empty($email)){array_push($errors,"email is required")};
#if(empty($phonenumber)){array_push($errors,"phonenumber is required")};
#if(empty($password)){array_push($errors,"passwor is required")};

//check for existing user with some username
$user_check_query ="SELECT * from  register2 where username = '$usersname' or email='$email' Limit 1";
$result=mysqli_query($conn,$user_check_query);
$user = mysqli_fetch_assoc($result);
if($user) {
    if($user['username'] === $username){array_push($errors,"username is already exists");}
    if($user['email'] === $email){array_push($errors,"this email id aleady has a registered username");}

}
//register the userself no error
if(count($errors) == 0)
    $passwor = md5($passwor);//this will encrypt password
    $query = "INSERT INTO register2 (username,firstname,lastname,email,phonenumber,passwor) 
    VALUES ('$username','$firstname','$lastname','$email','$phonenumber'$passwor')";

    mysqli_query($conn,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = 'you logged in';
    header('location:index.php');

?>
/*<?php
session_start();
include('connect2.php');
if(isset($_SESSION['username']))
{
    $_SESSION['msg']="you must log in first to view this page";
    header("location:login.php");
}
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>*/