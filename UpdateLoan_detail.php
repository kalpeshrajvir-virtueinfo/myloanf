<?php
ob_start();
session_start();
include('connect.php');
$bankID=$_SESSION['id'];
$loanid=$_REQUEST['loanid'];
$custid=$_POST['custid'];
$stdate=$_POST['stdate'];
$enddate=$_POST['enddate'];
$Signin=$_POST['Signin'];
$closingLocation=$_POST['clslocation'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$PI=$_POST['PI'];
$Taxes=$_POST['Taxes'];
$MI=$_POST['MI'];
$total=$_POST['TM'];
$prgm_name=$_POST['pgm_name'];
$amount=$_POST['amount'];
$loan_progress=$_POST['Progress'];
$Interest=$_POST['Interest'];
$status=$_POST['key'];
$LastExpirationDate=$_POST['ldate'];
$Tomessage=$_POST['tomessage'];
$select="select * from  Customers where CustomerId='$custid'";
$result=mysql_query($select);
$row=mysql_fetch_array($result);
$address=$row['Address'];
$updatebank="update customersLoanDetails set Customer_id='$custid' ,StartDate='$stdate',EndDate='$enddate',SignInTime='$Signin',closinglocation='$closingLocation',Latitude='$latitude',Longitude='$longitude',PI='$PI',Taxes='$Taxes',MI='$MI',Total='$total',loan_address='$address',loan_program='$prgm_name',loan_amount='$amount',interest_rate='$Interest',LoanProgress='$loan_progress',status='$status',ExpirationDate='$LastExpirationDate',ToMessage='$Tomessage' where loan_id='$loanid'";
$resultbank=mysql_query($updatebank) or die(mysql_error());
if($resultbank)
{
	
	$select_customerID="select * from   Customers where DeviceToken!='' AND CustomerId='$custid' ";
	$result_customerID=mysql_query($select_customerID) or die(mysql_error());
	if(mysql_num_rows($result_customerID)>0)
	{
		$row=mysql_fetch_array($result_customerID);
		$deviceTokens=$row['DeviceToken'];
		$devicetype=$row['DeviceType'];
		$msg=$Tomessage;
		if($devicetype=='Android')
		{
		include('CustomerPushNotification.php');
		}
		else if($devicetype=='iphone')
		{
			include('CustomerPushNotificationIos.php');
		}
	}
	
	
	$selectBankDetails="select * from  BankDetails where BankId='$bankID'";
$resultBankDts=mysql_query($selectBankDetails);
$rowBankdetails=mysql_fetch_array($resultBankDts);
$BankName=$rowBankdetails['BankName'];
$BankLogo=$rowBankdetails['company_logo'];
$LoanProcessorName=$_REQUEST['name'];
$LoanProcessorPhoneNo=$_REQUEST['PhoneNo'];
$LoanProcessorMobileNo=$_REQUEST['mobileNo'];
$LoanProcessorEmailID=$_REQUEST['email'];
$LoanProcessorLocation=$_REQUEST['location'];
$LoanProcessorLatitude=$_REQUEST['LPLatitude'];
$LoanProcessorLongitude=$_REQUEST['LPLongitude'];
$LoanProcessorHeadshot=$_FILES['Headshot']['name'];
if($LoanProcessorHeadshot!="")
{
	$ext=substr(strrchr($LoanProcessorHeadshot,'.'),1);
$rander=rand();
$LPheadshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['Headshot']['tmp_name'],"../company_logo/".$LPheadshot_img);
}
$LoanAssistantName=$_REQUEST['LAname'];
$LoanAssistantPhoneNo=$_REQUEST['LAPhoneNo'];
$LoanAssistantMobileNo=$_REQUEST['LAmobileNo'];
$LoanAssistantEmailID=$_REQUEST['LAemail'];
$LoanAssistantLocation=$_REQUEST['LAlocation'];
$LoanAssistantLatitude=$_REQUEST['LALatitude'];
$LoanAssistantLongitude=$_REQUEST['LALongitude'];
$LoanAssistantHeadshot=$_FILES['LAHeadshot']['name'];
if($LoanAssistantHeadshot!="")
{
	$ext=substr(strrchr($LoanAssistantHeadshot,'.'),1);
$rander=rand();
echo $LAheadshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['LAHeadshot']['tmp_name'],"../company_logo/".$LAheadshot_img);
}
$RealtorName=$_REQUEST['Rname'];
$RealtorPhoneNo=$_REQUEST['RPhoneNo'];
$RealtorMobileNo=$_REQUEST['RAmobileNo'];
$RealtorEmailID=$_REQUEST['Remail'];
$RealtorLocation=$_REQUEST['Rlocation'];
$RealtorLatitude=$_REQUEST['RLatitude'];
$RealtorLongitude=$_REQUEST['RLongitude'];
$RealtorHeadshot=$_FILES['RHeadshot']['name'];
if($RealtorHeadshot!="")
{
	$ext=substr(strrchr($RealtorHeadshot,'.'),1);
$rander=rand();
$Rheadshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['RHeadshot']['tmp_name'],"../company_logo/".$Rheadshot_img);
}
$TitleOfficerName=$_REQUEST['Tname'];
$TitleOfficerPhoneNo=$_REQUEST['TPhoneNo'];
$TitleOfficerMobileNo=$_REQUEST['TAmobileNo'];
$TitleOfficerEmailID=$_REQUEST['Temail'];
$TitleOfficerLocation=$_REQUEST['Tlocation'];
$TitleOfficerLatitude=$_REQUEST['TLatitude'];
$TitleOfficerLongitude=$_REQUEST['TLongitude'];
$TitleOfficerHeadshot=$_FILES['THeadshot']['name'];
if($TitleOfficerHeadshot!="")
{
	$ext=substr(strrchr($TitleOfficerHeadshot,'.'),1);
$rander=rand();
$Theadshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['THeadshot']['tmp_name'],"../company_logo/".$Theadshot_img);
}
$ClosingAttorneyName=$_REQUEST['CAname'];
$ClosingAttorneyPhoneNo=$_REQUEST['CAPhoneNo'];
$ClosingAttorneyMobileNo=$_REQUEST['CAAmobileNo'];
$ClosingAttorneyEmailID=$_REQUEST['CAemail'];
$ClosingAttorneyLocation=$_REQUEST['CAlocation'];
$ClosingAttorneyLatitude=$_REQUEST['CALatitude'];
$ClosingAttorneyLongitude=$_REQUEST['CALongitude'];
$ClosingAttorneyHeadshot=$_FILES['CAHeadshot']['name'];
if($ClosingAttorneyHeadshot!="")
{
	$ext=substr(strrchr($ClosingAttorneyHeadshot,'.'),1);
$rander=rand();
$CAheadshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['CAHeadshot']['tmp_name'],"../company_logo/".$CAheadshot_img);
}

 $selectproccessor="select * from LoanProcessor where Bank_ID='$bankID' AND customerId='$custid' ";
