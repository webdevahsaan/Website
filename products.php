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
    <?php 
    include 'header.php';
    include 'check-if-added.php';
    ?>
        <div class="container">
            <div class="jumbotron jumbo">
                <h1>“Welcome to our Lifestyle Store!.”</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Cameras.jpg" alt="Cannon Camera" class="img-responsive">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price: Rs. 36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Nikon.jpg" alt="Sony DSLR" class="img-responsive">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 40000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/sony1.jpg" alt="Sony DSLR" class="img-responsive">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 50000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/olympus.jpg" alt="Olympus DSLR" class="img-responsive">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 80000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/watch1.jpg" alt="Titan Watch" class="img-responsive">
                    <div class="caption">
                        <h3>Titan Modal #301</h3>
                        <p>Price: Rs. 13000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/watch2.jpg" alt="Titan Watch" class="img-responsive">
                    <div class="caption">
                        <h3>Titan Modal #201</h3>
                        <p>Price: Rs. 3000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/watch3.jpg" alt="HTM Milan Watch" class="img-responsive">
                    <div class="caption">
                        <h3>HTM Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/watch4.jpg" alt="Faber Luba Watch" class="img-responsive">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/shirt1.jpg" alt="H&W Shirt" class="img-responsive size">
                    <div class="caption">
                        <h3> H & W </h3>
                        <p>Price: Rs. 800.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/shirt2.jpg" alt="Luis Phil" class="img-responsive size">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/shirt3.jpg" alt="John Zok" class="img-responsive size">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/shirt4.jpg" alt="Jhalsani" class="img-responsive size">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1300.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            //We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) {
                                 //This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled> Added to Cart 
                                </a>';
                            }
                            else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php 
                            }

                        }
                        ?>
                    </div>
                </div>
            </div>

            </div>

             <?php
       include 'footer.php';
       ?>
</body>
</html>