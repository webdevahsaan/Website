<?php 
require 'common.php';
?>
<?php
if (isset($_SESSION['email'])) { 
  header('location: products.php'); 
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
        <div id="banner_image">
        	<div class="inner-banner-image">
        		<div class="banner_content">
        		 <h1 class="xlarge">We Sell Lifestyle.</h1>
                 <p class="large">“Flat 40% OFF on premium brands</p>
        			<a href="products.php" class="btn btn-danger btn-lg active shop">Shop Now</a>
        		</div>
        	</div>
        </div>
       <?php
       include 'footer.php';
       ?>
</body>
</html>