$resultproccessor=mysql_query($selectproccessor);
if(mysql_num_rows($resultproccessor)>0)
{
 $updateProccessor="update LoanProcessor set Name='$LoanProcessorName',BankName='$BankName',Location='$LoanProcessorLocation',PhoneNo='$LoanProcessorPhoneNo',MobileNo='$LoanProcessorMobileNo',EmailID='$LoanProcessorEmailID',Latitude='$LoanProcessorLatitude',Longitude='$LoanProcessorLongitude',Headshot='$LPheadshot_img',BankLogo='$BankLogo' where Bank_ID='$bankID' AND customerId='$custid'  ";
$resultUpdateProccessor=mysql_query($updateProccessor);

//header('location:AddContactDetails.php');
}
else
{
if($LoanProcessorName!="")
{
$insertLoanProcessor="insert into LoanProcessor(`Bank_ID`,`customerId`,`Name`,`BankName`,`Location`,`PhoneNo`,`MobileNo`,`EmailID`,`Latitude`,`Longitude`,`Headshot`,`BankLogo`) Values('$bankID','$custid','$LoanProcessorName','$BankName','$LoanProcessorLocation','$LoanProcessorPhoneNo','$LoanProcessorMobileNo','$LoanProcessorEmailID','$LoanProcessorLatitude','$LoanProcessorLongitude','$LPheadshot_img','$BankLogo')";
$resultLoanProcessor=mysql_query($insertLoanProcessor) or die(mysql_error());
}
}

