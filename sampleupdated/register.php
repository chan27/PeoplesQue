<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>People's Q!</title>


<link href="css/bootstrap.min.css" rel="stylesheet">   
<link href="css/bootstrap-theme.min.css" rel="stylesheet">   
<link href="css/modern-business.css" rel="stylesheet">   
<link href="css/pq.css" rel="stylesheet">   
<script src="imsky-holder-3023cee/holder.js"></script>



    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
	<!-- The Header  FIXED-->
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">
    		<div class="navbar-header pq-navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand pq-navbar-brand" href="#"> <img src='img/pq-logo.png' /> </a>
    		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav navbar-nav">

				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                

                <!-- Dropdown for category menu -->
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> Categories <span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">

                        <li class="active"><a href="fnr.php">Food and Restaurants</a></li>
                        <li><a href="sports.php">Sports</a></li>
                        <li><a href="entertainment.php">Entertainment & Movies</a></li>
                        <li><a href="hnf.php">Health and Fitness</a></li>
                        <li><a href="music.php">Music</a></li>
                        <li><a href="olgames.php">Online Games</a></li>
                        <li><a href="socialnet.php">Social Networking</a></li>
                        <li class="divider"></li>
                        <li><a href="allcategories.php">See All..</a></li>
                  </ul>
                </li>

                <li><a href="about.php" ><span class="glyphicon glyphicon-flash"></span> About Us</a></li>
                <li><a href="faq.php" ><span class="glyphicon glyphicon-star"></span> FAQs</a></li>              
<!-- 				<li><a data-toggle="modal" href="#login"><span class="glyphicon glyphicon-user"></span>  Login</a></li>
 -->
			</ul>
			
			<div class="col-sm-3 col-md-3 pull-right">
				<form class="navbar-form navbar-search" style="width:100%;" action="browse-review.php" role="search">
    				<div class="input-group">
    					<input type="text" class="form-control" placeholder="Search keyword...." name="srch-term" id="srch-term">
    					<div class="input-group-btn">
    						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
    					</div>
    				</div>
				</form>	
			</div>
		</div>
	</div>
</nav>
<!-- End of Header -->	
<!-- Start Modal -->
<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
        <div class="modal-content pq-modal-body">
                <div class="modal-header pq-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Log In
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="form-group">
                            <div class="">									
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" id="username" class="form-control" placeholder="Username" />
                            </div>
                        </div>
                        <div class = "form-group">
                            <div class="">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class = "form-group form-inline">
                                <button type="button" class="btn btn-primary btn-sm" >Sign In</button>
                                <a href="register.php"> <large> Sign Up Now! </large> </a>
                        </div>
                        <a href="signup.php"> <small> Forgot your password? </small></a>
                        </form>
                </div>
        </div>
   </div>
</div> -->
<!-- End Modal -->



	<div class="container">
                    <!-- Registration Area -->
        <form  class="form-horizontal" id="registerHere" method='post' action=''>
            <fieldset>
                  <div class="col-md-6">
                    <h3 class="dark-grey">Registration</h3>
                    
                    <div class="form-group col-lg-12">
                        <label>Username</label>
                        <input type="" name="" class="form-control" id="username" value="" required="required" rel="popover"  title="Tips & Information" >
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label>Password</label>
                        <input type="password" name="" class="form-control" id="password" value="********" required="required" rel="popover"  title="Tips & Information">
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label>Confirm Password</label>
                        <input type="password" name="" class="form-control" id="cpassword" value="********" required="required" rel="popover"  title="Tips & Information">
                    </div>
                                    
                    <div class="form-group col-lg-6">
                        <label>Email Address</label>
                        <input type="email" name="" class="form-control" id="" value="" required="required" rel="popover"  title="Tips & Information">
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label>Confirm Email Address</label>
                        <input type="email" name="" class="form-control" id="" value="">
                    </div>          
                    
                    <div class="col-sm-6">
                        <input type="checkbox" class="checkbox" />Sign up for our newsletter
                    </div>

                    <div class="col-sm-6">
                        <input type="checkbox" class="checkbox" />Send notifications to this email
                    </div>              
                
                </div>
            
                <div class="col-md-6">
                    <h3 class="dark-grey">Terms and Conditions</h3>
                    <p>
                        By clicking on "Register" you agree to The Company's' Terms and Conditions
                    </p>
                    <p>
                        While rare, prices are subject to change based on exchange rate fluctuations - 
                        should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                    </p>
                    <p>
                        Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                    </p>
                    <p>
                        Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                    </p>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                    <div class="clearfix"> </div>
            </fieldset>
        </form>
            
	


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team CMC 2015</p>
                </div>
            </div>
        </footer>

    </div>
    </div> 
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
