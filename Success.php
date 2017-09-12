<?php
require 'common.php';
if(!issset($_SESSION['email'])){
	header('location: index.php?');
}
 $select_query =   "UPDATE users set STATUS = "Confirmed" WHERE user_id ="$user_id"";
 echo "Your order is confirmed. Thank you for shopping with us.<a href=\"products.php\">Click here</a> to purchase any other item.";
?>