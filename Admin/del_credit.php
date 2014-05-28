<?php
include('connect.php');
$credit_id=$_REQUEST['id'];

$delete="Delete from  CreditTips where CreditId='$credit_id'";
$result=mysql_query($delete);

if($result)
{
	header('location:CreditTips.php');
}
?>