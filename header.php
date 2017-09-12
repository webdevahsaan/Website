<!DOCTYPE html>
<html>
    <head>
        <title>Header Page</title>
        <meta charset="utf-8" name="viewport" content="width=device-width" , initial-scale=1.0>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
           <div class="navbar navbar-inverse navbar-fixed-top">
             <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="index.php">Lifestyle Store</a>
             </div>
             <div class="collapse navbar-collapse" id="myNavbar">
                 <ul class="nav navbar-nav navbar-right">
                     <?php
                     if(isset($_SESSION['email'])) {
                     ?>
                     <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                     <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                     <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                     ?>
                     <?php
                     } else {
                     ?>
                     <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                     <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <?php
                     }
                     ?>
                 </ul>
             </div>
             </div>
           </div>
    </body>
 </html>