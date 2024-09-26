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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];
$npass = md5($pass);
$email =$_POST['email'];
$sql = "INSERT INTO admin (firstname, lastname, email, password)
VALUES ('$fname', '$lname','email', '$npass')";

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
            <h2 class="page-header">Add Shop Manager</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="manager_form">
      <fieldset>
    <div class="form-group">
        <label for="f_name">First Name</label>
          <input type="text" name="fname" value="<?php echo htmlspecialchars($edit ? $customer['fname'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "fname" >
    </div> 
    <div class="form-group">
        <label for="f_name">Last Name</label>
          <input type="text" name="lname" value="<?php echo htmlspecialchars($edit ? $customer['lname'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="last Name" class="form-control" required="required" id = "lname" >
    </div> 
    <div class="form-group">
        <label for="f_name">email</label>
          <input type="text" name="email" value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="email" class="form-control" required="required" id = "email" >
    </div> 
    <div class="form-group">
        <label for="f_name">Password</label>
          <input type="password" name="pass" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="password" class="form-control" required="required" id = "pass" >
    </div> 
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>   

    
</fieldset>
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