<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'hmis');

$email = $_POST['email'];
echo 'Email = ' . $email;
$password = $_POST['pass'];

//$pass = password_hash($password, PASSWORD_DEFAULT); //Hashing the password

$query  = " SELECT * FROM user WHERE email = '$email' && pass = '$password'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Successful!";
    header('location: Home.html');
} else {
    echo "Unsuccessful!";
}
