<?php
session_start();
if (isset($_SESSION["username"])&&isset($_SESSION["address"])&&isset($_SESSION["email"])&&isset($_SESSION["id"])) 
{
    $username = $_SESSION["username"];
    $address = $_SESSION["address"];
    $email = $_SESSION["email"];
    $id = $_SESSION["id"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
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
if(isset($_POST['metal']))  
{
  $metal = $_POST['metal'];
} 
else{
  $metal = "No";
}  
 if(isset($_POST['kitchen']))  
{
  $kitchen = $_POST['kitchen'];
} 
else{
  $kitchen = "No";
}  
 if(isset($_POST['drain']))  
{
  $drain = $_POST['drain'];
} 
else{
  $drain = "No";
}
if(isset($_POST['plastic']))  
{
  $plastic = $_POST['plastic'];
} 
else{
  $plastic = "No";
} 

$sql = "INSERT INTO service (uid, plastic, metal, kitchen, drain)
VALUES ('$id', '$plastic', '$metal', '$kitchen', '$drain')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header('Location: ../home.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>