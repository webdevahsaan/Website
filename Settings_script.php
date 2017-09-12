<?php 
 require 'common.php';
 
 if(!issset($_SESSION['email'])){
  header('location: index.php?');
}

if (strlen($new_password) != strlen($retype_new_password)) {
	echo "There is a password mismatch";
} else {
	$old_pass = $_POST['opass'];
	$new_pass = $_POST['npass'];
$select_query = "SELECT password FROM users WHERE user_id="$user_id"";
if($old_pass == $new_pass){
$update_query = "UPDATE users SET password="$new_password" WHERE password="$password"";
$update_query_result = mysqli_query($update_query);
}
else {
	header('location: settings.php?');
	echo "Please write the matching passwords in both the Fields.";
}
}
?>