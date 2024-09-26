<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
 <h1 style="text-align:center;">View Package</h1>
  <table style="width:70%;" align="center" class="table table-bordered">
    
    <th>ID</th>
    <th>Package Name</th>
    <th>Rate</th>
    <th>Discount Rate</th>
    <th>Specifications</th>
    <th>Add Ons</th>
    <th>No of Days</th>
    
<?php
$sql="SELECT * FROM `tbl_package` ";
    
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
</tr>
<?php
}
}
?>




  </table>

  
</div>
