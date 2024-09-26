<?php
require_once '../config/conn.php';
$id=$_GET['rem'];
$up="delete club_reg,login from login inner join club_reg on login.reg_id=club_reg.c_id WHERE login.log_id='$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('Merchant Removed');</script>";
       header("Refresh:0; url=approve.php");
       
       
       
       ?>