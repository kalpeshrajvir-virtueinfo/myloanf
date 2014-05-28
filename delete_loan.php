<?php
include('connect.php');
$loan_id=$_REQUEST['id'];
$delete="DELETE FROM `customersLoanDetails` WHERE loan_id='$loan_id'";
$result=mysql_query($delete) or die(mysql_error());
if($result)
{
	header('Location:loandetails.php');
}
?>