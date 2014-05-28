<?php
include('connect.php');
$customer_ID=$_POST['cus_id'];
$loan_id=$_POST['loan_id'];
$laddress=$_POST['laddress'];
$lamount=$_POST['lamount'];
$interest_rate=$_POST['interest_rate'];
$lprogram=$_POST['lprogram'];
$update="UPDATE `customersLoanDetails` SET `Customer_id`='$customer_ID',`loan_address`='$laddress',`loan_amount`='$lamount',`interest_rate`='$interest_rate',`loan_program`='$lprogram' WHERE `loan_id`='$loan_id'";
$result=mysql_query($update) or die(mysql_error());
if($result)
{
	header('Location:loandetails.php');
}
?>