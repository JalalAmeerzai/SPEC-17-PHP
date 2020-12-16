

<?php
	$currentState="#explore";

	$toShow ='<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>Registrations will begin in</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p class="subt">days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="subt">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="subt">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="subt">seconds</p>
						</li>				
					</ul>
				</div>
			</div>
			
		</div>
	</section>';
	
	date_default_timezone_set("Asia/Karachi");
	$today = date("Y-m-d");
	$date = "2017-07-01";

	if($today >= $date){
		$currentState="#register";
		
		$toShow = '<section id="register">
		<h2 class="heading">Register Now!</h2>
		<h4 class="heading">Prize Money Upto</h4>
		<h3 class="heading">200,000</h3>
		<h4 class="heading">Get Registered in SPEC17</h4>
		<a href="#"><h5 class="heading bt">Get Registered<i class="fa fa-angle-right"></i></h5></a>			</section>';
		
	}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPEC'17 Official website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
   
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						
						<a href="https://www.facebook.com/NEDSPEC/"><i class="fa fa-facebook"></i></a>
						<a href="https://mail.google.com"><i class="fa fa-google-plus"></i></a>
						
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll"><a href="#home">Home</a></li>
							<li class="scroll"><a href="#sponsor">Competitions</a></li>
		                    <li class="scroll"><a href="<?php echo $currentState;?>">Registration</a></li>                         
		                    <li class="scroll"><a href="#event">Our Team</a></li>
		                   </li>
		                    <li class="scroll"><a href="#contact">Contact Us</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			
			<div class="carousel-inner">
				
				<div class="item active">
					<img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">						
					
				</div>
							
			</div>
		</div>    	
    </section>
	<!--/#home-->

	
	
	
	
	
	
	
	
	<section id="sponsor">
		<h2 class="heading">Competitions And Exhibitions</h2>
		<h3 class="heading">SPEC 17 brings you 9 Grueling Competitions</h3>
		
		
		
<section class="c ">    
	<div class="container">
		
		<a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c1.png" alt="event-image">
					<h4>Project Exhibition</h4>
					
				</div>
            </div>
		</a>
			
			
            
       <a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c2.png" alt="event-image">
					<h4>Robo Intellect</h4>
				</div>
            </div>
		</a>
				
				
           
            <a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c7.png" alt="event-image">
					<h4>Industry Mentation</h4>
				</div>
            </div>
		</a>
			   
			   
           
           <a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c4.png" alt="event-image">
					<h4>Quiz</h4>
				</div>
            </div>
		</a>
		
		
		
		<a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c5.png" alt="event-image">
					<h4>Gaming</h4>
				</div>
            </div>
		</a>
		
		
		
		<a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c6.png" alt="event-image">
					<h4>Circuit Designing</h4>
				</div>
            </div>
		</a>
		
		
		
		
		<a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c3.png" alt="event-image">
					<h4>Speed Programming</h4>
				</div>
            </div>
		</a>
		
		
		
		
		<a href="#">
            <div class="col-md-3 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c8.png" alt="event-image">
					<h4>CAD Designing</h4>
				</div>
            </div>
		</a>
		
		<a href="#">
            <div class="col-md-12 col-sm-12">
                <div class="single-event">
					<img class="img-responsive" src="images/event/c9.png" alt="event-image">
					<h4>Photography</h4>
				</div>
            </div>
		</a>
		
		
	
				
				
 </section>
		
</section>
		
		
		
		
	
	<?php echo $toShow;?>    <!--REGISTRATION-->
	
	
	
	
	

	
	
	
	<section id="event">
		<h2 class="heading">Our Team</h2>
		
		
		
