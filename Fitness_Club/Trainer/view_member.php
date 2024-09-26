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
<h1 style="text-align:center">View Members</h1>
<br><br>
<table style="width:70%;" align="center" class="table table-bordered">
  <tr>
      <th>Member Name</th>
      <th>Member Addres</th>
      <th>ID Proof</th>
      <th>Time</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Phone Number</th>
      
  </tr>
   
 
  

        
        
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT `m_name`,`m_address`,`m_id_proof`,`m_time`,`age`,`gender`,`m_email`,`m_phno` `m_height`,`m_weight`,`m_phno`,`m_email` from member_reg";
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








                 <?php
    }
}
?>
             
                
                
                
                
                
                
    </tbody>
  </table>
                    
                
                </div>      
            </div>

</section>

</body>

</html>
<?php
        }
        else
        {
             header("Refresh:2;url=../index.php");
        }
        ?>

