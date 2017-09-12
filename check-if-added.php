<?php 

function check_if_added_to_cart($item_id){
    require 'common.php';
$select_query =   "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id = '$user_id' and status='Added to Cart'";
  $select_query_result= mysqli_query($con , $select_query);
  $number_of_items = mysqli_num_rows( $select_query_result);
  if($number_of_items >= 1){
     return 1;
  }
  else {
  	return 0;
  }
}

?>