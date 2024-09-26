<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';


//serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenurban";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$uname = $_POST['uname'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$sql = "INSERT INTO delivery (username, name, password)
VALUES ('$uname', '$name', '$pass')";

if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Customer added successfully!";
        header('location: index.php');
        exit();
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Delivery Boy</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="customer_form" enctype="multipart/form-data">
       <?php  include_once('./forms/deliveryadd.php'); ?>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#customer_form").validate({
       rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },   
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>