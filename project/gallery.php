<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>photo gallery</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><span><i>Isabela foundation</i></span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
    <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Isabela foundation<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a href="a.html">About Isabella</a></li>
                    <li><a href="b.html">About the Foundation</a></li> 
                        
                    <li><a href="c.html">Our chairperson</a></li>   	
					 <li><a href="d.html">Our Board</a></li>   
					
                  </ul>
                </li>  
				  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Activities<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="environment.php">Environment</a></li>
                    
                                  
                  </ul>
                </li>  
                
				    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Get involved<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="work.html">work with us</a></li>
                                  
                  </ul>
                </li>  
				
                             
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="finan.html">Financial statement</a></li>
                   
					 <li><a href="gallery.php">photo gallery</a></li>
                    <li><a href="#">video gallery</a></li>
					
                                 
                  </ul>
                </li>               
                <li><a href="contact.html">Contact us</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
                	<?php
       
       include 'connection.php';
	
	$query = "select * from image1";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
			
	
						
					
						
					
						
	}
						?>
               	<?php
       
       include 'connection.php';
	
	$query = "select * from image2";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
					
	
						
					
						
					
						
	}
						?>
                
                <?php
       
       include 'connection.php';
	
	$query = "select * from image3";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
						
	
						
					
						
					
						
	}
						?>
                <?php
       
       include 'connection.php';
	
	$query = "select * from image4";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
				
	
						
					
						
					
						
	}
						?>
                <?php
       
       include 'connection.php';
	
	$query = "select * from image5";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
						
	
						
					
						
					
						
	}
						?>
               <?php
       
       include 'connection.php';
	
	$query = "select * from image6";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
					
	
						
					
						
					
						
	}
						?>
                <?php
       
       include 'connection.php';
	
	$query = "select * from image7";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
						
	
						
					
						
					
						
	}
						?>
               <?php
       
       include 'connection.php';
	
	$query = "select * from image8";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $user_id = $row[1];
		$b=$row[2];
		$c=$row[3];
         
		
		                echo $user_id;
						echo $b;
						echo $c;
			
	
						
					
						
					
						
	}
						?>
                 
                
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>OUR OFFICE</h3>
                <p>dHAKA BANGLADESH,elephent road 121 dhaka </p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>More</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our online news portal</a></li>
                  <li><a href="#">youtube channel</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Donation form</a></li>
                  <li><a href="#">join us</a></li>
               
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved by Isabela Foundation</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="http://wpfreeware.com/" rel="nofollow">Isabela Foundation</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>