<?php
require_once '../config/conn.php';
$id=$_GET['rem'];
$up="delete member_reg,login from login inner join member_reg on login.reg_id=member_reg.c_id WHERE login.log_id='$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('Member Removed');</script>";
       header("Refresh:0; url=approve.php");
       
       
       
       ?>