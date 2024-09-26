
<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'club_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>

	<link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!--header-->
	<h1>
		<span>F</span>itness
		<span>T</span>rainer
		<span>F</span>orm</h1>
	<!--//header-->
	<!-- content -->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<form action="#" method="post">
				<h2> Add Your Trainers</h2>
				<div class="form-style-agile">
					<input placeholder="Trainer Name" name="t_name" type="text" required="">
				</div>
				<div class="form-style-agile">
					<input placeholder="Trainer Address" name="t_add" type="text" required="">
				</div>
				<div class="form-style-agile">
					<input placeholder="Trainer Place" name="t_place" type="text" required="">
				</div>

				<div class="form-style-agile">
					<input placeholder="Trainer Experience" name="t_exp" type="text" required="">
				</div>

				<div class="form-style-agile">
					<input placeholder="Phone Number" name="t_phno" type="text" required="">
				</div>

				<div class="form-style-agile">
					<input placeholder="Email" name="t_email" type="email" required="">
				</div>
				
				<div class="form-style-agile">
					<input placeholder="User Name" name="uname" type="text" required="">
				</div>
				<div class="form-style-agile">
					<input placeholder="Password" name="pwd" type="text" required="">
				</div>
				
				
				<input type="submit" value="Add" name="treg">
			</form>
		</div>
	</div>
	
    <?php

if(isset($_POST['treg']))
{
    $t_name=$_POST['t_name'];
    $t_add=$_POST['t_add'];
     $t_place=$_POST['t_place'];
     $t_exp=$_POST['t_exp'];
     $t_phno=$_POST['t_phno']; 
    $t_email=$_POST['t_email']; 
    $user=$_POST['uname'];
    $pwd=$_POST['pwd'];

    $sql="INSERT INTO `club_fitness`.`tbl_trainer` (`t_id`, `c_id`, `t_name`, `t_address`, `t_place`, `t_exp`, `phno`, `email`) VALUES (NULL, '$fid', '$t_name', '$t_add', '$t_place', '$t_exp', '$t_phno', '$t_email')";
    
   
    if($con->query($sql)===TRUE)
    {
        $sql2="select `t_id` from tbl_trainer where `phno`='$t_phno' ";
         
            $res=$con->query($sql2);
            
if($res->num_rows>0)
{
    if($row=$res->fetch_assoc())
    {
        $reg_id=$row['t_id'];
        echo $reg_id;
        
    }
    
    }
        
        $sql1="INSERT INTO `club_fitness`.`login` (`log_id`, `username`, `password`, `user_type`, `reg_id`, `status`) VALUES (NULL, '$user', '$pwd', 'Trainer', '$reg_id', '1')";
        $con->query($sql1);
        echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
        header("Refresh:0; url=trainer_add.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
   echo "Error: " . $sql . "<br>" . $con->error;
     //header("Refresh:2; url=index.php");
    }
    
}



  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>