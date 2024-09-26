<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'member_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];
$sql="SELECT `username` FROM `login` WHERE `reg_id` = '$fid' AND `user_type` = 'member'";
$res=$con->query($sql); 
 if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
$uname=$row['username'];
//echo $uname;





       // echo $fid;
    ?>

<h1 style="text-align:center;color: yellowgreen;">Attendance</h1>
<br>
<form method="post" action="">
<table style="width:70%;" align="center">
  <tr><td>Select Date</td>
      <td><input type="date" name="a_date"></td></tr>
      <tr><td>&nbsp</td><td>&nbsp</td></tr>
      <tr>
        <td>Present
      <td><input type="radio" value="1" name="m_at">Yes<br><input type="radio" value="0" name="m_at">No</td>
        <tr><td>&nbsp</td><td>&nbsp</td></tr>
          <tr><td>&nbsp</td><td><input type="submit" name="send" value="send"> </td></tr>
  </tr>
  
</table>
</form>


    <?php
    }
}
  }
if(isset($_POST['send']))
{
  $date=$_POST['a_date'];
  $present=$_POST['m_at'];

  $sql="INSERT INTO `club_fitness`.`attendance` (`a_id`, `m_id`,`username`, `date`, `present`, `staus`) VALUES (NULL, '$fid','$uname', '$date', '$present', '0')";

    if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Your attendance recorded');</script>";
        header("Refresh:0; url=attendance.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";

    header("Refresh:2; url=attendance.php");
    }     

}




  ?>
