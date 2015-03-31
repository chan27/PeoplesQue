<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>People's Q!</title>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->

<link href="../css/bootstrap.min.css" rel="stylesheet">   
<link href="../css/bootstrap-theme.min.css" rel="stylesheet">   
<link href="../css/modern-business.css" rel="stylesheet">   
<link href="../css/pq.css" rel="stylesheet">   
<script src="../imsky-holder-3023cee/holder.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->


    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    			<a class="navbar-brand pq-navbar-brand" href="#"> <img src='../img/pq-logo.png' /> </a>
    		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav navbar-nav">

				<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                

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

                <li><a href="../about.php" ><span class="glyphicon glyphicon-flash"></span> About Us</a></li>
                <li><a href="../faq.php" ><span class="glyphicon glyphicon-star"></span> FAQs</a></li>              
				<li><a data-toggle="modal" href="#login"><span class="glyphicon glyphicon-user"></span>  Login</a></li>

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
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <a href="signup.php"> <large> Sign Up Now! </large> </a>
                        </div>
                        <a href="signup.php"> <small> Forgot your password? </small></a>
                        </form>
                </div>
        </div>
   </div>
</div>
<!-- End Modal -->

					<!-- start 1st row -->

	<div class="container">
<!-- Hi Team! Please pick na lang kayo which is better to consider when viewing reviews. This horizontal one or the vertical one.. for me i'll choose the second one. -->

<!-- Horizontal view -->
                <div class="row">
                        <h1> <i class="glyphicon glyphicon-search"></i> Foods and Restaurants</h1>
                </div>   

        <div class="panel panel-primary">
            <div class="panel-heading">Sinigang Na Lechon</div>
                <div class="panel-body">
                    <!-- <p><img src='../img/sinigawanglechon.jpeg'/></p>  -->
                    <b>Nutrition Information/serving:</b>
                    <p>One of a kind Filipino recipe! Roasted suckling pig and fresh vegetables simmered in tamarind broth.</p>
                    <p>Calories 258, Carbohydrates 8g, Protein 25g, Fat 14g, Vitamin C 13mg, Iron 2mg, Vitamin A 358mcg</p>
                     
                    <p>To lessen fat intake when the soup is cold remove the layer of fat that has formed on the surface and reheat before serving.</p>
                     
                    <p>Lechon's crispy brown skin is the result of the high temperature during roasting which cannot be achieved in other cooking methods. This gives the aroma and meaty flavor of roasted meats. So when used in stewed or simmered dishes like sinigang it adds a depth of flavor to the dish.</p>
                </div>
                
                <div class="panel-footer">

                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-thumbs-up"></i> Up</button>
                        </div>
                    
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-thumbs-down"></i> Down</button>
                        </div>
                    
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> Comment</button>
                        </div>
                    </div>

                </div>
            </div>
<!-- End of horizontal view -->
						
                        <!-- Vertical view -->
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Food Label</h3>
            <p>Food description Food description Food description Food description Food description Food description Food description Food description Food description Food description </p>
                <p><a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a> <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a> <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-pencil"></i></a> <a href="reviewdetails.php" class="btn btn-info" role="button"><i class="glyphicon glyphicon-share-alt"></i> Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Food Label</h3>
            <p>Food description Food description Food description Food description Food description Food description Food description Food description Food description Food description </p>
                <p><a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a> <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a> <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-pencil"></i></a> <a href="reviewdetails.php" class="btn btn-info" role="button"><i class="glyphicon glyphicon-share-alt"></i> Details</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="caption">
            <h3>Food Label</h3>
            <p>Food description Food description Food description Food description Food description Food description Food description Food description Food description Food description </p>
                <p><a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a> <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a> <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-pencil"></i></a> <a href="reviewdetails.php" class="btn btn-info" role="button"><i class="glyphicon glyphicon-share-alt"></i> Details</a></p>
        </div>
      </div>
    </div>
          <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="Generic placeholder thumbnail">
          <div class="ca1ption">
            <h3>Food Label</h3>
            <p>Food description Food description Food description Food description Food description Food description Food description Food description Food description Food description </p>
                <p><a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-thumbs-up"></i></a> <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-thumbs-down"></i></a> <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-pencil"></i></a> <a href="reviewdetails.php" class="btn btn-info" role="button"><i class="glyphicon glyphicon-share-alt"></i> Details</a></p>
        </div>
      </div>
    </div>
  
  </div>

				      <!-- End of Vertical View -->     
                <div class="clearfix"> </div>
    
    
	


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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
