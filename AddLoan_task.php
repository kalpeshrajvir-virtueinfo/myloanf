<?php
include('connect.php');
$cust_id=$_REQUEST['cus_id'];
$laddress=$_POST['laddress'];
$lamount=$_POST['lamount'];
$interest_rate=$_POST['interest_rate'];
$lprogram=$_POST['lprogram'];
$insertbank="INSERT INTO `customersLoanDetails` (`Customer_id`,`loan_address`,`loan_amount`,`interest_rate`,`loan_program`)VALUES ('$cust_id','$laddress','$lamount','$interest_rate','$lprogram')";
$resultbank=mysql_query($insertbank) or die(mysql_error());
if($resultbank)
{
	header('Location:loandetails.php');
}
?>