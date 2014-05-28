<?php
session_start();
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from owners where usname='$username' and password='$password'";
$res=mysql_query($query) or die(mysql_error());
if(mysql_num_rows($res)>'0')
{
header('Location:home.php');	
}

?>