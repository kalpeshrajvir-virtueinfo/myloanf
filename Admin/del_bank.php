<?php
include("connect.php");
$del_id=$_REQUEST['id'];
$delete="DELETE FROM BankDetails WHERE BankId='$del_id'";
$result=mysql_query($delete) or die(mysql_error());
header('location:Banks.php');
?>