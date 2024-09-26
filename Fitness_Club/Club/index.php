<?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'club_nav.php'; 
        $fid=$_SESSION['s_id'];
       // echo $fid;
    ?>
	<div style="height:500px;">



    <div style="height:450px;background-image: url('banner.jpg');background-size:cover;">
   


          </div>      
			<div>
				<p style="text-align:center;color:royalblue;">All Rights Reserved | Design by
					<a href="https://w3layouts.com/" target="_blank">Scopos Technologies PVT Ltd Kollam</a>
				</p>
				
			
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

