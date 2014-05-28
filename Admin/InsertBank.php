<?php
include('connect.php');
$bnkname=$_POST['bnkname'];
$bankphone=$_POST['bank_phone'];
$bank_mailID=$_POST['bank_emailid'];
$address=$_POST['address'];
$phone=$_POST['phone'];
 $emailid=$_POST['emailid'];
$password=$_POST['password'];
$officers_name=$_POST['officers_name'];
$mobileNo=$_POST['mobile'];
$headshots=$_FILES['headshots']['name'];
$company_logo=$_FILES['c_logo']['name'];
$lattitude=$_POST['lattitude'];
$longitude=$_POST['longitude'];
$licensing=$_POST['licensing'];
if($company_logo!="")
{

$ext=substr(strrchr($company_logo,'.'),1);
$rander=rand();
$img=$rander.".".$ext;
move_uploaded_file($_FILES['c_logo']['tmp_name'],"company_logo/".$img);
}

if($headshots!="")
{
	$ext=substr(strrchr($headshots,'.'),1);
$rander=rand();
$headshot_img=$rander.".".$ext;
move_uploaded_file($_FILES['headshots']['tmp_name'],"company_logo/".$headshot_img);
}

$select="select * from BankDetails where EmailId='$emailid' ";
$result_select=mysql_query($select) or die(mysql_error());
if(mysql_num_rows($result_select)>0)
{
	?>
	<script>
	alert('Email Already exits');
	window.location='Banks.php';
	</script>
    <?
}
else
{
 $insertbank="insert into  BankDetails (BankName,BankPhoneNo,BankmailID,Address,PhoneNumber,EmailId,Password,officers_name,MobileNo,company_logo,Headshots,Lattitude,Longitude,Licensing) values ('$bnkname','$bankphone','$bank_mailID','$address','$phone','$emailid','$password','$officers_name','$mobileNo','$img','$headshot_img','$lattitude','$longitude','$licensing')";
$resultbank=mysql_query($insertbank) or die(mysql_error());
$bankId=mysql_insert_id();

$insertLoanOfficer="insert into LoanOfficer(Bank_ID,Name,BankName,Location,PhoneNo,MobileNo,EmailID,Latitude,Longitude,Headshot,BankLogo)values('$bankId','$officers_name','$bnkname','$address','$phone','$mobileNo','$emailid','$lattitude','$longitude','$headshot_img','$img')";
$result_loanofficer=mysql_query($insertLoanOfficer);
if($resultbank)
{
	header('Location:Banks.php');
}
}
?>