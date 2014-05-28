<?php
include('connect.php');
$CustomerId=$_REQUEST['id'];
$delete="DELETE FROM `Customers` WHERE CustomerId='$CustomerId'";
$result=mysql_query($delete) or die(mysql_error());
if($result)
{
	header('Location:Customers.php');
}
?>