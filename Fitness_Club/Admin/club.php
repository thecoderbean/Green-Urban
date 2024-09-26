<?php
require_once './admin_nav.php';
require_once '../config/conn.php';
?>
<section id="main-content">
    <section class="wrapper">
            <div style="height: 350px;">
        
                   
                <h1 style="text-align: center;color: blue;">View Fitness Club</h1><br><br>
                <div>
                   <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Club Name</th>
        <th>Address</th>
        <th>Place</th>
        <th>Phone Number</th>
        <th>Email</th>
  </tr>
  <tr>
<?php
        $sql="SELECT `club_name` , `club_address` , `club_place` , `club_phno` , `club_email` , `log_id` , `username` , `password` FROM club_reg, login" ;

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
      </tr>
          


                 <?php
    }
}
?>
   
  </tr>
  
</table>
                
          



        
  
                
                
                
                
    

</section>
          </div>