<?php 
require 'common.php';
$user_id = $_SESSION['id'];
$delete_query = "DELETE FROM users_products WHERE user_id="$user_id" AND item_id="$item_id"";
header('location: cart.php?');
?>
