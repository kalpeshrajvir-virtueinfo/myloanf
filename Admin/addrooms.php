<?php session_start();
$uid=$_SESSION['uid'];
if(!$uid)
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
if(document.getElementById("type").value=="")
{
alert("Enter Hotel Type");
v=false;
}
else if(document.getElementById("rate").value=="")
{
alert("Enter Rate");
v=false;
}
else if(document.getElementById("av").value=="")
{
alert("Enter Availability");
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
<h1 align="center">Hotel Rooms</h1><br /><br />
<form method="post" action="insertroom.php" enctype="multipart/form-data" onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
                <tr>
                <td>Hotel Type *</td>
                <td><input type="text" name="type" id="type" /></td>
                </tr>
                <tr><td>&nbsp;&nbsp;</td></tr>   
                <tr>
				<td height="112">Rate *</td>
                <td><input type="text" name="rate" id="rate" /> </td>
                </tr>       
                <tr><td>&nbsp;&nbsp;</td></tr>
                <td>Availability *</td>
                <td><input name="av" id="av" type="text"/> </td>
                </tr>       
                <tr><td>&nbsp;&nbsp;</td></tr>
                <tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
                </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
