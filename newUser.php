<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'hmis');

$name = $_POST['name'];
$add = $_POST['address'];
$phone = $_POST['pno'];
$email = $_POST['emailID'];
$password = $_POST['password'];
//$pass = password_hash($password, PASSWORD_DEFAULT); //Hashing the password

//Check for already existing account with the entered credentials
$checkquery  = " SELECT * FROM user WHERE name = '$name";
$result = mysqli_query($con, $checkquery);
$num = mysqli_num_rows($result);

if (!$result || $num <= 0) {
    $addQuery = " INSERT INTO user(name, address, phone, email, pass) VALUES('$name' , '$add', '$phone','$email','$password') ";
    mysqli_query($con, $addQuery);
    header('location: Success.php');
}