<?php
session_start();
$pid=$_GET['sid'];
if(isset($_SESSION['s_id']))
{
	require_once 'member_nav.php'; 
        include_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
       // echo $fid;
        ?>



<html>
    <head>
        <title>
            View Package
        </title>
    </head>
    
    <body>
        <br><br>
        
        <h1 style="text-align: center;font-family: sans-serif;color: red;">Book Your Package</h1>
        
        <br>
        <div>
             <?php
  $sql="SELECT * FROM `tbl_package` WHERE `p_id`='$pid';";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        $cid=$row['c_id'];
        echo $cid;
        ?>
            <div style="width: 50%;margin-left: 350px;border: 2px" class="form-group">
                <form method="post" name="myForm" action="">      
                    <table>
                        <tr>
                            <th>
                                Package Name: </td><td>&nbsp</td>
                            <th>
                <input type="text" class="form-control" name="p_name" value="<?php echo $row['p_name'];?>">
                            </td> </tr>
                        <tr><td><label>Rate :</label></td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" style="width: 100px;" name="rate" value="<?php echo $row['rate'];?>"></td></tr>
    
                        <tr><td><label>Discount Rate :</label>   </td><td>&nbsp</td>
                            <td>
     <input type="text" class="form-control" name="d_rate" value="<?php echo $row['d_rate'];?>"></td></tr>
                                <tr><td><label>Number Of Days :</label>   </td><td>&nbsp</td>
                            <td>
<input type="text" class="form-control" name="d_rate" value="<?php echo $row['d_rate'];?>"></td></tr>
                                 
                                <tr><td><label>Member Name :</label>   </td><td>&nbsp</td>
                            <td>
 <input type="text" class="form-control" name="m_name" ></td></tr>
                            </td></tr>
                                <tr><td><label>Phone Number :</label>   </td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" name="m_phno"></td></tr>
   
                        <tr><td>&nbsp</td><td>&nbsp</td><td></td></tr>
                        <tr><td>&nbsp</td><td>
                                <input type="submit" value="Book" name="order"></td><td>&nbsp</td>
                            <td><input type="reset"></td></tr></table>
                            
                </form>
            </div>
            
     </div>  
        </div>    
            
        </div>  
            <?php
}}}
?>
</body>
</html>
<?php
if(isset($_POST['order']))
{
   $p_name=$_POST['p_name'];
   $amt=$_POST['d_rate'];
   $m_name=$_POST['m_name'];
   $m_phno=$_POST['m_phno'];

    $sql="INSERT INTO `club_fitness`.`pkg_conform` (`o_id`, `m_id`, `p_id`, `pkg_name`, `amt`, `m_name`, `m_phno`, `status`, `c_id`) VALUES (NULL, '$fid', '$pid', '$p_name', '$amt', '$m_name', '$m_phno', '0', '$cid')";
    
  
    
     if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Order Added Successfully!!!!! Please Wait for Confirmation.......');</script>";
        //header("Refresh:0; url=order_equip.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";

   //  header("Refresh:2; url=eq_order.php");
    }        
}




?>




