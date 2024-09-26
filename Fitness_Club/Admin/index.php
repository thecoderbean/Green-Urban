<?php

	require_once 'admin_nav.php'; 
require_once '../config/conn.php';

    ?>
     <!-- Style CSS -->

    <link rel="stylesheet" href="style.css">
    
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <button class="w3-button w3-red" onclick="document.getElementById('id01').style.display='block'">Show Netwowk</button>
    <button class="w3-button w3-red" onclick="document.getElementById('id02').style.display='block'">Server Speed</button> 
    <button class="w3-button w3-red" onclick="document.getElementById('id03').style.display='block'">Update Admin Password</button> 
    <button class="w3-button w3-red" onclick="document.getElementById('id02').style.display='block'">Update Home Image</button> 
    <div id="id01" class="w3-panel w3-green w3-display-container" style="display:none">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-red w3-display-topright">x</span>
    <p>
  	<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
<!-- partial:index.partial.html -->
<div class="numbers">
	<h2>CURRENT NETWORK USERS</h2>
    <span class="numbers__window">
        <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073">1</span>
    </span>
    <span class="numbers__window">
        <span class="numbers__window__digit numbers__window__digit--2" data-fake="5207186394">5</span>
    </span>
    <span class="numbers__window">
        <span class="numbers__window__digit numbers__window__digit--3" data-fake="8395216407">2</span>
    </span>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section></p>
  <p>Click on the X to close this panel.</p>
</div>
 <div id="id02" class="w3-panel w3-green w3-display-container" style="display:none">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-red w3-display-topright">x</span>
    <p>
    <section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
<!-- partial:index.partial.html -->
<div class="numbers">
    <h2>Server Speed.</h2>
            <span class="numbers__window " data-fake="8642519073">
                <?php
$loadavgstats = substr(file_get_contents('/proc/loadavg'), 0, 14);
echo $loadavgstats;
?>
        </span>
</div>

<!-- partial -->
           
            </div>
        </div>
    </div>
</section></p>
  <p>Click on the X to close this panel.</p>
</div>

    		</div>
<div id="id03" class="w3-panel w3-green w3-display-container" style="display:none">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-red w3-display-topright">x</span>
    <p>
    <section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
<!-- partial:index.partial.html -->
    <form action="forgot_process.php" method="POST">
    <div class="login_form">
  <div class="form-group">
 <?php if(isset($_GET['err'])){
 $err=$_GET['err'];
 echo '<p class="errmsg">No user found. </p>';
} 
// If server error 
if(isset($_GET['servererr'])){ 
echo "<p class='errmsg'>The server failed to send the message. Please try again later.</p>";
   }
   //if other issues 
   if(isset($_GET['somethingwrong'])){ 
 echo '<p class="errmsg">Something went wrong.  </p>';
   }
// If Success | Link sent 
if(isset($_GET['sent'])){
echo "<div class='successmsg'>Reset link has been sent to your registered email id . Kindly check your email. It can be taken 2 to 3 minutes to deliver on your email id . </div>"; 
  }
  ?>
  <?php if(!isset($_GET['sent'])){ ?>
    <label class="label_txt">Enter old password </label>
    <input type="password" name="login_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" required="">
  </div>
  <?php } ?>
</div>
</form>
<!-- partial -->
           
            </div>
        </div>
    </div>
</section></p>
  <p>Click on the X to close this panel.</p>
</div>

	<div style="height:500px;">


			<div>
				<p style="text-align:center;color:royalblue;">All Rights Reserved | Design by
					<a href="https://scopos.in" target="_blank">Scopos Technologies PVT Ltd Kollam</a>
				</p>
				
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

