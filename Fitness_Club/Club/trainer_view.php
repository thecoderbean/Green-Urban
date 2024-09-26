<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'club_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>

<div>    

<h1 style="text-align: center;color: blueviolet;">View Trainers</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green;width:70%;" align="center">
    <thead>
      <tr>
        <th>Trainer Name</th>
        <th>Trainer Address</th>
        <th>Trainer Place</th>
        <th>Experience</th>
       
        <th>Phone Number</th>
     <th>Email</th>
        
        <th>User Name</th>
        <th>Password</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT `t_id` , `t_name` , `t_address` , `t_place` , `t_exp` , `phno` , `email` , `username` , `password`
FROM tbl_trainer, login
WHERE tbl_trainer.t_id = login.reg_id
AND login.status =1
AND login.user_type = 'Trainer'
AND tbl_trainer.c_id = '$fid'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
    <td><?php echo $row['t_name'];?></td>
    <td><?php echo $row['t_address'];?></td>
    <td><?php echo $row['t_place'];?></td>
<td><?php echo $row['t_exp'];?></td>


<td><?php echo $row['phno'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['password'];?></td>






                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                    
                
                </div>      
            </div>

</section>

</section>





    <?php
  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>

