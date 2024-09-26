<?php
session_start();
if (isset($_SESSION["username"])&&isset($_SESSION["address"])&&isset($_SESSION["email"])&&isset($_SESSION["id"])) 
{
    $username = $_SESSION["username"];
    $address = $_SESSION["address"];
    $email = $_SESSION["email"];
    $id = $_SESSION["id"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
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
   <link rel="stylesheet" href="Bill/style.css"  />
   

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

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
	      <a href="2.html">GREEN URBAN</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>GREEN URBAN</h3>  

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#about1" title="">Account</a></li>
				<li><a class="smoothscroll" href="#services" title="">Buy/Sell</a></li>
				<li><a class="smoothscroll" href="#about" title="">Billing</a></li>
				<li><a class="smoothscroll" href="#contact" title="">LogOut</a></li>						
			</ul>	
       </nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- account
   ================================================== -->
   <section id="about1">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h1 class="animate-intro">WELCOME</h1>
			  				<h3 class="animate-intro">
							 <?php echo $username;?>
				  			</h3>							

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
   <section id="services">
   
   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<h3>BUY/SELL</h3>
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->
   
   	<div class="row services-content">
   
   		<div class="services-list block-1-2 block-tab-full group">
   
   	      	<div class="bgrid service-item animate-this">	
    <a href="shopping/index.php">
   	      		<span class="icon"><i class="icon-paint-brush"></i></span>            
   </a>
   	            <div class="service-content">
                     <a href="shopping/index.php"><h3 class="h05">BUY</h3></a>
   	         	</div> 	         	 
   
   				</div> <!-- end bgrid -->
   
   				<div class="bgrid service-item animate-this">	
   <a href="Services/index.php">
   					<span class="icon"><i class="icon-earth"></i></span>                          
    </a>    
   	            <div class="service-content">	
                     <a href="Services/index.php"><h3 class="h05">SELL</h3></a>
                      </p>

   	            </div>	                          
   
   			   </div> <!-- end bgrid -->
   
   			                             
   
   				</div> <!-- end bgrid -->			   
   
   	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			
   
   </section> <!-- end services -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">
                        <div class="intro">
                      	</div>  
                         <p class="lead animate-this"><span>CURRENT STATUS </span>.</p>
                         <div class="tbody">
                         <div id="details" class="clearfix">
                         <div id="client">
                         <div class="to">TO:</div>
                         <h2 class="name"><?php echo $username;?></h2>
                         <div class="address"><?php echo $address;?></div>
                         <div class="email"><a><?php echo $email;?></a></div>
                         </div>
                         <div id="invoice">
                         <h1>INVOICE <?php echo $id;?></h1>
                         <div class="date">Date of Invoice:<p><span id="datetime"></span></p>
                         
                         <script>
                         var dt = new Date();
                         document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
                         </script></div>
                         </div>
                         </div>
                         <table border="0" cellspacing="1" cellpadding="1">
                         <thead>
                         <tr>
                         <th class="no">ID</th>
                         <th class="unit">STATUS</th>
                         <th class="qty">DELIVERY AGENT</th>
                         <th class="total">TOTAL</th>
                         </tr>
                         </thead>
                         <tbody>
                         <?php
                           $servername = "localhost";
                           $username = "root";
                           $password = "";
                           $dbname = "greenurban";

                           // Create connection
                           $conn = new mysqli($servername, $username, $password, $dbname);
                           // Check connection
                           if ($conn->connect_error) {
                             die("Connection failed: " . $conn->connect_error);
                           }

                           $sql = "SELECT * FROM orders WHERE uid ='$id'";
                           $result = $conn->query($sql);

                           if ($result->num_rows > 0) {
                             // output data of each row
                            $sum=0;
                             while($row = $result->fetch_assoc()) 
                             { ?>

                              <tr>
                              <td class="no">
                                  <?php echo $row['id']; ?>
                              </td>
                              <td class="unit">
                                <?php echo $row['orderstatus']; ?>  
                              </td>
                              <td class="qty">
                                  <?php echo $row['shipping']; ?>
                              </td>
                              <td class="total">
                                  <?php echo $row['totalprice']; ?>
                              </td>
                              </tr>

                              <?php 
                                $sum = $sum + $row['totalprice'];
                          }
                           } else {
                             echo "0 results";
                           }
                           $conn->close();
                           ?>
                         </tbody>
                         <tfoot style="padding-top: 20px;">
                         <tr>
                         <tr>
                         <td colspan="2"></td>
                         <td colspan="2">GRAND TOTAL</td>
                         <td><?php echo $sum;?></td>
                         </tr>
                         </tfoot>
                         </table>
                        <table border="0" cellspacing="1" cellpadding="1">
                         <thead>
                         <tr>
                         <th class="no">ID</th>
                         <th class="unit">metal</th>
                         <th class="qty">DELIVERY AGENT</th>
                         <th class="total">TOTAL</th>
                         </tr>
                         </thead>
                         <tbody>
                         <?php
                           // $servername = "localhost";
                           // $username = "root";
                           // $password = "";
                           // $dbname = "greenurban";

                           // // Create connection
                           // $conn = new mysqli($servername, $username, $password, $dbname);
                           // // Check connection
                           // if ($conn->connect_error) {
                           //   die("Connection failed: " . $conn->connect_error);
                           // }

                           // $sql = "SELECT * FROM servece WHERE uid ='$id'";
                           // $result = $conn->query($sql);

                           // if ($result->num_rows > 0) {
                           //   // output data of each row
                           //  $sum=0;
                           //   while($row = $result->fetch_assoc()) 
                           //   { ?>

                              <<!-- tr>
                              <td class="no">
                                  <?php echo $row['id']; ?>
                              </td>
                              <td class="unit">
                                <?php echo $row['plastic']; ?>  
                              </td>
                              <td class="qty">
                                  <?php echo $row['metal']; ?>
                              </td>
                              <td class="qty">
                                  <?php echo $row['kitchen']; ?>
                              </td>
                              <td class="total">
                                  <?php echo $row['drain']; ?>
                              </td>
                              </tr>
 -->
                              <?php 
                          // }
                          //  } else {
                          //    echo "0 results";
                          //  }
                          //  $conn->close();
                           ?>
                         </tbody>
                         </table>
                         <div id="thanks">Thank you!</div>
                         </p>
                         </div>
   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
	<!-- contact
   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>GREEN URBAN</h3>
   			<h1>LogOut
   			<br><br><a href="logout.php" class="myButton">LogOut</a></h1>
            </div> 
   	</div> 
   	<!-- end section-intro -->

</div> <!-- end footer-main -->

   	<div class="footer-bot">

      	<div class="row">
<div class="row narrow section-intro with-bottom-sep animate-this">
      		<div class="col-twelve">
		         	<span>GREEN URBAN</span> 
		         	<span>	         	
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
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>