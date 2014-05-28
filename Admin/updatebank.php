<?php
include("connect.php");
$bankid=$_REQUEST['editID'];
$bankname=$_REQUEST['bnkname'];
$bankPhoneNo=$_REQUEST['bnkphone'];
$bankemail=$_REQUEST['bnkemailid'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
$officer_name=$_REQUEST['officers_name'];
$headshot=$_FILES['headshots']['name'];
$company_logo=$_FILES['c_logo']['name'];
$latitude=$_REQUEST['lattitude'];
$longitude=$_REQUEST['longitude'];
$mobileNo=$_REQUEST['mobileNo'];
$licensing=$_REQUEST['licensing'];
if($company_logo!="")
{

$ext=substr(strrchr($company_logo,'.'),1);
$rander=rand();
$img=$rander.".".$ext;
move_uploaded_file($_FILES['c_logo']['tmp_name'],"company_logo/".$img);
$update_clogo="UPDATE BankDetails set company_logo='$img' WHERE BankId='$bankid'";
$result=mysql_query($update_clogo);
$update_clogo_officer="UPDATE LoanOfficer set BankLogo='$img' WHERE Bank_ID='$bankid'";
$result_logo=mysql_query($update_clogo_officer);
}

if($headshot!="")
{

$ext=substr(strrchr($headshot,'.'),1);
$rander=rand();
$headshotimg=$rander.".".$ext;
move_uploaded_file($_FILES['headshots']['tmp_name'],"company_logo/".$headshotimg);
$update_headshot="UPDATE BankDetails set Headshots='$headshotimg' WHERE BankId='$bankid'";
$result=mysql_query($update_headshot);
$update_headshot_officer="UPDATE LoanOfficer set Headshot='$headshotimg' WHERE Bank_ID='$bankid'";
$result_headshot=mysql_query($update_headshot_officer);
}
  $update="UPDATE BankDetails set BankName='$bankname',BankPhoneNo='$bankPhoneNo',BankmailID='$bankemail',Address='$address',PhoneNumber='$phone',EmailId='$emailid',Password='$password',officers_name='$officer_name',MobileNo='$mobileNo',Lattitude='$latitude',Longitude='$longitude',Licensing='$licensing' WHERE BankId='$bankid'";
$result=mysql_query($update);

$update_officer="UPDATE LoanOfficer set BankName='$bankname',Location='$address',PhoneNo='$phone',EmailID='$emailid',Name='$officer_name',MobileNo='$mobileNo',Latitude='$latitude',Longitude='$longitude' WHERE Bank_ID='$bankid'";
$result_officer=mysql_query($update_officer);
header('location:Banks.php');
?>