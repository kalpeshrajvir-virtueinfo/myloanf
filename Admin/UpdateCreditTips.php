<?php
include('connect.php');
$creditID=$_REQUEST['creditId'];
$title=$_REQUEST['Title'];
$description=$_REQUEST['Description'];
$update="update CreditTips set Title='$title',Description='$description' where CreditId='$creditID' ";
$result=mysql_query($update);
if($result)
{
	header('location:CreditTips.php');
}
?>