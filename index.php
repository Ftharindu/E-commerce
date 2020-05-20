<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles\bootstrap-337.min.css">
    <link rel="stylesheet" href="styles\style.css">
    <link rel="stylesheet" href="font-awsome\css\font-awesome.min.css">
</head>

<body>
    <div id="top">
        <!-- top begin-->
        <div class="container">
            <!-- container begin-->
            <div class="col-md-6 offer">
                <!-- col-md-6 offer begin-->
                <a href="" class="btn btn-success" btn-am>welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
            </div><!-- col-md-6 offer finish-->
            <div class="col-md-6">
                <!-- col-md-6  begin-->
                <ul class="menu">
                    <!-- menu  begin-->
                    <li>
                        <a href="customer-register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Goto Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul><!-- menu finish-->
            </div><!-- col-md-6 finish-->
        </div><!-- container finish-->
    </div><!-- top finish-->

    <div id="navbar" class="navbar navbar-default">
        <!-- navbar navbar-default begin-->
        <div class="container">
            <!-- container begin-->
            <div class="navbar-header">
                <!-- navbar-header begin-->
                <a href="index.php" class="navbar-brand home">
                    <!-- navbar-brand home begin-->
                    <img src="images\ecom-store-logo.png" alt="M-devStore Logo" class="hidden-xs">
                    <img src="images\ecom-store-logo-mobile.png" alt="M-devStore mobile Logo" class="visible-xs">
                </a><!-- navbar-brand home finish-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div><!-- navbar-header finish-->
            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse begin-->
                <div class="padding-nav">
                    <!-- padding-nav begin-->
                    <ul class="nav navbar-nav left">
                        <!-- nav navbar-nav left begin-->
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact US</a>
                        </li>
                    </ul><!-- nav navbar-nav left finish-->

                </div>
                <!--padding-nav finish-->
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!-- btn navbar-btn btn-primary right begin-->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items In you Shpping Cart</span>
                </a>
                <!--btn navbar-btn btn-primary right finish-->
                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right begin-->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!-- btn btn-primary navbar-btn begin-->
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <!--btn btn-primary navbar-btn finish-->
                </div><!-- navbar-collapse collapse right finish-->
                <div class="collapse clearfix" id="search">
                    <!--collapse clearfix begin-->
                    <form method="get" action="result.php" class="navbar-form">
                        <!--navbar-form begin-->
                        <div class="input-group">
                            <!--input-group begin-->
                            <input type="text" class="form-control" placeholder="Seacrh" name="user_query" required>
                            <span class="input-group-btn">
                                <!--input-group-btn begin-->
                                <button type="submit" name="search" value="search" class="btn btn-primary">
                                    <!--btn btn-primary begin-->
                                    <i class="fa fa-search"></i>
                                </button>
                                <!--btn btn-primary finish-->
                            </span>
                            <!--input-group-btn finish-->
                        </div>
                        <!--input-group finish-->
                    </form>
                    <!--navbar-form finish-->
                </div><!-- collapse clearfix finish-->
            </div><!-- navbar-collapse collapse finish-->

        </div><!-- container finish-->
    </div><!-- navbar navbar-default finish-->

    <div class="container" id="slider">
        <!--container begin-->
        <div class="col-md-12">
            <!--col-md-12 begin-->
            <div class="carousel slider" id="myCarousel" data-ride="carousel">
                <!--carousel sider begin-->
                <ol class="carousel-indicators">
                    <!--carousel-indicators begin-->
                    <li class="archive" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!--caruosel-indicators finish-->
                <div class="carousel-inner">
                    <!--caruosel-inner begin-->
                    <div class="item active">
                        <img src="admin_area/slides_images/slider1.jpg" alt="slider image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slider2.jpg" alt="slider image 2">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/slider3.jpg" alt="slider image 3">
                    </div>

                </div>
                <!--caruosel-inner finish-->
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!--left carousel-control begin-->
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!--left carousel-control finish-->

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!--right carousel-control begin-->
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--right carousel-control finish-->
            </div>
            <!--carousel sider finish-->
        </div>
        <!--col-md-12 finish-->
    </div>
    <!--container finish-->

    <div id="advantages">
        <!--advantages Begin-->
        <div class="container">
            <!--container Begin-->
            <div class="same-height-row"><!--same-height-row Begin-->
                <div class="col-sm-4"><!--col-sm-4 Begin-->
                    <div class="box same-height"><!--box same-height Begin-->
                        <div class="icon"><!--icon Begin-->
                            <i class="fa fa-heart"></i>
                        </div><!--icon finish-->
                        <h3><a href="#">Best Offers</a></h3>
                        <p>We know the best possible service ever</p>
                    </div><!--box same-height finish-->
                </div><!--col-sm-4 finish-->
                <div class="col-sm-4"><!--col-sm-4 Begin-->
                    <div class="box same-height"><!--box same-height Begin-->
                        <div class="icon"><!--icon Begin-->
                            <i class="fa fa-tag"></i>
                        </div><!--icon finish-->
                        <h3><a href="#">Best Price</a></h3>
                        <p>Compare us with another store site, who have the best prices.</p>
                    </div><!--box same-height finish-->
                </div><!--col-sm-4 finish-->
                <div class="col-sm-4"><!--col-sm-4 Begin-->
                    <div class="box same-height"><!--box same-height Begin-->
                        <div class="icon"><!--icon Begin-->
                            <i class="fa fa-thumbs-up"></i>
                        </div><!--icon finish-->
                        <h3><a href="#">100% Original</a></h3>
                        <p>We just offer you the best and original products</p>
                    </div><!--box same-height finish-->
                </div><!--col-sm-4 finish-->
            </div><!--same-height-row finish-->
        </div>
        <!--container finish-->
    </div>  
    <!--advantages finish-->
    <div id="hot"><!--hot begin-->
        <div class="box"><!--box begin-->
            <div class="container"><!--container begin-->
               <div class="col-md-l2"><!--col-md-l2 begin-->
                    <H2>
                        Our Lastest Products
                    </H2>

               </div> <!--col-md-l2 finish-->
            </div><!--container finish-->
        </div><!--box finish-->
    </div><!--hot finish-->
        <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="detail.php">
                        <img src="admin_area\product_images\Product1.jpg" alt="Product 1">
                    </a>
                </div>
            </div>
        </div>
    <div id="content" class="container"><!--container begin-->


    </div><!--container finish-->
    <script src="js\jquery-331.min.js"></script>
    <script src="js\bootstrap-337.min.js"></script>

</body>

</html>