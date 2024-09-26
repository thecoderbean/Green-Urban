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

<h1 style="text-align: center;font-family: sans-serif;color: red;">Payment</h1>
        
        <br>
        <div>
             <?php
            // echo $eid;
  $sql="SELECT * FROM `pkg_conform` where `o_id`='$pid'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
       // $cost=$row['tprice'];
       //cho "cost". $cost;
     ?>
            <div style="width: 50%;margin-left: 350px;border: 2px" class="form-group">
                <form method="post" name="myForm" action="">      
                    <table>
                        <tr>
                            <td>
                                Total Amount </td><td>&nbsp</td><td>&nbsp</td>
                            <td>
                <input type="text" class="form-control" name="price" value="<?php echo $row['amt'];?>">
                            </td> </tr>
    
                <tr>
                            <td>
                                Card holder Name </td><td>&nbsp</td><td>&nbsp</td>
                            <td>
                <input type="text" class="form-control" name="cname" >
                            </td> </tr>
                        <tr><td><label>Card Number :</label>   </td><td>&nbsp</td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" name="cno" ></td></tr>
   
                        <tr><td><label>Expiry Date:</label></td><td>&nbsp</td><td>&nbsp</td>
                            <td><input type="date" class="form-control" name="edate" re >
                              <!--  <input type="text" class="form-control" name="qty">--></td></tr>
                        <tr><td><label>CVV :</label></td><td>&nbsp</td><td>&nbsp</td>
                            <td>

                                <input type="text" class="form-control" name="cvv" </td></td></tr>
                        <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td></td></tr>
                        <tr><td>&nbsp</td><td>&nbsp</td><td>
                                <input type="submit" value="Order" name="order"></td>
                                <td>&nbsp</td>
                            <td><input type="reset"></td></tr></table>
                            
                </form>
            </div>
            
          <?php
      }}

?> 
        </div>  
        </div>    
            
        </div>  
           



</body>
</html>
<?php
if(isset($_POST['order']))
{
    $price=$_POST['price'];
    $cname=$_POST['cname'];
    $cno=$_POST['cno'];
    $edate=$_POST['edate'];
    $cvv=$_POST['cvv'];
    

    $sql="INSERT INTO `club_fitness`.`tbl_payment` (`pay_id`, `m_id`, `p_id`, `tcost`, `cname`, `cnumber`, `exp`, `cvv`) VALUES (NULL, '$fid', '$pid', '$price', '$cname', '$cno', '$edate', '$cvv')";
    
     if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Payment Added Successfully!!!!! Please Wait for Confirmation.......');</script>";
        //header("Refresh:0; url=order_equip.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";

   //  header("Refresh:2; url=eq_order.php");
    }        
}
?>



                <?php
          //  }
  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>
