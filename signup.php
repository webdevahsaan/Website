
<?php 
require 'common.php';
?>
<?php 
 if(isset($_SESSION['email'])){
     header('location: products.php? Redirected to the products.php page');
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
        <div class="form1">
            <div class="row row-style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Sign Up</h4>
                        </div>
                        <div class="panel-body">
                         
                            <div class="row">
                                <div class="col-xs-10">
                                  <form method="post" action="signup_script.php">
                                  <div class="form-group">
                                     
                                      <input type="text" name="name" class="form-control" placeholder="Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" name="email" class="form-control" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                   </div>
                                   <div class="form-group">
                                     <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                                   </div>
                                   <div class="form-group">
                                     <input type="text" name="contact" class="form-control" placeholder="Contact">
                                   </div>
                                   <div class="form-group">
                                     <input type="text" name="city" class="form-control" placeholder="City">
                                   </div>
                                   <div class="form-group">
                                     <input type="text" name="address" class="form-control" placeholder="Address">
                                   </div>
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </form><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

        <?php
       include 'footer.php';
       ?>
</body>
</html>