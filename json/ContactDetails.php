<?php ob_start();
include('connect.php');
$customerID=$_REQUEST['customerID'];
$selectBankID="select * from Customers where CustomerId='$customerID'";
$resultbankID=mysql_query($selectBankID);
$rowBankID=mysql_fetch_array($resultbankID);
$bankID=$rowBankID['Bank_ID'];
$designation=$_REQUEST['Type'];
if($designation=='LoanOfficer')
{
	 $selectLoanOfficerdetails="select * from LoanOfficer where Bank_ID='$bankID' ";
	$resultLoanOfficerdetails=mysql_query($selectLoanOfficerdetails);
	if(mysql_num_rows($resultLoanOfficerdetails)>0)
	{
	while($rowofficerdetails=mysql_fetch_assoc($resultLoanOfficerdetails))
	{
		$output[]=$rowofficerdetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
else if($designation=='LoanProcessor')
{
	 $selectProcessordetails="select * from LoanProcessor where Bank_ID='$bankID' ";
	$resultProcessordetails=mysql_query($selectProcessordetails);
	if(mysql_num_rows($resultProcessordetails)>0)
	{
	while($rowProcessordetails=mysql_fetch_assoc($resultProcessordetails))
	{
		$output[]=$rowProcessordetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
else if($designation=='LoanAssistant')
{
	$selectAssistantdetails="select * from LoanAssistant where Bank_ID='$bankID' ";
	$resultAssistantdetails=mysql_query($selectAssistantdetails);
	if(mysql_num_rows($resultAssistantdetails)>0)
	{
	while($rowAssistantdetails=mysql_fetch_assoc($resultAssistantdetails))
	{
		$output[]=$rowAssistantdetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
else if($designation=='Realtor')
{
	$selectRealtordetails="select * from Realtor where Bank_ID='$bankID' ";
	$resultRealtordetails=mysql_query($selectRealtordetails);
	if(mysql_num_rows($resultRealtordetails)>0)
	{
	while($rowRealtordetails=mysql_fetch_assoc($resultRealtordetails))
	{
		$output[]=$rowRealtordetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
else if($designation=='TitleOfficer')
{
	$selectTitleOfficerdetails="select * from TitleOfficer where Bank_ID='$bankID' ";
	$resultTitleOfficerdetails=mysql_query($selectTitleOfficerdetails);
	if(mysql_num_rows($resultTitleOfficerdetails)>0)
	{
	while($rowTitleOfficerdetails=mysql_fetch_assoc($resultTitleOfficerdetails))
	{
		$output[]=$rowTitleOfficerdetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
else if($designation=='ClosingAttorney')
{
	$selectClosingAttorneydetails="select * from ClosingAttorney where Bank_ID='$bankID' ";
	$resultClosingAttorneydetails=mysql_query($selectClosingAttorneydetails);
	if(mysql_num_rows($resultClosingAttorneydetails)>0)
	{
	while($rowClosingAttorneydetails=mysql_fetch_assoc($resultClosingAttorneydetails))
	{
		$output[]=$rowClosingAttorneydetails;
	}
	}
	else
	{
		$output[]="None";
	}
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($output);
echo $data;
?>