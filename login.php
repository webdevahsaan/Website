<?php 
require 'common.php';
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
     <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
         </div>
        </nav>
        <div class="form1">
            <div class="row row-style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a Purchase</p>
                            <div class="row">
                                <div class="col-xs-10">
                                  <form method="post" action="login_submit.php">
                                   <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="email" name="email" class="form-control" placeholder="something@example.com">
                                   </div>
                                   <div class="form-group">
                                       <label for="password">Password</label>
                                       <input type="password" name="password" class="form-control">
                                   </div>
                                   <button type="submit" class="btn btn-primary">Log In</button>
                                </form><br>
                            </div>
                        </div>
                    <div class="panel-footer">
                        <h4>Don't have an account? <a href="signup.php"> Register</a></h4>
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