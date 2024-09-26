<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Fitness Club Registration Form :: Member</title> 
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Fitness Contact Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta-Tags -->
  <!-- Stylesheets -->
  <link href="reg/css/style.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <!-- title -->
  <link href="//fonts.googleapis.com/css?family=Alegreya+SC:400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- body -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <!--//fonts-->
</head>

<body style="background-image: url('g4.jpg');">
  <header>
    <h1>Fitness Club Registration Form</h1> 
  </header>
  <div class="w3ls-contact">
    <!-- form starts here -->
    <form action="#" method="post">
      <div class="agile-field-txt">
        <label>
          Gym Name :</label>
        <div class="mr_agilemain">
          <div class="left-wthree">
            <input type="text" name="c_name" placeholder=" " required="">
            
          </div>
          <div class="left-wthree">
            
          </div>
        </div>
      </div>
      
     
       
      <div class="agile-field-txt">
        <label>
          Address</label>
        <input type="text" name="c_add" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          Landmark</label>
        <input type="text" name="c_place" placeholder=" " required="" />
      </div>
        <div class="agile-field-txt">
        <label>
          Mobile No:</label>
        <input type="text" name="c_phno" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          Email :</label>
        <input type="email" name="c_email" placeholder=" " required="" />
      </div>
    
      
<div class="agile-field-txt">
        <label>
          User Name :</label>
        <input type="text" name="uname" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          Password:</label>
        <input type="password" name="pwd" placeholder=" " required="" />
      </div>
      <div class="w3ls-contact  w3l-sub">
        <input type="submit" value="Submit" name="freg">
      </div>
    </form>
  </div>
  <!-- //form ends here -->
  <div class="copy-wthree">
    <p>© 2021 Trainer Member Registration Form. All Rights Reserved | Design by 
      <a href="http://w3layouts.com/" target="_blank">Scopos Technologies PVT LTD Kollam</a> 
    </p>
  </div>
</body>
<!-- //Body -->

</html>


<?php
include_once 'config/conn.php';

if(isset($_POST['freg']))
{


    $c_name=$_POST['c_name'];
    if (empty($_POST['name']) || (!preg_match("/^[a-zA-Z ]*$/",$name))) {
    $nameError = true;      
} 
    $c_add=$_POST['c_add'];

     $c_place=$_POST['c_place'];

     $c_phno=$_POST['c_phno']; 

    $c_email=$_POST['c_email']; 

    $user=$_POST['uname'];

    $pwd=$_POST['pwd'];
    
    $sql="INSERT INTO `club_fitness`.`club_reg` (`c_id`, `club_name`, `club_address`, `club_place`, `club_phno`, `club_email`) VALUES (NULL, '$c_name', '$c_add', '$c_place', '$c_phno', '$c_email');";
    if($con->query($sql)===TRUE)
    {
        $sql2="select `c_id` from club_reg where `club_phno`='$c_phno' ";
         
            $res=$con->query($sql2);
            
if($res->num_rows>0)
{
    if($row=$res->fetch_assoc())
    {
        $reg_id=$row['c_id'];
        echo $reg_id;
        
    }
    
    }
        
        $sql1="INSERT INTO `club_fitness`.`login` (`log_id`, `username`, `password`, `user_type`, `reg_id`, `status`) VALUES (NULL, '$user', '$pwd', 'Club', '$reg_id', '0');";
        $con->query($sql1);
        echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
        header("Refresh:0; url=index.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
   echo "Error: " . $sql . "<br>" . $con->error;
     header("Refresh:2; url=index.php");
    }
    
}