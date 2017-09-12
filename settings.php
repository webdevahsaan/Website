<?php
require 'common.php';
if(!issset($_SESSION['email'])){
  header('location: index.php?');
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
                    <div class="container-fluid">

                            <div class="row">
                                <div class="col-xs-6">
                                  <form method="post" action="settings_scripts.php" class="form_align">
                                  <h3>Change Password</h3>
                                   <div class="form-group">
                                       <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                                   </div>
                                   <div class="form-group">
                                       <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                   </div>
                                   <div class="form-group">
                                       <input type="password" name="retype_new_password" class="form-control" placeholder="Re-type Password">
                                   </div>
                                   <button type="submit" class="btn btn-primary">Change</button>
                                </form><br>
                            </div>
                        </div>
                    </div>

               <?php
       include 'footer.php';
       ?>
        </body>
        </html>