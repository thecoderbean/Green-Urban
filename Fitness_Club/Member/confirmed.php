<?php
session_start();
//$pid=$_GET['sid'];
if(isset($_SESSION['s_id']))
{
	require_once 'member_nav.php'; 
        include_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
       // echo $fid;
        ?>

<h1 style="text-align:center;color: navajowhite;">View Your Confirmed Packages
    
</h1>
<table style="width:70%;" align="center" class="table table-bordered">
   <th>ID</th>
   <th>Member NAme</th>
   <th>Phone NUmber</th> 
   <th>Package Name</th>
   <th>Rate</th>
   <th>Payment</th>




<?php
$sql="SELECT * FROM `pkg_conform` WHERE `m_id` = '$fid'";
 $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
?>
<tr>
    <td> <?php echo $row['o_id'] ?></td>
<td> <?php echo $row['m_name'] ?></td>
<td> <?php echo $row['m_phno'] ?></td>
<td> <?php echo $row['pkg_name'] ?></td>
<td> <?php echo $row['amt'] ?></td>

    <?php
    $st=$row['status'];
     //echo $st;
             if($st==1)
             {?>
     <td> <input type="button" value="Payment"  id="btnHome"
     onClick="document.location.href='pkg_payment.php?sid=<?php echo $row['o_id'];?>'"/>
     </td>
     <?php
                 
             }
 else {
     ?>
     <td>    <input type="button" value="Not Confirm"  id="btnHome" </td></tr>
     <?php
 }
    ?>
</tr>

<?php
}
}?></table>

        <?php
  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>
