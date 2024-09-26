
 <?php
require_once '../config/conn.php';
$sid=$_GET['rem'];

$up="DELETE FROM `tbl_package` WHERE `tbl_package`.`p_id` = '$sid'";
$con->query($up);
echo "<script type='text/javascript'>alert('package Removed');</script>";
       header("Refresh:0; url=view_pkg.php");
       
       
       
       ?>