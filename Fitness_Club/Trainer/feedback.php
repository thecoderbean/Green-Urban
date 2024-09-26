<?php
session_start();
if(isset($_SESSION['s_id']))
{
    require_once 'trainer_nav.php'; 

        $fid=$_SESSION['s_id'];
         require_once'../config/conn.php';
       // echo $fid;
    ?>
    <br><br>
     <h1 style="text-align:center;">View Feedback</h1><br><br>
<table style="width:70%;" align="center" class="table table-bordered">
    <th>Message From</th>
    <th>Messsage</th>
   
    <?php
            $sql="SELECT * FROM `tbl_feedback`";

       $res=$con->query($sql); 
        if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
?>
<tr>
<td><?php echo $row['u_type']; ?></td>
<td><?php echo $row['comment']; ?></td></tr>

<?php
}
}
    ?>
    <?php
        }
        else
        {
             header("Refresh:2;url=../index.php");
        }
        ?>