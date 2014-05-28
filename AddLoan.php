<?php session_start();
session_start();
$uname=$_SESSION['uid'];
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
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<script type="text/javascript" src="ezcalendar_orange.js"></script>
<link rel="stylesheet" type="text/css" href="ezcalendar_orange.css" />
<script type="text/javascript">
function validation()
{
var v=true;
if(document.getElementById("cus_id").value=="")
{
alert("Enter Customer Id");
v=false;
}
else if(document.getElementById("laddress").value=="")
{
alert("Enter Loan Address");
v=false;
}
else if(document.getElementById("lamount").value=="")
{
alert("Enter Loan Amount");
v=false;
}
else if(document.getElementById("interest_rate").value=="")
{
alert("Enter Interest Rate");
v=false;
}
else if(document.getElementById("lprogram").value=="")
{
alert("Enter Loan Program");
v=false;
}
else
{
v=true;
}
return v;
}
</script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<h1 align="center">Add Customer Loan</h1><br /><br />
<form action="AddLoan_task.php" method="post"  onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
   <tr>
    <td height="37" style="font-size:20px;">Customer Id</td><td>:<td>
    <td><input type="text" name="cus_id" id="cus_id"></td>
    </tr>
    <tr>
    <td height="37" style="font-size:20px;">Loan Address</td><td>:<td>
    <td><textarea name="laddress" id="laddress"></textarea></td>
    </tr>
    <tr>
    <td height="35" style="font-size:20px;">Loan Amount</td><td>:<td>
    <td><input type="text" name="lamount" id="lamount"></td>
    </tr>
    <tr>
    <td height="39" style="font-size:20px;">Interest Rate</td><td>:<td>
    <td><input type="text" name="interest_rate" id="interest_rate"></td>
    </tr>
     <tr>
    <td height="34" style="font-size:20px;">Loan Program</td><td>:<td>
    <td><input type="text" name="lprogram" id="lprogram"></td>
    </tr>
    <tr><td>&nbsp;&nbsp;</td>
    <td colspan="2"><input type="submit" value="Submit" /></td></tr>
    </table>
        </form>        
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
