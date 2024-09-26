<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'club_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>

<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1 style="text-align: center;color: blueviolet;">Add Package</h1><br>

<div>
  <form action="" method="post">
    <table style="width:80%" align="center"><tr><td>
    <label for="fname">Package Name</label></td><td>
    <input type="text" id="p_name" name="p_name" placeholder=""><br></td></tr>
<tr><td>
    <label for="lname">Rate</label></td><td>
    <input type="text" id="lname" name="rate" placeholder=""><br></td></tr>
    <tr><td>
    <label for="lname">Discount Rate</label></td><td>
    <input type="text" id="lname" name="d_rate" placeholder=""><br></td></tr>
    <tr><td>
    <label for="lname">Specifications</label></td><td>
    <input type="text" id="lname" name="spec" placeholder=""><br></td></tr>
    <tr><td>
    <label for="lname">Add_ons</label></td><td>
    <input type="text" id="lname" name="add_ons" placeholder=""><br></td></tr>
    <tr><td>
<label for="lname">No of Days</label></td><td>
    <input type="text" id="lname" name="no_days" placeholder=""><br></td></tr>
    <tr><td>&nbsp</td><td>
    <input type="submit" value="Submit" name="pkg"></td></tr>
  </form>
</table>
</div>

</body>
</html>




<?php
if(isset($_POST['pkg']))
{
  $p_name=$_POST['p_name'];
  $rate=$_POST['rate'];
  $d_rate=$_POST['d_rate'];
  $spec=$_POST['spec'];
  $add_ons=$_POST['add_ons'];
  $no_days=$_POST['no_days'];

  $sql="INSERT INTO `club_fitness`.`tbl_package` (`p_id`, `c_id`, `p_name`, `rate`, `d_rate`, `spec`, `add_ons`, `no_of_days`) VALUES (NULL, '$fid', '$p_name', '$rate', '$d_rate', '$spec', '$add_ons', '$no_days')";
  if( $con->query($sql))
  {
        echo "<script type='text/javascript'>alert('Package Added Successfully');</script>";
        header("Refresh:0; url=add_pkg.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
   echo "Error: " . $sql . "<br>" . $con->error;
     //header("Refresh:2; url=add_pkg.php");
    }


}





    }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>


