<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<br><br>
     <h1 style="text-align:center;">View Feedback</h1><br><br>
<table style="width:70%;" align="center" class="table table-bordered">
    <th>Message From</th>
    <th>Messsage</th>
   
    <?php
            $sql="SELECT * FROM `tbl_feedback` where `u_type`='member' or `u_type`='club'";

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