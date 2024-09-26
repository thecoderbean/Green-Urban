<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'club_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>
    <br><br>
<h1 style="text-align:center;color: indianred;"> Confirm Packages<br><br>
    
</h1>
<table style="width:70%;" align="center" class="table table-bordered">
   <th>ID</th>
   <th>Member NAme</th>
   <th>Phone NUmber</th> 
   <th>Package Name</th>
   <th>Rate</th>
   <th>Confirm</th>



<?php
$sql="SELECT * FROM `pkg_conform` WHERE `c_id` = '$fid' AND `status` = '0'";
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
<td><input type="button" value="Approve" id="btnHome" class="button success"
onClick="document.location.href='o_approve.php?app=<?php echo $row['o_id'];?>'" />  </td>
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


