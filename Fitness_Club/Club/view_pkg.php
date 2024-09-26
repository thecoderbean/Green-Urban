<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'club_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>
<div >
  <br><br>
  <h1 style="text-align:center;">View Package</h1><br><br>
  <table style="width:70%;" align="center" class="table table-bordered">
    
    <th>ID</th>
    <th>Package Name</th>
    <th>Rate</th>
    <th>Discount Rate</th>
    <th>Specifications</th>
    <th>Add Ons</th>
    <th>No of Days</th>
    <th>Edit</th>
    <th>Delete</th>
    
<?php
$sql="SELECT * FROM `tbl_package` WHERE `c_id`='$fid'";
    
         $res=$con->query($sql); 
        if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
?>
<tr>
  <td> <?php echo $row['p_id'];?></td>

<td> <?php echo $row['p_name'];?></td>
<td> <?php echo $row['rate'];?></td>
<td> <?php echo $row['d_rate'];?></td>
<td> <?php echo $row['spec'];?></td>
<td> <?php echo $row['add_ons'];?></td>
<td> <?php echo $row['no_of_days'];?></td>
<td><input type="button" value="Edit" class="btn btn-success" id="btnHome" 
onClick="document.location.href='edit_pkg.php?app=<?php echo $row['p_id'];?>'" />  </td>
<td><input type="button" value="Delete" class="btn btn-danger" id="btnHome" 
onClick="document.location.href='del_pkg.php?rem=<?php echo $row['p_id'];?>'" />  </td>
</tr>
<?php
}
}
?>




  </table>

  
</div>


    <?php
  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>

