<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Fitness Member Registration Form :: Member</title> 
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
  <link href="reg/css/style.css" rel='stylesheet' type='text/css' />`
  <!--// Stylesheets -->
  <!--fonts-->
  <!-- title -->
  <link href="//fonts.googleapis.com/css?family=Alegreya+SC:400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- body -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <!--//fonts-->
</head>

<body>
  <header>
    <h1>Member Registration Form</h1>
  </header>
  <div class="w3ls-contact">
    <!-- form starts here -->
    <form action="#" method="post">
      <div class="agile-field-txt">
        <label>
          Name :</label>
        <div class="mr_agilemain">
          <div class="left-wthree">
            <input type="text" name="m_name" placeholder=" " width="100%" required="">
            
          </div>
          <div class="left-wthree">
            
          </div>
        </div>
      </div>
      <div class="agile-field-txt">
        <label>
          Address :</label>
        <input type="text" name="m_add" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          ID Proof :</label>
        <input type="text" name="id_proof" placeholder=" " required="" />
      </div>
          <div class="agile-field-txt">
        <label>
          Time :</label>
        <input type="text" name="m_time" placeholder=" " required="" />
      </div>
      
      <div class="gender_w3">
        <div class="w3_gender">
          <label>
            Age:</label>
          <div class="mr_agilemain">
            <input type="number" id="Numseats" required="" min="6" name="m_age">
          </div>
        </div>
        <div class="w3_gender">
          <label class="agile_rad">
            Gender:</label>
          <div class="mr_agilemain">
            <div class="left_w3">
              <input type="radio" id="test1" name="gender" checked>
              <label for="test1">Male</label>
            </div>
            <div class="left_w3">
              <input type="radio" id="test2" name="gender">
              <label for="test2">Female</label>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="agile-field-txt">
        <label>
          Email :</label>
        <input type="email" name="m_email" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          Mobile No:</label>
        <input type="text" name="m_phno" placeholder=" " required="" />
      </div>

      <div class="agile-field-txt">
        <label>
          Height :</label>
        <input type="text" name="m_height" placeholder="(cm) " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
          Weight:</label>
        <input type="text" name="m_weight" placeholder="(kg) " required="" />
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
    </form>
  </div>
  <!-- //form ends here -->
  <div class="copy-wthree">
    <p>© 2021 Fitness Member Registration Form. All Rights Reserved | Design by 
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
    $m_name=$_POST['m_name'];
    $m_add=$_POST['m_add'];
     $id_proof=$_POST['id_proof'];
     $m_time=$_POST['m_time'];
     $m_age=$_POST['m_age'];
     $gender=$_POST['gender'];
    $m_email=$_POST['m_email'];
    $m_phno=$_POST['m_phno']; 
    $m_height=$_POST['m_height']; 
    $m_weight=$_POST['m_weight'];    
    $user=$_POST['uname'];
    $pwd=$_POST['pwd'];
    
    $sql="INSERT INTO `club_fitness`.`member_reg` (`m_id`, `m_name`, `m_address`, `m_id_proof`, `m_time`, `age`, `gender`, `m_email`, `m_phno`, `m_height`, `m_weight`) VALUES (NULL, '$m_name', '$m_add', '$id_proof', '$m_time', '$m_age', '$gender', '$m_email', '$m_phno', '$m_height', 
    '$m_weight')";
    if($con->query($sql)===TRUE)
    {
        $sql2="select `m_id` from member_reg where m_phno='$m_phno' ";
         
            $res=$con->query($sql2);
            
if($res->num_rows>0)
{
    if($row=$res->fetch_assoc())
    {
        $reg_id=$row['m_id'];
        echo $reg_id;
        
    }
    
    }
        
        $sql1="INSERT INTO `club_fitness`.`login` (`log_id`, `username`, `password`, `user_type`, `reg_id`, `status`) VALUES (NULL, '$user', '$pwd', 'Member', '$reg_id', '0');";
        $con->query($sql1);
        echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
        header("Refresh:0; url=index.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
   echo "Error: " . $sql . "<br>" . $con->error;
    // header("Refresh:2; url=index.php");
    }
    
}