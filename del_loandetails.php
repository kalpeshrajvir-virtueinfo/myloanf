<?php
include('connect.php');
 $loan_id=$_REQUEST['id'];
 $select="select * from  customersLoanDetails where loan_id='$loan_id' ";
 $result_select=mysql_query($select)or die(mysql_error());
 $row=mysql_fetch_array($result_select);
 $customerID=$row['Customer_id'];
$delete="DELETE FROM `customersLoanDetails` WHERE loan_id='$loan_id'";
$result=mysql_query($delete) or die(mysql_error());
$delete_loanprocessor="DELETE FROM  LoanProcessor where customerId='$customerID'";
$result_processor=mysql_query($delete_loanprocessor) or die(mysql_error());
$delete_loanassistant="DELETE FROM LoanAssistant where customerId='$customerID'";
$result_loanassistant=mysql_query($delete_loanassistant) or die(mysql_error()); 
$delete_realtor="DELETE FROM  Realtor where customerId='$customerID'";
$result_realtor=mysql_query($delete_realtor) or die(mysql_error()); 
$delete_titleofficer="DELETE FROM  TitleOfficer where customerId='$customerID'";
$result_titleofficer=mysql_query($delete_titleofficer) or die(mysql_error()); 
$delete_ClosingAttorney="DELETE FROM ClosingAttorney where customerId='$customerID'";
$result_ClosingAttorney=mysql_query($delete_ClosingAttorney) or die(mysql_error()); 
header('Location:Loan.php');

?>