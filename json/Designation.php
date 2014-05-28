<?php ob_start();
include('connect.php');
$customerID=$_REQUEST['CustomerID'];
$selectbankID="select * from  Customers where CustomerId='$customerID'";
$resultbank=mysql_query($selectbankID);
$row=mysql_fetch_array($resultbank);
$bankID=$row['Bank_ID'];
$selectLoanOfficer="select * from  LoanOfficer where Bank_ID='$bankID'";
$resultLoanOfficer=mysql_query($selectLoanOfficer);
if(mysql_num_rows($resultLoanOfficer)>0)
{
	$Output[]="LoanOfficer";
}
else
{
	$Output[]="None";
}

$selectLoanProcessor="select * from  LoanProcessor where Bank_ID='$bankID'";
$resultLoanProcessor=mysql_query($selectLoanProcessor);
if(mysql_num_rows($resultLoanProcessor)>0)
{
	$Output[]="LoanProcessor";
}
else
{
	$Output[]="None";
}

$selectLoanAssistant="select * from  LoanAssistant where Bank_ID='$bankID'";
$resultLoanAssistant=mysql_query($selectLoanAssistant);
if(mysql_num_rows($resultLoanAssistant)>0)
{
	$Output[]="LoanAssistant";
}

else
{
	$Output[]="None";
}

$selectRealtor="select * from  Realtor where Bank_ID='$bankID'";
$resultRealtor=mysql_query($selectRealtor);
if(mysql_num_rows($resultRealtor)>0)
{
	$Output[]="Realtor";
}
else
{
	$Output[]="None";
}

$selectTitleOfficer="select * from  TitleOfficer where Bank_ID='$bankID'";
$resultTitleOfficer=mysql_query($selectTitleOfficer);
if(mysql_num_rows($resultTitleOfficer)>0)
{
	$Output[]="TitleOfficer";
}
else
{
	$Output[]="None";
}

$selectClosingAttorney="select * from  ClosingAttorney where Bank_ID='$bankID'";
$resultClosingAttorney=mysql_query($selectClosingAttorney);
if(mysql_num_rows($resultClosingAttorney)>0)
{
	$Output[]="ClosingAttorney";
}
else
{
	$Output[]="None";
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($Output);
echo $data;
?>