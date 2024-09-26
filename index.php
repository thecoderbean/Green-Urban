<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<html class="no-js" lang="en"> 
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>GREEN URBAN</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  
   <link rel="shortcut icon" href="../favicon.ico"> 
   <link rel="stylesheet" type="text/css" href="css1/demo.css" />
   <link rel="stylesheet" type="text/css" href="css1/style2.css" />
   <link rel="stylesheet" type="text/css" href="css1/animate-custom.css" />
   

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="index.html">GREEN URBAN</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>GREEN URBAN</h3>  

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="">About</a></li>
				<li><a class="smoothscroll" href="#services" title="">Services</a></li>
				<li><a class="smoothscroll" href="#portfolio" title="">Showcase</a></li>
				<li><a class="smoothscroll" href="#contact" title="">Login</a></li>						
			</ul>	
       </nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h1 class="animate-intro">GREEN URBAN</h1>
				  			<h3 class="animate-intro">
							We make Earth a better place
				  			</h3>	

				  			<div class="more animate-intro">
				  				<a class="smoothscroll button stroke" href="#about">
				  					Learn More
				  				</a>
				  			</div>							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->
		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About Us</h3>
                                        <h6>
                                           
				</div>  
                         <p class="lead animate-this"><span>Green Urban</span> is a agency affliated to Govt of kerala,we are intended to create the world a better place.<br>Recycling is very important as waste has a huge negative impact on the natural environment.<br> Harmful chemicals and greenhouse gasses are released from rubbish in landfill sites.<br> Recycling helps to reduce the pollution caused by waste.<br> Habitat destruction and global warming are some the affects caused by deforestation.</p>	

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<h3>Services</h3>
   			   <h1>What We Do.</h1>
   			
   			   <p class="lead">We collect scrap materials from homes with fare prices and recycle that to save mother earth.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">

	      	<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="icon-paint-brush"></i></span>            

	            <div class="service-content">
	            	<h3 class="h05">Collection</h3>

		            <p>Recyclable materials are collected and a fair price is given to the seller ,Garbage is collected via price per kg. .
	         		</p>	         		
	         	</div> 	         	 

				</div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-earth"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Selling</h3>  

		            <p>Starch bag, paper bag,cloth bag,Aluminium  and degradable straws are sold to the coustomer which help shaping our environment.
	         		</p>	         		
	            </div>	                          

			   </div> <!-- end bgrid -->

			                             

				</div> <!-- end bgrid -->			   

	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
   <section id="portfolio">
   	
   	<div class="intro-wrap">

   		<div class="row narrow section-intro with-bottom-sep animate-this">
	   		<div class="col-twelve">
	   			<h3>Showcase</h3>
		   		<h1>See what we want to change</h1>  			
		   		
		   		<p class="lead"></p>	   			
	   		</div>   		
	   	</div> <!-- end row section-intro -->   		

   	</div> <!-- end intro-wrap -->   	

   	
   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/shutterbug.jpg" data-sub-html="#01" > 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/shutterbug.jpg" alt="Skaterboy">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					    
		     					   </span>
		     					   <h3 class="folio-title"></h3>	     					   
		     					</div>                                        
	                  </a>
	               </div> <!-- end item-wrap -->
						
						<div id="01" class='hide'>
							<h4></h4>
							<p></div>
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/yellowwall.jpg" data-sub-html="#02"> 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/yellowwall.jpg" alt="Shutterbug">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					     
		     					   </span>
		     					   <h3 class="folio-title"></h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="02" class='hide'>
							<h4></h4>
							<p></div>	               
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/architecture.jpg" data-sub-html="#03" >   	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/architecture.jpg" alt="Explore">	                     
	                     <div class="item-text">	                     		     					    
		     					   <span class="folio-types">
		     					    
		     					   </span>
		     					   <h3 class="folio-title"></h3>
		     					</div>                                        
	                  </a>
	                  <a href="" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->	

	               <div id="03" class='hide'>
							<h4></h4>
                                                        </div>               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/minimalismo.jpg"  data-sub-html="#04" >
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/minimalismo.jpg" alt="Minimalismo">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					   
		     					   </span>
		     					   <h3 class="folio-title"></h3>
		     					</div>                                        
	                  </a>
	                  <a href="" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="04" class='hide'>
							<h4></h4>
				</div>  	               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/skaterboy.jpg"  data-sub-html="#05" >  	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/skaterboy.jpg" alt="Bicycle">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					    
		     					   </span>
		     					   <h3 class="folio-title"></h3>
		     					</div>                                        
	                  </a>
	                  <a href="" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="05" class='hide'>
							<h4></h4>
							</div>	               
	        		</div> <!-- end folio-item -->
	           
					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/salad.jpg"  data-sub-html="#06">     	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/salad.jpg" alt="Salad">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					     
		     					   </span>
		     					   <h3 class="folio-title"></h3>
		     					</div>                                        
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="06" class='hide'>
							<h4></h4>
					</div>	               
	        		</div> <!-- end folio-item -->   				

   			</div> <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->   	

   </section>  <!-- end portfolio -->

   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="animate-this">Motivated by.</h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

               <li>
                  <p>Plastic will be the main ingredient of all our grandchildren's recipes.
                      </p> 

                  <div class="testimonial-author">
                    	<img src="images/avatars/user-02.jpg" alt="Author image">
                    	<div class="author-info">
                    		Anthony T. Hincks
                    		<span class="writer">writer.</span>
                    	</div>
                  </div>                 
             	</li> <!-- end slide -->

               <li>
                  <p>
                 The greatest threat to our planet is the belief that someone else will save it 
                  </p>

               	<div class="testimonial-author">
                    	<img src="images/avatars/user-03.jpg" alt="Author image">
                    	<div class="author-info">
                    		Robert Swan
                    		<span>OBE, FRGS winner.</span>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

            </ul> <!-- end slides -->

         </div> <!-- end testimonial-slider -->         
        
      </div> <!-- end flex-container -->

   </section> <!-- end testimonials -->


	<!-- stats
   ================================================== -->
    <!-- end clients -->


	<!-- contact
   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>GREEN URBAN</h3>
   			<h1>Login</h1>

   			<p class="lead">Loging in can get you the acess of selling Garbage (-₹3)/kg ,Scrap re-usable/recylable (+fair pricing) ,Environment friendly packaging items(-fair pricing)
   			</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">
<!-- form -->
 <div class="container">
   <div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
				<div class="error-msg"></div>
				<div class="row">
						<div class="inline-block">
							
								<div class="col-twelve">
								<h3 style="color: whitesmoke;">USERNAME</h3></div>
								<span class="required error" id="username-info"></span>
							</div>
							<input style="padding-right: 500px;"class="input-box-130" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
								
								<div class="col-twelve"><h3 style="color: whitesmoke;">PASSWORD</h3></div><span class="required error" id="login-password-info"></span>
							</div>
							<input style="padding-right: 500px;" class="input-box-130" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
				<div class="login-signup">
				<a href="user-registration.php" class="btn btn-success btn-lg mb-1">Sign up</a>
			</div>
			</div>
		</div>
	</div>

      </section>
  </div>
 <!-- end form -->
</div> <!-- end footer-main -->

   	<div class="footer-bot">

      	<div class="row">
<div class="row narrow section-intro with-bottom-sep animate-this">
      		<div class="col-twelve">
		         	<span>GREEN URBAN</span> 
		         	<span>Design by bestin_s_jorly		         	
		         </div>	
		         </div>               
	      	</div>

      	</div>   	

      </div> <!-- end footer-bottom -->

      <div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#top">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
		</div>		
   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>