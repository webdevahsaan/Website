<?php 
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con , $email);
$password = md5(mysqli_real_escape_string($con , $password));
$select_query = "SELECT user_id , email FROM users where email="$email" && password="$passowrd"";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
 $number_of_rows = mysqli_num_rows($select_query_result);
if($number_of_rows == 0) {
	echo "There is no user with the email_id and password in the users table";
}
else {
	$row = mysqli_fetch_array($select_query_result);
	$_SESSION['email'] = $email ;
$_SESSION['id'] = mysqli_insert_id($con);
header('location: products.php? Redirected to the products.php page');
}


?>