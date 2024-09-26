<?php
require_once '../config/conn.php';
$id=$_GET['app'];
$up="UPDATE `pkg_conform` SET `status` = '1' WHERE `pkg_conform`.`p_id` = '$id'";
$con->query($up);
echo "<script type='text/javascript'>alert('Package Confirmed');</script>";
       header("Refresh:0; url=approval.php");
       
       
       
       ?>