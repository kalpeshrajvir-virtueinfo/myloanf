<?php
ob_start();
session_start();
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

//echo $_SESSION['uid'];
$query="select * from BankDetails where BankmailID='$username' and Password = '$password'";
$res=mysql_query($query) or die(mysql_error());
if(mysql_num_rows($res)>0)
{
	//echo 'hai';
	$row=mysql_fetch_array($res);
	 	$flag = 1; 
$_SESSION['uid']=$username;
$_SESSION['id']=$row['BankId'];
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