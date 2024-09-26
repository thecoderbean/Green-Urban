<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>


<div style="height:450px">   <br> 
  <h1 style="text-align:center;">View Members</h1><br><br>
<table style="width:70%;" class="table table-bordered" align="center">
   <tr>
      <th>Member Name</th>
      <th>Member Addres</th>
      <th>ID Proof</th>
      <th>Time</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>User Name</th>
      <th>Password</th>
  </tr>



        
      </tr>
    </thead>
    <tbody>
      <?php
   $sql="SELECT `m_id`, `m_name` , `m_address` , `m_id_proof` , `m_time` , `age` , `gender` , `m_email` , `m_phno`,`m_height`,`m_weight`, `log_id` , `username` , `password` FROM member_reg,login where member_reg.m_id=login.reg_id AND login.status=1 and login.user_type='Member'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
    <td><?php echo $row['m_name'];?></td>
    <td><?php echo $row['m_address'];?></td>
    <td><?php echo $row['m_id_proof'];?></td>
<td><?php echo $row['m_time'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['m_email'];?></td>
<td><?php echo $row['m_phno'];?></td>
<td><?php echo $row['m_height'];?></td>
<td><?php echo $row['m_weight'];?></td>
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

            <div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Scopos Technologies, kOllam</a></p>
            </div>
          </div>