$selectAssistant="select * from LoanAssistant where Bank_ID='$bankID' AND customerId='$custid'";
$resultAssistant=mysql_query($selectAssistant) or die(mysql_error($selectAssistant));
if(mysql_num_rows($resultAssistant)>0)
{
	$updateAssistant="update LoanAssistant set Name='$LoanAssistantName',BankName='$BankName',Location='$LoanAssistantLocation',PhoneNo='$LoanAssistantPhoneNo',MobileNo='$LoanAssistantMobileNo',EmailID='$LoanAssistantEmailID',Latitude='$LoanAssistantLatitude',Longitude='$LoanAssistantLongitude',Headshot='$LAheadshot_img',BankLogo='$BankLogo' where Bank_ID='$bankID' AND customerId='$custid' ";
	$resultAssistant=mysql_query($updateAssistant);
}
else
{
if($LoanAssistantName!="")
{
$insertLoanAssistant="insert into LoanAssistant(`Bank_ID`,`customerId`,`Name`,`BankName`,`Location`,`PhoneNo`,`MobileNo`,`EmailID`,`Latitude`,`Longitude`,`Headshot`,`BankLogo`) Values('$bankID','$custid','$LoanAssistantName','$BankName','$LoanAssistantLocation','$LoanAssistantPhoneNo','$LoanAssistantMobileNo','$LoanAssistantEmailID','$LoanAssistantLatitude','$LoanAssistantLongitude','$LAheadshot_img','$BankLogo')";
$resultLoanAssitant=mysql_query($insertLoanAssistant) or die(mysql_error());
}
}
$selectRealtor="select * from  Realtor where Bank_ID='$bankID' AND customerId='$custid'";
$res_realtor=mysql_query($selectRealtor) or die(mysql_error());
if(mysql_num_rows($res_realtor)>0)
{
	$updateRealtor="update Realtor set Name='$RealtorName',BankName='$BankName',Location='$RealtorLocation',PhoneNo='$RealtorPhoneNo',MobileNo='$RealtorMobileNo',EmailID='$RealtorEmailID',Latitude='$RealtorLatitude',Longitude='$RealtorLongitude',Headshot='$Rheadshot_img',BankLogo='$BankLogo' where Bank_ID='$bankID' AND customerId='$custid' ";
	$res_updaterealtor=mysql_query($updateRealtor);
}
else
{
if($RealtorName!="")
{
$insertRealtor="insert into  Realtor(`Bank_ID`,`customerId`,`Name`,`BankName`,`Location`,`PhoneNo`,`MobileNo`,`EmailID`,`Latitude`,`Longitude`,`Headshot`,`BankLogo`)Values('$bankID','$custid','$RealtorName','$BankName','$RealtorLocation','$RealtorPhoneNo','$RealtorMobileNo','$RealtorEmailID','$RealtorLatitude','$RealtorLongitude','$Rheadshot_img','$BankLogo')";
$resultRealtor=mysql_query($insertRealtor) or die(mysql_error());
}
}

$selectTitleofficer="select * from TitleOfficer where Bank_ID='$bankID' AND customerId='$custid'";
$res_titleofficer=mysql_query($selectTitleofficer) or die(mysql_error());
if(mysql_num_rows($res_titleofficer)>0)
{
	$updateTitleOfficer="update TitleOfficer set Name='$TitleOfficerName',BankName='$BankName',Location='$TitleOfficerLocation',PhoneNo='$TitleOfficerPhoneNo',MobileNo='$TitleOfficerMobileNo',EmailID='$TitleOfficerEmailID',Latitude='$TitleOfficerLatitude',Longitude='$TitleOfficerLongitude',Headshot='$Theadshot_img',BankLogo='$BankLogo' where Bank_ID='$bankID' AND customerId='$custid'";
	mysql_query($updateTitleOfficer) or die(mysql_error());
}
else
{
if($TitleOfficerName!="")
{
$insertTitleOfficer="insert into TitleOfficer(`Bank_ID`,`customerId``Name`,`BankName`,`Location`,`PhoneNo`,`MobileNo`,`EmailID`,`Latitude`,`Longitude`,`Headshot`,`BankLogo`)Values('$bankID','$custid','$TitleOfficerName','$BankName','$TitleOfficerLocation','$TitleOfficerPhoneNo','$TitleOfficerMobileNo','$TitleOfficerEmailID','$TitleOfficerLatitude','$TitleOfficerLongitude','$Theadshot_img','$BankLogo')";
$resultTitleofficer=mysql_query($insertTitleOfficer) or die(mysql_error());
}
}
$selectClosingAttorney="select * from ClosingAttorney where Bank_ID='$bankID' AND customerId='$custid'";
$res_closingAttorney=mysql_query($selectClosingAttorney) or die(mysql_error());
if(mysql_num_rows($res_closingAttorney)>0)
{
	$updateClosingAttorney="update ClosingAttorney set Name='$ClosingAttorneyName',BankName='$BankName',Location='$ClosingAttorneyLocation',PhoneNo='$ClosingAttorneyPhoneNo',MobileNo='$ClosingAttorneyMobileNo',EmailID='$ClosingAttorneyEmailID',Latitude='$ClosingAttorneyLatitude',Longitude='$ClosingAttorneyLongitude',Headshot='$CAheadshot_img',BankLogo='$BankLogo' where Bank_ID='$bankID' AND customerId='$custid'";
	mysql_query($updateClosingAttorney) or die(mysql_error());
}
else
{
if($ClosingAttorneyName!="")
{
$insertClosingAttorney="insert into ClosingAttorney(`Bank_ID`,`customerId`,`Name`,`BankName`,`Location`,`PhoneNo`,`MobileNo`,`EmailID`,`Latitude`,`Longitude`,`Headshot`,`BankLogo`)Values('$bankID','$custid','$ClosingAttorneyName','$BankName','$ClosingAttorneyLocation','$ClosingAttorneyPhoneNo','$ClosingAttorneyMobileNo','$ClosingAttorneyEmailID','$ClosingAttorneyLatitude','$ClosingAttorneyLongitude','$CAheadshot_img','$BankLogo')";
$resultClosingAttorney=mysql_query($insertClosingAttorney) or die(mysql_error());
}
}
	
	header('Location:Loan.php');
}
?>