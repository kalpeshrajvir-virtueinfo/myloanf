<?php
ob_start();
session_start();
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['uid']=$username;
//echo $_SESSION['uid'];
$query="select * from admin where Username='$username' and Password = '$password'";
$res=mysql_query($query) or die(mysql_error());
if(mysql_num_rows($res)>0)
{
	//echo 'hai';
	 	$flag = 1; 

	header("Location:home.php");
		
}
else
{
	//echo 'wrong';
	$_SESSION['flag'] = 2;
	 	$flag = 2; 
	header("Location:index.php?flag=2");
}
?>