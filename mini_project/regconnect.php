<?php
error_reporting(0);
$firstname =$_POST['firstname'];
$lastname= $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
#if (!empty($firstname)||!empty($lastname)||!empty($email) ||!empty($phonenumber) || !empty($password)){
$user ='root';
$pass = '';
$db = 'register';
//coonection
$db = new mysqli('localhost', $user,$pass,$db);
if(mysqli_connect_error()){
    die('connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
    $SELECT = "SELECT email from register2 where email = ? Limit 1";
    $INSERT = "INSERT INTO  register2 ( firstname,lastname,email,phonenumber,passwor) VALUES (?,?,?,?,?)";
    $stmt = $db->prepare($SELECT);
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$phonenumber,$passwor);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    
    if($rnum==0){
        $stmt->close();
        $stmt = $db->prepare($INSERT);
        $stmt->bind_param("sssss",$firstname,$lastname,$email,$phonenumber,$passwor);
        $stmt->execute();
        /*echo "new record inserted successfully ";*/
    }
    else{
        echo "someone has already register using this email";
    }
    $stmt->close();
    $db->close();
    }
    
   
?>
