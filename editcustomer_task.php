<?php
include('connect.php');
$CustomerId=$_POST['CustomerId'];
$cust_name=$_POST['cust_name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['pass'];
$update="UPDATE `Customers` SET `CustomerName`='$cust_name',`Address`='$address',`PhoneNumber`='$phone',`EmailId`='$email',`Password`='$password' WHERE `CustomerId`='$CustomerId'";
$result=mysql_query($update) or die(mysql_error());
if($result)
{
	header('Location:Customers.php');
}
?>