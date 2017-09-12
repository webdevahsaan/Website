<?php 
require 'common.php';
 if(isset($_POST['login'])) {

        $email = mysql_real_escape_string($_POST['email']);
        $password = sha1($_POST['password'] );

        $query = mysql_query("SELECT * FROM tab WHERE email='$email' AND password='$password'");
        $res = mysql_num_rows($query);

        if ($res == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['userobj'] = mysql_fetch_assoc($query);

            header('location: products.php?');
            exit;
        } else {
            echo 'Please Login to Visit the Page';
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>LifeStyle Store</title>
	<meta charset="utf-8" name="viewport" content="width=device-width , initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <?php 
    include 'header.php';
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover table1">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>        </th>
                    </tr> 
                    <tr>
                        <td>1</td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                    </tr>
                    <tr>
                        <td>    </td>
                        <td>Total</td>
                        <td>Rs 0/-</td>
                        <td><a href="Success.php" class="btn btn-primary"> Confirm Order</a></td>
                    </tr>
                </tbody>
                </table> 
            </div>
        </div>
        <?php
         $_SESSION['user_id'] = $user_id;
         $select_query = "SELECT * FROM users_products INNER JOIN users WHERE user_id = '$user_id'";
           $select_query_result= mysqli_query($con , $select_query);
          $number_of_items = mysqli_num_rows($select_query_result);
          if ($number_of_items == 0) {
             echo "Add items to the cart first";
          }
          else {
            while ($sum) {
                $sum += price ;
                $id +=  $id. " , ";
                echo "$select_query_result";
                <a href="Cart-remove.php?id={$row['id']}" class="remove_item_link"> Remove </a>
            }
          }
          echo "Total :-" .$sum ;
          echo "'<a href="Success.php?link=' . $a . ' $id= $_GET['id']"> Finish </a>';";
        ?>
         <?php
       include 'footer.php';
       ?>
        </body>
        </html>