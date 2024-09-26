<?php
session_start();
if(isset($_SESSION['s_id']))
{
    require_once 'trainer_nav.php'; 

        $fid=$_SESSION['s_id'];
         require_once'../config/conn.php';
       // echo $fid;
    ?>
    <div style="height:500px;">

<br><br>

    <h1 style="text-align:center;color: rebeccapurple;">View Packages</h1><br><br>
   
 <table style="width:70%;" align="center" class="table table-bordered">
    
    <th>ID</th>
    <th>Package Name</th>
    <th>Rate</th>
    <th>Discount Rate</th>
    <th>Specifications</th>
    <th>Add Ons</th>
    <th>No of Days</th>
    
<?php
$sql="SELECT * FROM `tbl_package`";
    
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

  

                
        
  </div><!-- //footer -->

</body>

</html>
<?php
        }
        else
        {
             header("Refresh:2;url=../index.php");
        }
        ?>

