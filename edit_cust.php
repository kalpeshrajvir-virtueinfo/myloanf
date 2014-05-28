<?php 
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
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
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
var x=document.getElementById("email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if(document.getElementById("cust_name").value=="")
{
alert("Enter Customer Name");
v=false;
}
else if(document.getElementById("address").value=="")
{
alert("Enter Address");
v=false;
}
else if(document.getElementById("phone").value=="")
{
alert("Enter Phone Number");
v=false;
}
else if(document.getElementById("email").value=="")
{
alert("Enter Email Id");
v=false;
}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
alert("Not a valid e-mail address");
v=false;
}
else if(document.getElementById("pass").value=="")
{
alert("Enter Password");
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
<h1 align="center">Edit Customer</h1><br /><br />
<form action="editcustomer_task.php" method="post"  onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
   
   <?php
   $CustomerId=$_REQUEST['id'];
   $select="select * from Customers where CustomerId='$CustomerId'";
$result=mysql_query($select) or die(mysql_error());
$row=mysql_fetch_assoc($result);

   ?>
    <tr>
    <td height="37" style="font-size:20px;">Customer Name</td><td>:<td>
    <td><input type="text" name="cust_name" id="cust_name" value="<?php echo $row['CustomerName']; ?>"><input type="hidden" id="CustomerId" name="CustomerId" value="<?php echo $CustomerId; ?>"/></td>
    </tr>
    <tr>
    <td height="35" style="font-size:20px;">Address</td><td>:<td>
    <td><textarea name="address" id="address"><?php echo $row['Address']; ?></textarea></td>
    </tr>
    <tr>
    <td height="39" style="font-size:20px;">Phone Number</td><td>:<td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $row['PhoneNumber']; ?>"></td>
    </tr>
     <tr>
    <td height="34" style="font-size:20px;">Email ID</td><td>:<td>
    <td><input type="text" name="email" id="email" value="<?php echo $row['EmailId']; ?>"></td>
    </tr>
    <tr>
    <td height="34" style="font-size:20px;">Password</td><td>:<td>
    <td><input type="text" name="pass" id="pass" value="<?php echo $row['Password']; ?>"></td>
    </tr>
    <tr><td>&nbsp;&nbsp;</td>
    <td colspan="2"><input type="submit" value="Save" /></td></tr>
    </table>
        </form>        
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>