<section class="service-w3ls">    
	<div class="container">
		
		
            <div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/1.jpg" alt="event-image">
					<h4>Kamaal Hussain</h4>
					<h5>President</h5>
				</div>
            </div>
			
			
            
            <div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/2.jpg" alt="event-image">
					<h4>Ghayas Khan</h4>
					<h5>Vice-President</h5>
				</div>
            </div>
				
				
           
            <div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/3.jpg" alt="event-image">
					<h4>Shaista Khalid</h4>
					<h5>General Secretary</h5>
				</div>
            </div>
			   
			   
           
            <div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/4.jpg" alt="event-image">
					<h4>Yasaal Nasir</h4>
					<h5>Managing Director</h5>
				</div>
            </div>
		
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/5.jpg" alt="event-image">
					<h4>Waqas Rashid</h4>
					<h5>Finance Director</h5>
				</div>
            </div>
		
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/6.jpg" alt="event-image">
					<h4>M. Hashir</h4>
					<h5>Technical Head</h5>
				</div>
            </div>
		
		
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/7.jpg" alt="event-image">
					<h4>Osama Panjwani</h4>
					<h5>Project Exhibition</h5>
				</div>
            </div>
		
		
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/8.jpg" alt="event-image">
					<h4>M. Armash Khan</h4>
					<h5>Robo Intellect</h5>
				</div>
            </div>
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/9.jpg" alt="event-image">
					<h4>Abdul Samad</h4>
					<h5>Speed Programming</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/10.jpg" alt="event-image">
					<h4>Mohsin Tariq Khan</h4>
					<h5>Industry Mentation</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/11.jpg" alt="event-image">
					<h4>Syed Anas Ejaz</h4>
					<h5>Quiz</h5>
				</div>
            </div>
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/12.jpg" alt="event-image">
					<h4>Ali Razzaque khan</h4>
					<h5>Circuit Designing</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/13.jpg" alt="event-image">
					<h4>Tahir Mehmood</h4>
					<h5>Gaming</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/14.jpg" alt="event-image">
					<h4>Syed Raza Imam</h4>
					<h5>CAD Designing</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/15.jpg" alt="event-image">
					<h4>Syed Ali Abbas</h4>
					<h5>Photography</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/16.jpg" alt="event-image">
					<h4>M. Naufil</h4>
					<h5>Graphics Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/17.jpg" alt="event-image">
					<h4>S. Musab Raza</h4>
					<h5>Management Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/18.jpg" alt="event-image">
					<h4>Khadija Alam</h4>
					<h5>Planning Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/19.jpg" alt="event-image">
					<h4>M. Waseem Baig</h4>
					<h5>Marketing Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/20.jpg" alt="event-image">
					<h4>Aroosa Azam</h4>
					<h5>Documentation Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/21.jpg" alt="event-image">
					<h4>Neha Arshad</h4>
					<h5>Creativity Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/22.jpg" alt="event-image">
					<h4>H.M. Talha Siddiqui</h4>
					<h5>Promotion Head</h5>
				</div>
            </div>
		
		
		<div class="col-md-2 col-sm-6">
                <div class="single-event">
					<img class="img-responsive" src="images/event/23.jpg" alt="event-image">
					<h4>Basim Ahsan</h4>
					<h5>Registration Head</h5>
				</div>
            </div>
        
	
				
				
 </section>
		
</section><!--/#event-->

		
		

		
		
		
		
		

		
		
		
		
		
		
	
	<section id="contact">
		<h2 class="heading">Contact Us</h2>
		<div class="contact-section">
			
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: neduetspec17@gmail.com<br>
								Phone: 0332-3195535<br>
							</address>
						</div>
						
					</div>
					<div class="col-md-6">
						<div id="contact-section">
							<h3>Visit Us</h3>
							<address>
								NED University of Engineering and Technology. ,<br>
								University Road,<br>
								75270<br>
								Karachi
							</address>
					    	
					    		       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2017<a target="_blank" href="#"> SPEC'17</a>. All Rights Reserved. <br> Designed by <a target="_blank" href="#">BitsToBytes</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>  
</body>
</html>