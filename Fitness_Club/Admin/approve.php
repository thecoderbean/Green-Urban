<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
    <section class="wrapper">
            <div style="height: 300px;">
        
                   
                <h1 style="text-align: center;color: blue;">Approve/Remove Fitness Club</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green;width: 80%;" align="center" >
    <thead>
      <tr>
        <th>Club Name</th>
        <th>Address</th>
        <th>Place</th>
        <th>Phone Number</th>
        <th>Email</th>
        
        <th>User Name</th>
        <th>Password</th>
        <th>Approve</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT `club_name` , `club_address` , `club_place` , `club_phno` , `club_email` , `log_id` , `username` , `password` FROM club_reg, login WHERE club_reg.c_id = login.reg_id AND login.status =0 AND login.user_type = 'Club'";

    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
           <td><?php echo $row['club_name'];?></td>
          <td><?php echo $row['club_address'];?></td>
          <td><?php echo $row['club_place'];?></td>
          <td><?php echo $row['club_phno'];?></td>
          <td><?php echo $row['club_email'];?></td>
          
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['password'];?></td>



<td><input type="button" value="Approve"  id="btnHome" 
onClick="document.location.href='c_approve.php?app=<?php echo $row['log_id'];?>'" />  </td>
<td><input type="button" value="Remove"  id="btnHome" 
onClick="document.location.href='c_remove.php?rem=<?php echo $row['log_id'];?>'" />  </td>
                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                
                </div>      
            </div>  
          

<div>    

<h1 style="text-align: center;color: blueviolet;">Approve/Remove Member</h1><br><br>
                <div>
                    <table class="table table-hover" style="color: green;width: 80%;" align="center">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>ID Proof</th>
        <th>Time</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone Number</th>
        <th>Height</th>
        <th>Weight</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Approve</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $sql2="SELECT `m_id`, `m_name` , `m_address` , `m_id_proof` , `m_time` , `age` , `gender` , `m_email` , `m_phno`,`m_height`,`m_weight`, `log_id` , `username` , `password` FROM member_reg,login where member_reg.m_id=login.reg_id AND login.status=0 and login.user_type='Member'";
    $res=$con->query($sql2);      
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



<td><input type="button" value="Approve" id="btnHome" 
onClick="document.location.href='m_approve.php?app=<?php echo $row['log_id'];?>'" />  </td>
<td><input type="button" value="Remove"  id="btnHome" 
onClick="document.location.href='m_remove.php?rem=<?php echo $row['log_id'];?>'" />  </td>

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

            <div class="footer" style="height:20px">
            <div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Scopos Technologies, kOllam</a></p>
            </div>
          </div>