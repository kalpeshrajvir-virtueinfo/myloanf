<?php 
session_start();

$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
if(!$uname)
{
header('Location:index.php');	
}
include("connect.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="timepicker/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
 <link rel="stylesheet" href="timepicker/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!--<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<script type="text/javascript" src="ezcalendar_orange.js"></script>
<link rel="stylesheet" type="text/css" href="ezcalendar_orange.css" />
<script>window.jQuery || document.write('<script src="timepicker/jquery/jquery-1.10.1.min.js"><\/script>')</script>-->
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	$(function() {
		$( "#datepicker1" ).datepicker();
	});
	</script>
<script type="text/javascript">
function validation()
{

var v=true;
if(document.getElementById("name").value!="")
{
 if(document.getElementById("PhoneNo").value=="")
{
alert("Enter Processor Phone Number");
document.getElementById("PhoneNo").focus();
v=false;
}
else if(document.getElementById("mobileNo").value=="")
{
alert("Enter Processor mobile number");
document.getElementById("mobileNo").focus();
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter Processor email ID");
document.getElementById("email").focus();
v=false;
}
else if(document.getElementById("location").value=="")
{
alert("Enter Processor location");
document.getElementById("location").focus();
v=false;
}
else if((document.getElementById("Headshot").value==""))
{
alert("upload Processor Headshot");
document.getElementById("Headshot").focus();
v=false;
}
else
{
v=true;
}
return v;
}
else if(document.getElementById("PhoneNo").value!="")
{
if(document.getElementById("name").value=="")
{
alert("Enter the processor name");
document.getElementById("name").focus();
v=false;
}
else if(document.getElementById("mobileNo").value=="")
{
alert("Enter processor mobile number");
document.getElementById("mobileNo").focus();
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter processor email ID");
document.getElementById("email").focus();
v=false;
}
else if(document.getElementById("location").value=="")
{
alert("Enter processor location");
document.getElementById("location").focus();
v=false;
}
else if((document.getElementById("Headshot").value==""))
{
alert("upload processor Heaadshot");
document.getElementById("Headshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("mobileNo").value!="")
{
if(document.getElementById("name").value=="")
{
alert("Enter the processor name");
document.getElementById("name").focus();
v=false;
}
else if(document.getElementById("PhoneNo").value=="")
{
alert("Enter processor Phone number");
document.getElementById("PhoneNo").focus();
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter processor email ID");
document.getElementById("email").focus();
v=false;
}
else if(document.getElementById("location").value=="")
{
alert("Enter processor location");
document.getElementById("location").focus();
v=false;
}
else if((document.getElementById("Headshot").value==""))
{
alert("upload processor Heaadshot");
document.getElementById("Headshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("email").value!="")
{
if(document.getElementById("name").value=="")
{
alert("Enter the processor name");
document.getElementById("name").focus();
v=false;
}
else if(document.getElementById("PhoneNo").value=="")
{
alert("Enter processor Phone number");
document.getElementById("PhoneNo").focus();
v=false;
}
else if(document.getElementById("mobileNo").value=="")
{
alert("Enter processor mobileNo");
document.getElementById("mobileNo").focus();
v=false;
}
else if(document.getElementById("location").value=="")
{
alert("Enter processor location");
document.getElementById("location").focus();
v=false;
}
else if((document.getElementById("Headshot").value==""))
{
alert("upload processor Heaadshot");
document.getElementById("Headshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("location").value!="")
{
if(document.getElementById("name").value=="")
{
alert("Enter the processor name");
document.getElementById("name").focus();
v=false;
}
else if(document.getElementById("PhoneNo").value=="")
{
alert("Enter processor Phone number");
document.getElementById("PhoneNo").focus();
v=false;
}
else if(document.getElementById("mobileNo").value=="")
{
alert("Enter processor mobileNo");
document.getElementById("mobileNo").focus();
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter processor email");
document.getElementById("email").focus();
v=false;
}
else if((document.getElementById("Headshot").value==""))
{
alert("upload processor Heaadshot");
document.getElementById("Headshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("image_shot").value!="")
{
if(document.getElementById("name").value=="")
{
alert("Enter the processor name");
document.getElementById("name").focus();
v=false;
}
else if(document.getElementById("PhoneNo").value=="")
{
alert("Enter processor Phone number");
document.getElementById("PhoneNo").focus();
v=false;
}
else if(document.getElementById("mobileNo").value=="")
{
alert("Enter processor mobileNo");
document.getElementById("mobileNo").focus();
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter processor email");
document.getElementById("email").focus();
v=false;
}
else if((document.getElementById("location").value==""))
{
alert("Enter processor location");
document.getElementById("location").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("LAname").value!="")
{
 if(document.getElementById("LAPhoneNo").value=="")
{
alert("Enter Loan Assistant Phone Number");
document.getElementById("LAPhoneNo").focus();
v=false;
}
else if(document.getElementById("LAmobileNo").value=="")
{
alert("Enter Loan Assistant mobile number");
document.getElementById("LAmobileNo").focus();
v=false;
}
else if(document.getElementById("LAemail").value=="")
{
alert("Enter Loan Assistant email ID");
document.getElementById("LAemail").focus();
v=false;
}
else if(document.getElementById("LAlocation").value=="")
{
alert("Enter Loan Assistant location");
document.getElementById("LAlocation").focus();
v=false;
}
else if((document.getElementById("LAHeadshot").value==""))
{
alert("upload Loan Assistant Heaadshot");
document.getElementById("LAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;
}
else if(document.getElementById("LAPhoneNo").value!="")
{
if(document.getElementById("LAname").value=="")
{
alert("Enter Loan Assistant name");
document.getElementById("LAname").focus();
v=false;
}
else if(document.getElementById("LAmobileNo").value=="")
{
alert("Enter Loan Assistant mobile number");
document.getElementById("LAmobileNo").focus();
v=false;
}
else if(document.getElementById("LAemail").value=="")
{
alert("Enter Loan Assistant email ID");
document.getElementById("LAemail").focus();
v=false;
}
else if(document.getElementById("LAlocation").value=="")
{
alert("Enter Loan Assistant location");
document.getElementById("LAlocation").focus();
v=false;
}
else if((document.getElementById("LAHeadshot").value==""))
{
alert("upload Loan Assistant Heaadshot");
document.getElementById("LAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("LAmobileNo").value!="")
{
if(document.getElementById("LAname").value=="")
{
alert("Enter loan assistant name");
document.getElementById("LAname").focus();
v=false;
}
else if(document.getElementById("LAPhoneNo").value=="")
{
alert("Enter loan assistant Phone number");
document.getElementById("LAPhoneNo").focus();
v=false;
}
else if(document.getElementById("LAemail").value=="")
{
alert("Enter Loan Assistant email ID");
document.getElementById("LAemail").focus();
v=false;
}
else if(document.getElementById("LAlocation").value=="")
{
alert("Enter Loan Assistant location");
document.getElementById("LAlocation").focus();
v=false;
}
else if((document.getElementById("LAHeadshot").value==""))
{
alert("upload Loan Assistant Heaadshot");
document.getElementById("LAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("LAemail").value!="")
{
if(document.getElementById("LAname").value=="")
{
alert("Enter Loan Assistant name");
document.getElementById("LAname").focus();
v=false;
}
else if(document.getElementById("LAPhoneNo").value=="")
{
alert("Enter Loan Assistant Phone number");
document.getElementById("LAPhoneNo").focus();
v=false;
}
else if(document.getElementById("LAmobileNo").value=="")
{
alert("Enter Loan Assistant mobileNo");
document.getElementById("LAmobileNo").focus();
v=false;
}
else if(document.getElementById("LAlocation").value=="")
{
alert("Enter Loan Assistant location");
document.getElementById("LAlocation").focus();
v=false;
}
else if((document.getElementById("LAHeadshot").value==""))
{
alert("upload Loan Assistant Heaadshot");
document.getElementById("LAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("LAlocation").value!="")
{
if(document.getElementById("LAname").value=="")
{
alert("Enter Loan Assistant name");
document.getElementById("LAname").focus();
v=false;
}
else if(document.getElementById("LAPhoneNo").value=="")
{
alert("Enter Loan Assistant Phone number");
document.getElementById("LAPhoneNo").focus();
v=false;
}
else if(document.getElementById("LAmobileNo").value=="")
{
alert("Enter Loan Assistant mobileNo");
document.getElementById("LAmobileNo").focus();
v=false;
}
else if(document.getElementById("LAemail").value=="")
{
alert("Enter Loan Assistant email ID");
document.getElementById("LAemail").focus();
v=false;
}
else if((document.getElementById("LAHeadshot").value==""))
{
alert("upload Loan Assistant Heaadshot");
document.getElementById("LAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("image_shot1").value!="")
{
if(document.getElementById("LAname").value=="")
{
	
alert("Enter Loan Assistant name");
document.getElementById("LAname").focus();
//alert('hai');
v=false;
}
else if(document.getElementById("LAPhoneNo").value=="")
{
alert("Enter Loan Assistant Phone number");
document.getElementById("LAPhoneNo").focus();
v=false;
}
else if(document.getElementById("LAmobileNo").value=="")
{
alert("Enter Loan Assistant mobileNo");
document.getElementById("LAmobileNo").focus();
v=false;
}
else if(document.getElementById("LAemail").value=="")
{
alert("Enter Loan Assistant email ID");
document.getElementById("LAemail").focus();
v=false;
}
else if((document.getElementById("LAlocation").value==""))
{
alert("Enter Loan Assistant location");
document.getElementById("LAlocation").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Rname").value!="")
{
 if(document.getElementById("RPhoneNo").value=="")
{
alert("Enter Realtor Phone Number");
document.getElementById("RPhoneNo").focus();
v=false;
}
else if(document.getElementById("RAmobileNo").value=="")
{
alert("Enter Realtor mobile number");
document.getElementById("RAmobileNo").focus();
v=false;
}
else if(document.getElementById("Remail").value=="")
{
alert("Enter Realtor email ID");
document.getElementById("Remail").focus();
v=false;
}
else if(document.getElementById("Rlocation").value=="")
{
alert("Enter Realtor location");
document.getElementById("Rlocation").focus();
v=false;
}
else if((document.getElementById("RHeadshot").value==""))
{
alert("upload Realtor Heaadshot");
document.getElementById("RHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;
}
else if(document.getElementById("RPhoneNo").value!="")
{
if(document.getElementById("Rname").value=="")
{
alert("Enter Realtor name");
document.getElementById("Rname").focus();
v=false;
}
else if(document.getElementById("RAmobileNo").value=="")
{
alert("Enter Realtor mobile number");
document.getElementById("RAmobileNo").focus();
v=false;
}
else if(document.getElementById("Remail").value=="")
{
alert("Enter Realtor email ID");
document.getElementById("Remail").focus();
v=false;
}
else if(document.getElementById("Rlocation").value=="")
{
alert("Enter Realtor location");
document.getElementById("Rlocation").focus();
v=false;
}
else if((document.getElementById("RHeadshot").value==""))
{
alert("upload Realtor Heaadshot");
document.getElementById("RHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("RAmobileNo").value!="")
{
if(document.getElementById("Rname").value=="")
{
alert("Enter Realtor name");
document.getElementById("Rname").focus();
v=false;
}
else if(document.getElementById("RPhoneNo").value=="")
{
alert("Enter Realtor Phone number");
document.getElementById("RPhoneNo").focus();
v=false;
}
else if(document.getElementById("Remail").value=="")
{
alert("Enter Realtor email ID");
document.getElementById("Remail").focus();
v=false;
}
else if(document.getElementById("Rlocation").value=="")
{
alert("Enter Realtor location");
document.getElementById("Rlocation").focus();
v=false;
}
else if((document.getElementById("RHeadshot").value==""))
{
alert("upload Realtor Heaadshot");
document.getElementById("RHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Remail").value!="")
{
if(document.getElementById("Rname").value=="")
{
alert("Enter the processor name");
document.getElementById("Rname").focus();
v=false;
}
else if(document.getElementById("RPhoneNo").value=="")
{
alert("Enter Realtor Phone number");
document.getElementById("RPhoneNo").focus();
v=false;
}
else if(document.getElementById("RAmobileNo").value=="")
{
alert("Enter Realtor mobileNo");
document.getElementById("RAmobileNo").focus();
v=false;
}
else if(document.getElementById("Rlocation").value=="")
{
alert("Enter Realtor location");
document.getElementById("Rlocation").focus();
v=false;
}
else if((document.getElementById("RHeadshot").value==""))
{
alert("upload Realtor Heaadshot");
document.getElementById("RHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Rlocation").value!="")
{
if(document.getElementById("Rname").value=="")
{
alert("Enter Realtor name");
document.getElementById("Rname").focus();
v=false;
}
else if(document.getElementById("RPhoneNo").value=="")
{
alert("Enter Realtor Phone number");
document.getElementById("RPhoneNo").focus();
v=false;
}
else if(document.getElementById("RAmobileNo").value=="")
{
alert("Enter Realtor mobileNo");
document.getElementById("RAmobileNo").focus();
v=false;
}
else if(document.getElementById("Remail").value=="")
{
alert("Enter Realtor email ID");
document.getElementById("Remail").focus();
v=false;
}
else if((document.getElementById("RHeadshot").value==""))
{
alert("upload Realtor Heaadshot");
document.getElementById("RHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("image_shot2").value!="")
{
if(document.getElementById("Rname").value=="")
{
alert("Enter Realtor name");
document.getElementById("Rname").focus();
v=false;
}
else if(document.getElementById("RPhoneNo").value=="")
{
alert("Enter Realtor Phone number");
document.getElementById("RPhoneNo").focus();
v=false;
}
else if(document.getElementById("RAmobileNo").value=="")
{
alert("Enter Realtor mobileNo");
document.getElementById("RAmobileNo").focus();
v=false;
}
else if(document.getElementById("Remail").value=="")
{
alert("Enter Realtor email ID");
document.getElementById("Remail").focus();
v=false;
}
else if((document.getElementById("Rlocation").value==""))
{
alert("Enter Realtor location");
document.getElementById("Rlocation").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Tname").value!="")
{
 if(document.getElementById("TPhoneNo").value=="")
{
alert("Enter Title Officer Phone Number");
document.getElementById("TPhoneNo").focus();
v=false;
}
else if(document.getElementById("TAmobileNo").value=="")
{
alert("Enter Title Officer mobile number");
document.getElementById("TAmobileNo").focus();
v=false;
}
else if(document.getElementById("Temail").value=="")
{
alert("Enter Title Officer email ID");
document.getElementById("Temail").focus();
v=false;
}
else if(document.getElementById("Tlocation").value=="")
{
alert("Enter Title Officer location");
document.getElementById("Tlocation").focus();
v=false;
}
else if((document.getElementById("THeadshot").value==""))
{
alert("upload Title Officer Heaadshot");
document.getElementById("THeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;
}
else if(document.getElementById("TPhoneNo").value!="")
{
if(document.getElementById("Tname").value=="")
{
alert("Enter Title Officer name");
document.getElementById("Tname").focus();
v=false;
}
else if(document.getElementById("TAmobileNo").value=="")
{
alert("Enter Title Officer mobile number");
document.getElementById("TAmobileNo").focus();
v=false;
}
else if(document.getElementById("Temail").value=="")
{
alert("Enter Title Officer email ID");
document.getElementById("Temail").focus();
v=false;
}
else if(document.getElementById("Tlocation").value=="")
{
alert("Enter Title Officer location");
document.getElementById("Tlocation").focus();
v=false;
}
else if((document.getElementById("THeadshot").value==""))
{
alert("upload Title Officer Heaadshot");
document.getElementById("THeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("TAmobileNo").value!="")
{
if(document.getElementById("Tname").value=="")
{
alert("Enter Title Officer name");
document.getElementById("Tname").focus();
v=false;
}
else if(document.getElementById("TPhoneNo").value=="")
{
alert("Enter Title Officer Phone number");
document.getElementById("TPhoneNo").focus();
v=false;
}
else if(document.getElementById("Temail").value=="")
{
alert("Enter Title Officer email ID");
document.getElementById("Temail").focus();
v=false;
}
else if(document.getElementById("Tlocation").value=="")
{
alert("Enter Title Officer location");
document.getElementById("Tlocation").focus();
v=false;
}
else if((document.getElementById("THeadshot").value==""))
{
alert("upload Title Officer Heaadshot");
document.getElementById("THeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Temail").value!="")
{
if(document.getElementById("Tname").value=="")
{
alert("Enter the processor name");
document.getElementById("Tname").focus();
v=false;
}
else if(document.getElementById("TPhoneNo").value=="")
{
alert("Enter Title Officer Phone number");
document.getElementById("TPhoneNo").focus();
v=false;
}
else if(document.getElementById("TAmobileNo").value=="")
{
alert("Enter Title Officer mobileNo");
document.getElementById("TAmobileNo").focus();
v=false;
}
else if(document.getElementById("Tlocation").value=="")
{
alert("Enter Title Officer location");
document.getElementById("Tlocation").focus();
v=false;
}
else if((document.getElementById("THeadshot").value==""))
{
alert("upload Title Officer Heaadshot");
document.getElementById("THeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("Tlocation").value!="")
{
if(document.getElementById("Tname").value=="")
{
alert("Enter Title Officer name");
document.getElementById("Tname").focus();
v=false;
}
else if(document.getElementById("TPhoneNo").value=="")
{
alert("Enter Title Officer Phone number");
document.getElementById("TPhoneNo").focus();
v=false;
}
else if(document.getElementById("TAmobileNo").value=="")
{
alert("Enter Title Officer mobileNo");
document.getElementById("TAmobileNo").focus();
v=false;
}
else if(document.getElementById("Temail").value=="")
{
alert("Enter Title Officer email ID");
document.getElementById("Temail").focus();
v=false;
}
else if((document.getElementById("THeadshot").value==""))
{
alert("upload Title Officer Heaadshot");
document.getElementById("THeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("image_shot3").value!="")
{
if(document.getElementById("Tname").value=="")
{
alert("Enter Title Officer name");
document.getElementById("Tname").focus();
v=false;
}
else if(document.getElementById("TPhoneNo").value=="")
{
alert("Enter Title Officer Phone number");
document.getElementById("TPhoneNo").focus();
v=false;
}
else if(document.getElementById("TAmobileNo").value=="")
{
alert("Enter Title Officer mobileNo");
document.getElementById("TAmobileNo").focus();
v=false;
}
else if(document.getElementById("Temail").value=="")
{
alert("Enter Title Officer email ID");
document.getElementById("Temail").focus();
v=false;
}
else if((document.getElementById("Tlocation").value==""))
{
alert("Enter Title Officer location");
document.getElementById("Tlocation").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("CAname").value!="")
{
 if(document.getElementById("CAPhoneNo").value=="")
{
alert("Enter Closing Attorney Phone Number");
document.getElementById("CAPhoneNo").focus();
v=false;
}
else if(document.getElementById("CAAmobileNo").value=="")
{
alert("Enter Closing Attorney mobile number");
document.getElementById("CAAmobileNo").focus();
v=false;
}
else if(document.getElementById("CAemail").value=="")
{
alert("Enter Closing Attorney email ID");
document.getElementById("CAemail").focus();
v=false;
}
else if(document.getElementById("CAlocation").value=="")
{
alert("Enter Closing Attorney location");
document.getElementById("CAlocation").focus();
v=false;
}
else if((document.getElementById("CAHeadshot").value==""))
{
alert("upload Closing Attorney Heaadshot");
document.getElementById("CAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;
}
else if(document.getElementById("CAPhoneNo").value!="")
{
if(document.getElementById("CAname").value=="")
{
alert("Enter Closing Attorney name");
document.getElementById("CAname").focus();
v=false;
}
else if(document.getElementById("CAAmobileNo").value=="")
{
alert("Enter Closing Attorney mobile number");
document.getElementById("CAAmobileNo").focus();
v=false;
}
else if(document.getElementById("CAemail").value=="")
{
alert("Enter Closing Attorney email ID");
document.getElementById("CAemail").focus();
v=false;
}
else if(document.getElementById("CAlocation").value=="")
{
alert("Enter Closing Attorney location");
document.getElementById("CAlocation").focus();
v=false;
}
else if((document.getElementById("CAHeadshot").value==""))
{
alert("upload Closing Attorney Heaadshot");
document.getElementById("CAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("CAAmobileNo").value!="")
{
if(document.getElementById("CAname").value=="")
{
alert("Enter Closing Attorney name");
document.getElementById("CAname").focus();
v=false;
}
else if(document.getElementById("CAPhoneNo").value=="")
{
alert("Enter Closing Attorney Phone number");
document.getElementById("CAPhoneNo").focus();
v=false;
}
else if(document.getElementById("CAemail").value=="")
{
alert("Enter Closing Attorney email ID");
document.getElementById("CAemail").focus();
v=false;
}
else if(document.getElementById("CAlocation").value=="")
{
alert("Enter Closing Attorney location");
document.getElementById("CAlocation").focus();
v=false;
}
else if((document.getElementById("CAHeadshot").value==""))
{
alert("upload Closing Attorney Heaadshot");
document.getElementById("CAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("CAemail").value!="")
{
if(document.getElementById("CAname").value=="")
{
alert("Enter the processor name");
document.getElementById("CAname").focus();
v=false;
}
else if(document.getElementById("CAPhoneNo").value=="")
{
alert("Enter Closing Attorney Phone number");
document.getElementById("CAPhoneNo").focus();
v=false;
}
else if(document.getElementById("CAAmobileNo").value=="")
{
alert("Enter Closing Attorney mobileNo");
document.getElementById("CAAmobileNo").focus();
v=false;
}
else if(document.getElementById("CAlocation").value=="")
{
alert("Enter Closing Attorney location");
document.getElementById("CAlocation").focus();
v=false;
}
else if((document.getElementById("CAHeadshot").value==""))
{
alert("upload Closing Attorney Heaadshot");
document.getElementById("CAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("CAlocation").value!="")
{
if(document.getElementById("CAname").value=="")
{
alert("Enter Closing Attorney name");
document.getElementById("CAname").focus();
v=false;
}
else if(document.getElementById("CAPhoneNo").value=="")
{
alert("Enter Closing Attorney Phone number");
document.getElementById("CAPhoneNo").focus();
v=false;
}
else if(document.getElementById("CAAmobileNo").value=="")
{
alert("Enter Closing Attorney mobileNo");
document.getElementById("CAAmobileNo").focus();
v=false;
}
else if(document.getElementById("CAemail").value=="")
{
alert("Enter Closing Attorney email ID");
document.getElementById("CAemail").focus();
v=false;
}
else if((document.getElementById("CAHeadshot").value==""))
{
alert("upload Closing Attorney Heaadshot");
document.getElementById("CAHeadshot").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
else if(document.getElementById("image_shot4").value!="")
{
if(document.getElementById("CAname").value=="")
{
alert("Enter Closing Attorney name");
document.getElementById("CAname").focus();
v=false;
}
else if(document.getElementById("CAPhoneNo").value=="")
{
alert("Enter Closing Attorney Phone number");
document.getElementById("CAPhoneNo").focus();
v=false;
}
else if(document.getElementById("CAAmobileNo").value=="")
{
alert("Enter Closing Attorney mobileNo");
document.getElementById("CAAmobileNo").focus();
v=false;
}
else if(document.getElementById("CAemail").value=="")
{
alert("Enter Closing Attorney email ID");
document.getElementById("CAemail").focus();
v=false;
}
else if((document.getElementById("CAlocation").value==""))
{
alert("Enter Closing Attorney location");
document.getElementById("CAlocation").focus();
v=false;
}
else
{
v=true;
}
return v;	
}
}
</script>
<script>
function expiration(val){
	
	/*alert(val);*/
	$.ajax({
		url:'expiration.php',
		data:"value="+val,
		type: "POST",
		success:function(result){
			/*document.getElementById('nurse_data').style.display="none";
			      document.getElementById('search_data').style.display="block";*/
			
						document.getElementById("duration").innerHTML=result;
		}
	});
	return false;
}

function total(val){
	
	//alert(val);
	var pricipal=document.getElementById('PI').value;
	var Taxes=document.getElementById('Taxes').value;
	var MI=document.getElementById('MI').value;
	var TotalMonthly=document.getElementById('TM');
	TotalMonthly.value= parseInt(pricipal)+ parseInt(Taxes) + parseInt(MI);
	
}
</script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD0X4v7eqMFcWCR-VZAJwEMfb47id9IZao"></script>
<script>
function getLatLangFromAddress(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('latitude').value=latlng.lat();
				  document.getElementById('longitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
		
		function getLatLangFromLPLocation(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('LPLatitude').value=latlng.lat();
				  document.getElementById('LPLongitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
		function getLatLangFromLALocation(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('LALatitude').value=latlng.lat();
				  document.getElementById('LALongitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
		function getLatLangFromRLocation(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('RLatitude').value=latlng.lat();
				  document.getElementById('RLongitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
		function getLatLangFromTLocation(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('TLatitude').value=latlng.lat();
				  document.getElementById('TLongitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
		function getLatLangFromCALocation(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('CALatitude').value=latlng.lat();
				  document.getElementById('CALongitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
    </script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<h1 align="center">Edit Loan</h1><br /><br />
 <?php
    $loan_id=$_REQUEST['id'];
   $select="select * from customersLoanDetails where loan_id='$loan_id'";
$result=mysql_query($select) or die(mysql_error());
$row=mysql_fetch_assoc($result);
 $customer_ID=$row['Customer_id'];
$prgm_nam=$row['loan_program'];
$interest=$row['interest_rate'];
$status=$row['status'];
$loan_progress=$row['LoanProgress'];
 $expirationdate=$row['ExpirationDate'];
  $expirationdate1=strtotime($expirationdate);
  $currentdate=date('y-m-d');
  $currentdate1=strtotime($currentdate);
   $resultdate=$expirationdate1-$currentdate1;
   if(($resultdate=='0')|| ($resultdate<0))
   {
	   
	   $update="update  customersLoanDetails set status='Not Locked' where loan_id='$loan_id'"  ; 
	   $result=mysql_query($update) or die(mysql_error($update));
   }
	  
   ?>
<form action="UpdateLoan_detail.php?loanid=<?php echo $loan_id; ?>" method="post" enctype="multipart/form-data" onsubmit="return validation()" >

            <table align="center" cellpadding="0" cellspacing="0" width="60%">
           
             <tr>
    <td style="font-size:20px;">Customer Name</td><td>:<td>
    <td><select name="custid" id="custid" style="margin-left: 5.5%;">
    
    <?php
	$select_customer_name="select * from  Customers where CustomerId='$customer_ID' ";
	$result_customer_name=mysql_query($select_customer_name);
	$row_customer_name=mysql_fetch_array($result_customer_name); 
	?>
    <option value="<?php echo $row_customer_name['CustomerId'] ?>" selected="selected"/><?php echo $row_customer_name['CustomerName'] ?></option>
    <?php
	$select_cusname="select * from Customers where CustomerId!='$customer_ID' AND Bank_ID='$id' "; 
	$res_cusname=mysql_query($select_cusname);
	while($row_cusname=mysql_fetch_array($res_cusname)){ 
	?>
    <option value="<?php echo $row_cusname['CustomerId'] ?>"><?php echo $row_cusname['CustomerName'] ?></option>
    <?php } ?>
    </select>
    </td>
    </tr>
   
    <tr>
    <td style="font-size:20px;">Start Date</td><td>:<td>
    <td><input type="text" name="stdate" id="startdate" value="<?php echo $row['StartDate'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">End Date</td><td>:<td>
    <td><input type="text" name="enddate" id="enddate" value="<?php echo $row['EndDate'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Sigin Time</td><td>:<td>
    <td><input type="text"  name="Signin" id="Signin" value="<?php echo $row['SignInTime'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Closing Location</td><td>:<td>
    <td><input type="text"  name="clslocation" id="clslocation" value="<?php echo $row['closinglocation'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Principal & Interest</td><td>:<td>
    <td><input type="text"  name="PI" id="PI" value="<?php echo $row['PI'] ?>" onchange="total(this.value)" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Taxes</td><td>:<td>
    <td><input type="text"  name="Taxes" id="Taxes" value="<?php echo $row['Taxes'] ?>" onchange="total(this.value)" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">MI</td><td>:<td>
    <td><input type="text"  name="MI" id="MI" value="<?php echo $row['MI'] ?>" onchange="total(this.value)" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Total Monthly</td><td>:<td>
    <td><input type="text"  name="TM" id="TM" value="<?php echo $row['Total'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Program</td><td>:<td>
    <td><select name="pgm_name" id="pgm_name" style="margin-left: 5.5%;"><option value="<?php echo $prgm_nam; ?>" selected="selected" ><?php echo $prgm_nam; ?></option>    <?php
	$select_pgm="select * from  Program where program_name!='$prgm_nam' AND Bank_ID='$id'";
	$res_pgm=mysql_query($select_pgm);
	while($row_pgm=mysql_fetch_array($res_pgm))
	{ 
	 ?> 
     <option value="<?php echo $row_pgm['program_name'] ?>"><?php echo $row_pgm['program_name'] ?></option>
     <?php }
	 ?>
    </select></td>
    </tr>
     <tr>
    <td style="font-size:20px;">Amount</td><td>:<td>
    <td><input type="text" name="amount" id="amount" value="<?php echo $row['loan_amount'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Loan Progress</td><td>:<td>
    <td><select name="Progress" id="Progress" style="margin-left: 5.5%;">
    <option value="<?php echo $loan_progress; ?>" selected="selected"><?php echo $loan_progress; ?></option>
    <?php if($loan_progress!='Application Received'){ ?>
    <option value="Application Received">Application Received</option>
    <?php } ?>
    <?php if($loan_progress!='Pre Approved'){ ?>
    <option value="Pre Approved">Pre Approved</option>
    <?php }  ?>
    <?php if($loan_progress!='Submitted to Underwritter'){ ?>
    <option value="Submitted to Underwritter">Submitted to Underwritter</option>
    <?php } ?>
    <?php if($loan_progress!='Appraisal Complete') { ?>
    <option value="Appraisal Complete">Appraisal Complete</option>
    <?php } ?>
    <?php if($loan_progress!='Signing Scheduled') {?>
    <option value="Signing Scheduled">Signing Scheduled</option>
    <?php } ?>
    </select></td>
    </tr>
      <tr>
    <td style="font-size:20px;">Interest Rate</td><td>:<td>
    <td><select name="Interest" id="Interest" style="margin-left: 5.5%;">
    
    <option value="<?php echo $interest; ?>" selected="selected" ><?php echo $interest; ?></option>
    <?php
	if($status=="Not Locked")
	{
   $sel_interest="select * from Program where Interest_rate!='$interest' AND Bank_ID='$id'";
   $res_interest=mysql_query($sel_interest)or die(mysql_error());
    while($row_interest=mysql_fetch_array($res_interest)){
	?>
    <option value="<?php echo $row_interest['Interest_rate']; ?>"><?php echo $row_interest['Interest_rate']; ?></option>
    <?php
	}
	}
	?>
    </select><select name="key" id="key" onchange="expiration(this.value)" style="margin-left: 5.5%;"><option value="<?php echo $status; ?>" selected="selected"><?php echo $status; ?></option>
    <?php if($status=="Not Locked") {?>
    
    <option value="Locked">Locked</option>
    <?php } else if($status=="Locked")
	{ ?>
    <option value="Not Locked">Not Locked</option>
    <?php } ?>
    
    </select></td>
    </tr>  
    <input type="hidden" name="latitude"  id="latitude" >
    <input type="hidden" name="longitude"  id="longitude">
 
     <tr>
    <td style="font-size:20px;">To Message</td><td>:<td>
    <td><input type="text" name="tomessage" id="tomessage" value="<?php echo $row['ToMessage'] ?>" style="margin-left: 5.5%;"></td>
    </tr>
    <tr id="duration">
    <?php
	if($status=="Locked")
	{
	 ?>
     <td style="font-size:20px;">Lock Expiration Date</td><td>:<td>
    <td><input type="text" name="ldate" id="ldate" placeholder="YYYY-MM-DD" value="<?php echo $row['ExpirationDate']; ?>" style="margin-left: 5.5%;"></td>
<?php
	}?>
    </tr>
    
    
    
    
               
                </table>
                
                <table align="center" cellpadding="0" cellspacing="0" width="60%">
                <?php
				$select_processor="select * from  LoanProcessor where Bank_ID='$id' AND customerId='$customer_ID'";
				$result_processor=mysql_query($select_processor) or die(mysql_error());
				$row_processor=mysql_fetch_array($result_processor);
				?>
     <tr>
    <td style="font-size:20px;">Loan processor</td><td>:<td>
    <td><input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row_processor['Name'];  ?>"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="PhoneNo"  id="PhoneNo" placeholder="office Number" value="<?php echo $row_processor['PhoneNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="mobileNo"  id="mobileNo" placeholder="Mobile Number" value="<?php echo $row_processor['MobileNo'];?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="email"  id="email" placeholder="Email ID"  value="<?php echo $row_processor['EmailID'];  ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="location"  id="location" placeholder="Location" value="<?php echo $row_processor['Location']; ?>" onChange="getLatLangFromLPLocation(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" ></td><td><td>
    <td>Headshot<input type="file" name="Headshot"  id="Headshot" value="" placeholder="Headshot"><img src="../company_logo/<?php echo $row_processor['Headshot']; ?>" style="width:50px; height:50px;"><input type="hidden" name="image_shot" id="image_shot" value="<?php echo $row_processor['Headshot']; ?>" /></td>
    </tr>
    <input type="hidden" name="LPLatitude"  id="LPLatitude" >
    <input type="hidden" name="LPLongitude"  id="LPLongitude" >
    
                <tr><td>&nbsp;&nbsp;</td>
                
                <?php
				$select_assistant="select * from  LoanAssistant where Bank_ID='$id' AND customerId='$customer_ID'";
				$result_assistant=mysql_query($select_assistant) or die(mysql_error());
				$row_assistant=mysql_fetch_array($result_assistant);
				?>
                 <tr>
    <td style="font-size:20px;">Loan Assistant</td><td>:<td>
    <td><input type="text" name="LAname" id="LAname" placeholder="Name" value="<?php echo $row_assistant['Name'];  ?>"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="LAPhoneNo"  id="LAPhoneNo" placeholder="office Number" value="<?php echo $row_assistant['PhoneNo'];  ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="LAmobileNo"  id="LAmobileNo" placeholder="Mobile Number" value="<?php echo $row_assistant['MobileNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="LAemail"  id="LAemail" placeholder="Email ID" value="<?php echo $row_assistant['EmailID']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="LAlocation"  id="LAlocation" placeholder="Location" value="<?php echo $row_assistant['Location']; ?>" onChange="getLatLangFromLALocation(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" ></td><td><td>
    <td>Headshot<input type="file" name="LAHeadshot" id="LAHeadshot"  value="<?php echo $row_assistant['Headshot']; ?>" placeholder="Headshot"><img src="../company_logo/<?php echo $row_assistant['Headshot']; ?>" style="width:50px; height:50px;"><input type="hidden" name="image_shot1" id="image_shot1" value="<?php echo $row_assistant['Headshot']; ?>" /></td>
    </tr>
    <input type="hidden" name="LALatitude"  id="LALatitude" >
    <input type="hidden" name="LALongitude"  id="LALongitude" >
    
                <tr><td>&nbsp;&nbsp;</td>
                <?php
				$select_realtor="select * from   Realtor where Bank_ID='$id' AND customerId='$customer_ID'";
				$result_realtor=mysql_query($select_realtor) or die(mysql_error());
				$row_realtor=mysql_fetch_array($result_realtor);
				?>
                 <tr>
    <td style="font-size:20px;">Realtor</td><td>:<td>
    <td><input type="text" name="Rname" id="Rname" placeholder="Name" value="<?php echo $row_realtor['Name'];  ?>"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="RPhoneNo"  id="RPhoneNo" placeholder="office Number" value="<?php echo $row_realtor['PhoneNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="RAmobileNo"  id="RAmobileNo" placeholder="Mobile Number" value="<?php echo $row_realtor['MobileNo'];  ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="Remail"  id="Remail" placeholder="Email ID" value="<?php echo $row_realtor['EmailID']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="Rlocation"  id="Rlocation" placeholder="Location" value="<?php echo $row_realtor['Location']; ?>" onChange="getLatLangFromRLocation(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" ></td><td><td>
    <td>Headshot<input type="file" name="RHeadshot" id="RHeadshot"  value="<?php echo $row_realtor['Headshot']; ?>" placeholder="Headshot"><img src="../company_logo/<?php echo $row_realtor['Headshot']; ?>" style="width:50px; height:50px;"><input type="hidden" name="image_shot2" id="image_shot2" value="<?php echo $row_realtor['Headshot']; ?>" /></td>
    </tr>
    <input type="hidden" name="RLatitude"  id="RLatitude" >
    <input type="hidden" name="RLongitude"  id="RLongitude" >
    
                <tr><td>&nbsp;&nbsp;</td>
                
                <?php
				$select_titleOfficer="select * from  TitleOfficer where Bank_ID='$id' AND customerId='$customer_ID'";
				$result_titleOfficer=mysql_query($select_titleOfficer) or die(mysql_error());
				$row_titleOfficer=mysql_fetch_array($result_titleOfficer);
				?>
                 <tr>
    <td style="font-size:20px;">Title Officer</td><td>:<td>
    <td><input type="text" name="Tname" id="Tname" placeholder="Name" value="<?php echo $row_titleOfficer['Name']; ?>"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="TPhoneNo"  id="TPhoneNo" placeholder="office Number" value="<?php echo $row_titleOfficer['PhoneNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="TAmobileNo"  id="TAmobileNo" placeholder="Mobile Number" value="<?php echo $row_titleOfficer['MobileNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="Temail"  id="Temail" placeholder="Email ID" value="<?php echo $row_titleOfficer['EmailID']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="Tlocation"  id="Tlocation" placeholder="Location" value="<?php echo $row_titleOfficer['Location']; ?>" onChange="getLatLangFromTLocation(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" ></td><td><td>
    <td>Headshot<input type="file" name="THeadshot" id="THeadshot"  value="<?php echo $row_titleOfficer['Headshot']; ?>" placeholder="Headshot"><img src="company_logo/<?php echo $row_titleOfficer['Headshot']; ?>" style="width:50px; height:50px;"><input type="hidden" name="image_shot3" id="image_shot3" value="<?php echo $row_titleOfficer['Headshot']; ?>" /></td>
    </tr>
    <input type="hidden" name="TLatitude"  id="TLatitude" >
    <input type="hidden" name="TLongitude"  id="TLongitude" >
    
    
                <tr><td>&nbsp;&nbsp;</td>
                <?php
				$select_closingAttorney="select * from   ClosingAttorney where Bank_ID='$id' AND customerId='$customer_ID'";
				$result_closingAttorney=mysql_query($select_closingAttorney) or die(mysql_error());
				$row_closingAttorney=mysql_fetch_array($result_closingAttorney);
				?>
                <tr>
    <td style="font-size:20px;">Closing Attorney</td><td>:<td>
    <td><input type="text" name="CAname" id="CAname" placeholder="Name" value="<?php echo $row_closingAttorney['Name']; ?>"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="CAPhoneNo"  id="CAPhoneNo" placeholder="office Number" value="<?php echo $row_closingAttorney['PhoneNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="CAAmobileNo"  id="CAAmobileNo" placeholder="Mobile Number" value="<?php echo $row_closingAttorney['MobileNo']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="CAemail"  id="CAemail" placeholder="Email ID" value="<?php echo $row_closingAttorney['EmailID']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;"></td><td><td>
    <td><input type="text" name="CAlocation"  id="CAlocation" placeholder="Location" value="<?php echo $row_closingAttorney['Location']; ?>" onChange="getLatLangFromCALocation(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" ></td><td><td>
    <td>Headshot<input type="file" name="CAHeadshot" id="CAHeadshot"  value="<?php echo $row_closingAttorney['Headshot']; ?>" placeholder="Headshot"><img src="../company_logo/<?php echo $row_closingAttorney['Headshot']; ?>" style="width:50px; height:50px;"><input type="hidden" name="image_shot4" id="image_shot4" value="<?php echo $row_closingAttorney['Headshot']; ?>" /></td>
    </tr>
    <input type="hidden" name="CALatitude"  id="CALatitude" >
    <input type="hidden" name="CALongitude"  id="CALongitude" >
                 <tr><td>&nbsp;&nbsp;</td>
                <td colspan="2"><input type="submit" value="Save" /></td></tr>
                </table>
                <div style="margin-left: 19%;margin-top: 4%;">
                <b style="font-size:20px"> Message From Customer</b>
                <?php
	$selectmessage="select * from  CustomerMessage  where Loan_ID='$loan_id' ";
	$resultMessage=mysql_query($selectmessage) or die(mysql_error());
	while($rowMessage=mysql_fetch_array($resultMessage))
	{
	?>
	
  
	
    
    <p><?php echo $rowMessage['message'] ?></p>
    
    
   
    <?php
	}
	?>
    </div>
                </form> 
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="timepicker/bootstrap/bootstrap.min.js"></script>
<script src="timepicker/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="timepicker/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="timepicker/js/flaty.js"></script>

</body>
</html>
