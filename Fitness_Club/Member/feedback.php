<?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'member_nav.php';
	require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        
?>
<br><br><br><br>
<h1 style="text-align: center;font-size: 20px;">Add Feedback</h1><br><br><br>
<form method="post" action="">
	<div style="width: 500px;height: 500px;margin-left: 500px;">
<div class="form-group">
  <label for="sel1">Select User:</label>
  <select class="form-control" style="width: 300px" name="type">
    <option value="admin">Admin</option>
   
    <option value="member">Trainer</option>
   
  </select>
</div>
	<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment" ></textarea>
</div>
<button type="submit" class="btn btn-success" name="send">Send Feedback</button>
</form>
</div>
<?php
if(isset($_POST['send']))
{
	$type=$_POST['type'];
	$comment=$_POST['comment'];
	$sql="INSERT INTO `club_fitness`.`tbl_feedback` (`f_id`, `u_id`, `u_type`, `comment`) VALUES (NULL, '$fid', '$type', '$comment');";

     if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Feedback Send');</script>";
      
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";

    
    }     
}
?>

   





 <?php
}
?>