<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>     
<br><br>
    <h1 style="text-align:center">View Attendance</h1><br><br>
    <table style="width:70%;" align="center" class="table table-bordered">
        <tr><th>Member ID</th>
            <th>Date</th>
            <th>Attendance </th>
        </tr>
        <?php
        $sql="SELECT * FROM `attendance` WHERE `present`='1'";
            $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {


        ?>
<tr>
<td><?php echo $row['m_id'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['present'];?></td>

</tr>

        <?php
   
    }}
    ?>
    </table>