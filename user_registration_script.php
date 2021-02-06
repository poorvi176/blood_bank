<?php
require 'common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$user_registration_query = "insert into users(email, first_name, last_name, password, contact) values ('$email', '$first_name', '$last_name', '$password', '$contact')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
if(!isset($_SESSION['email'])){
header('location: welcome.php');
}
?>

