<?php ob_start();

include('connect.php');
$email=$_REQUEST['email'];
$deviceType=$_REQUEST['DeviceType'];
$password=$_REQUEST['password'];
$DeviceToken=$_REQUEST['DeviceToken'];
 $selectreg="select * from  Customers where EmailId='$email'  and Password='$password'";
$resultreg=mysql_query($selectreg) or die(mysql_error());

if(mysql_num_rows($resultreg)>0)
{
	
	$rowreg=mysql_fetch_assoc($resultreg);
	
		 $regid=$rowreg['CustomerId'];
		 $selectloan="select * from customersLoanDetails where Customer_id='$regid'";
		 $resultloan=mysql_query($selectloan) or die(mysql_error());
		 if(mysql_num_rows($resultloan)>0)
		 {
			 $rowloan=mysql_fetch_assoc($resultloan);
			 $LoanId=$rowloan['loan_id'];
		
		$updatedevice="update Customers set DeviceToken='$DeviceToken',DeviceType='$deviceType' where CustomerId='$regid'";
		$resultdevice=mysql_query($updatedevice) or die(mysql_error());
	$result[]=array("Login"=>"Succes","RegId"=>$regid,"LoanId"=>$LoanId);
		 }
		 else
		 {
			 $result[]=array("Login"=>"Failed");
		 }
}
else
{
	$result[]=array("Login"=>"Failed");
}

header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($result);
echo $data;
?>