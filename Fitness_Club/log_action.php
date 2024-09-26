<?php
session_start();
include_once './config/conn.php';

if(isset($_POST['login']))
{
    $type=$_POST['type'];
    $user=$_POST['user'];
    $pwd=$_POST['pass'];
    $sql="SELECT * FROM `login` WHERE `username`='$user' and `password`='$pwd' AND `user_type`='$type' and `status`='1'";
    $res= mysqli_query($con, $sql);
    $num_rows= mysqli_num_rows($res);
    $rows=  mysqli_fetch_array($res);
             if($num_rows>0)
             {
                 if($type=="Club")
                             
                     {
                         echo "<script> alert('Login Success')</script>";
                        // echo $rows['sid'];
                         header("Refresh:0;url=Club/index.php");
                        $_SESSION['s_id']=$rows['reg_id'];
                            // $_SESSION['cat']=$rows['category'];

                        // echo $_SESSION['login_id'];
                             
                     }
             else if($type=="Member")
             {
                 echo "<script> alert('Login Success')</script>";
                 header("Refresh:0;url=Member/index.php");
                $_SESSION['s_id']=$rows['reg_id'];
             }
             else if($type=="Trainer")
             {
                 echo "<script> alert('Login Success')</script>";
                 header("Refresh:0;url=Trainer/index.php");
                $_SESSION['s_id']=$rows['reg_id'];
                echo $_SESSION['s_id'];
             }
             
             else if($type=="Admin")
             {
                 echo "<script> alert('Login Success')</script>";
                 header("Refresh:0;url=Admin/index.php");
                $_SESSION['s_id']=$rows['reg_id'];
             }
                 
             }
             else
             {
                 echo "<script> alert('Invalid User') </script>";
                 echo "Error: " . $sql . "<br>" . $con->error;
                 header("Refresh:0;url=index.php");
             }
}

    ?>
