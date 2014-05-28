<?php ob_start();
include('connect.php');
$FirstName=$_REQUEST['FirstName'];
$LastName=$_REQUEST['LastName'];
$EmailAddress=$_REQUEST['EmailAddress'];
$PhoneNumber=$_REQUEST['PhoneNumber'];
$WayToContact=$_REQUEST['WayToContact'];
$Address=$_REQUEST['Address'];
$City=$_REQUEST['City'];
$State=$_REQUEST['State'];
$ZipCode=$_REQUEST['ZipCode'];
$Mortgage=$_REQUEST['Mortgage'];
$SalesPrice=$_REQUEST['SalesPrice'];
$DesiredDownPayment=$_REQUEST['DesiredDownPayment'];
$CreditRating=$_REQUEST['CreditRating'];
$LoanOfficerName=$_REQUEST['LoanOfficerName'];
$to = "jenniferhjones@yahoo.com";
//$to = "santhikrishna.android@gmail.com";
$subject = "Get Pre_Qualified";
$txt = "FirstName : $FirstName LastName : $LastName,EmailAddress : $EmailAddress,PhoneNumber : $PhoneNumber, WayToContact : $WayToContact, Address : $Address,City : $City, State : $State, ZipCode : $ZipCode,  Which type of mortgage are you using : $Mortgage, Approximate sales price : $SalesPrice, Desired Down Payment :$DesiredDownPayment, Credit Rating : $CreditRating, Are you presently working with a loan officer.if yes,then who ? : $LoanOfficerName";
$headers = "From: $EmailAddress" . "\r\n";

$Mailsend=mail($to,$subject,$txt,$headers);
if ($Mailsend)
{
	$result['Mail']="Send";
}
else
{
	$result['Mail']="Failed";
}
$data='Content-type: application/json';
$data=json_encode($result); 
echo $data;
?>