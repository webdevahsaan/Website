<?php 
require 'common.php';
$id = $_GET['id'];
$insert_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')"; 
$insert_query_result = mysqli_query($con , $insert_query);
header('location: products.php?');
?>
