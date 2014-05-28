<?php
include('connect.php');
 $bankid=$_REQUEST['bankid'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
 $emailid=$_POST['emailid'];
$password=$_POST['password'];

 $insertbank="insert into  Customers (Bank_ID,CustomerName,Address,PhoneNumber,EmailId,Password) values ('$bankid','$name','$address','$phone','$emailid','$password')";
$resultbank=mysql_query($insertbank) or die(mysql_error());
if($resultbank)
{
	header('Location:Customers.php');
}
?>