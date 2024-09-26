<?php
session_start();
if(isset($_SESSION['s_id']))
{
    require_once 'trainer_nav.php'; 

        $fid=$_SESSION['s_id'];
         require_once'../config/conn.php';

      ?>


<?php 
$sql="SELECT `t_id` , `t_name` ,`t_address` , `t_place` , `t_exp` , `phno` , `email` , `log_id` , `username` , `password`
FROM tbl_trainer, login
WHERE tbl_trainer.t_id = login.reg_id
AND login.user_type = 'Trainer'
AND login.reg_id = '$fid'";
        $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {

?>
       
    <!-- content -->
    <h2 style="text-align:center;color: green;"> View Profile</h2>
        <div class="sub-main-w3" style="border:2px; width: 60%;margin-left: 350px;">
            <form action="#" method="post">
                
                <div class="form-style-agile">
                    <label>Trainer Name</label>
                    <input placeholder="Trainer Name" class="form-control" style="width: 60%;color: blueviolet;" name="t_name" type="text" required="" value="<?php echo $row['t_name']?>" >
                </div><br>
                <div class="form-style-agile">
                      <label>Address</label>
                    <input placeholder="Trainer Address" class="form-control" style="width: 60%;color: blueviolet;" name="t_add" type="text" required="" value="<?php echo $row['t_address']?>">
                </div><br>
                <div class="form-style-agile">
                      <label>Place</label>
                    <input placeholder="Trainer Place" class="form-control" style="width: 60%;color: blueviolet;" name="t_place" type="text" required="" value="<?php echo $row['t_place']?>">
                </div>
<br>
                <div class="form-style-agile">
                      <label>Experience</label>
                    <input placeholder="Trainer Experience" class="form-control" style="width: 60%;color: blueviolet;" name="t_exp" type="text" required="" value="<?php echo $row['t_exp']?>">
                </div>
<br>
                <div class="form-style-agile">
                      <label>Phone Number</label>
                    <input placeholder="Phone Number" class="form-control" style="width: 60%;color: blueviolet;" name="t_phno" type="text" required="" value="<?php echo $row['phno']?>">
                </div>
<br>
                <div class="form-style-agile">
                      <label>Email</label>
                    <input placeholder="Email" class="form-control" style="width: 60%;color: blueviolet;" name="t_email" type="email" required="" value="<?php echo $row['email']?>">
                </div>
   <br>             
                <div class="form-style-agile">
                      <label>Use name</label>
                    <input placeholder="User Name" class="form-control" style="width: 60%;color: blueviolet;" name="uname" type="text" required="" value="<?php echo $row['username']?>">
                </div>
                <br>
                <div class="form-style-agile">
                      <label>Password</label>
                    <input placeholder="Password" class="form-control" style="width: 60%;color: blueviolet;" name="pwd" type="text" required="" value="<?php echo $row['password']?>">
                </div>
                
                
                
        </div>
    </div>


       <?php
   }}
        }
        else
        {
             header("Refresh:2;url=../index.php");
        }
        ?>