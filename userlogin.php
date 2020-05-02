<?php
session_start();

include("db_conection.php");
include("config.php");


if(isset($_POST['user_login']))
{
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
	
	
	$password_hash = md5($user_password);
	
	

    $check_user="select * from ta_user WHERE user_username='$user_username' AND user_password='$password_hash'";
	
 
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
		echo "<script>alert('You\'re successfully login!')</script>";
		echo "<script>window.open('Users/index.php','_self')</script>";
		$_SESSION['user_username']=$user_username;
    }
	else{			
		echo "<script>alert('Username or password is incorrect!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();		
	}

}


?>