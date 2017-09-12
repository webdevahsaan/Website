<?php
require 'common.php';
$name =  mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$select_query = "SELECT user_id  FROM users WHERE email = '$email'";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$primary_key = mysqli_insert_id($con);
$number_of_users = mysqli_num_rows($select_query_result);

?>
<?php
if($number_of_rows > 0){
	echo "Email_id already exists";
}
else {
	$user_registration_query = "insert into users(user_id, name , email , password , contact , city , address) values ('$id', '$name', '$email', '$password','$contact','$city','$address')";
	echo "User Successfully Inserted.";
$_SESSION['email'] = $email ;
$_SESSION['user_id'] = mysqli_insert_id($con);
header('location: products.php?');
}

?>