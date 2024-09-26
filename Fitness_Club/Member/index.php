<?php
session_start();
if(isset($_SESSION['s_id']))
{
  require_once 'member_nav.php'; 
  require_once'../config/conn.php';
        $fid=$_SESSION['s_id'];

       // echo $fid;
    ?>
	<div style="height:500px;">




<div>    

<h1 style="text-align: center;color: blueviolet"; >View Club</h1><br><br>
                <div>
    <table style="color: green;width: 70%;" align="center" class="table table-bordered">
    <thead>
      <tr>
        <th>Club Name</th>
        
        <th>Address</th>
        <th>Place</th>
        <th>Phone Number</th>
    
        <th>Email</th>
     
        
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT * FROM `club_reg`";
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

            <div class="footer">
            <div class="wthree-copyright">
                            <p style="text-align: center">© 2020| Design by <a href="http://w3layouts.com">Scopos Technologies, kOllam</a></p>
            </div>
          </div>
		</div>

		
			<div>
				<p style="text-align:center;color:royalblue;">All Rights Reserved | Design by
					<a href="https://w3layouts.com/" target="_blank">Scopos Technologies PVT Ltd Kollam</a>
				</p>
				
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->

</body>

</html>
 <?php
  }
    else
    {
       header("Refresh:2;url=../index.php");
    }
    ?>

