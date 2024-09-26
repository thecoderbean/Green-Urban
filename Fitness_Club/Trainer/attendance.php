<?php
session_start();
if(isset($_SESSION['s_id']))
{
    require_once 'trainer_nav.php'; 

        $fid=$_SESSION['s_id'];
         require_once'../config/conn.php';

      ?>


      
<br><br>
    <h1 style="text-align:center">View Attendance</h1><br><br>
    <table style="width:70%;" align="center" class="table table-bordered">
        <tr><th>Name</th>
            <th>Date</th>
           
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
<td><?php echo $row['username'];?></td>
<td><?php echo $row['date'];?></td>


</tr>

        <?php
   
    }}
    ?>
    </table>
    <?php
        }
        else
        {
             header("Refresh:2;url=../index.php");
        }
        ?>