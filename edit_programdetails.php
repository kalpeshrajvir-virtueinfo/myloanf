<?php session_start();
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
if(document.getElementById("pgmname").value=="")
{
alert("Enter program name");
v=false;
}
else if(document.getElementById("Interest").value=="")
{
alert("Enter Interest Rate");
v=false;
}
else if(document.getElementById("Duration").value=="")
{
alert("Enter Duration");
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
	
	<?php
	include('connect.php');
	$pgm_id=$_REQUEST['id'];
	$select="select * from Program where program_id='$pgm_id'";
	$res=mysql_query($select) or die(mysql_error());
	$row=mysql_fetch_array($res);
	?>
<div id="page">
<h1 align="center">Edit Program</h1><br /><br />
<form action="Updateprogram.php?pgm_id=<?php echo $row['program_id']; ?>" method="post"  onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
             <tr>
    <td style="font-size:20px;">Name</td><td>:<td>
    <td><input type="text" name="pgmname" id="pgmname" value="<?php echo $row['program_name']; ?>"/></td>
    </tr>
   
    <tr>
    <td style="font-size:20px;">Interest Rate</td><td>:<td>
    <td><input type="text" name="Interest" id="Interest" value="<?php echo $row['Interest_rate']; ?>"></td>
    </tr>
     <tr>
    <td style="font-size:20px;">Duration</td><td>:<td>
    <td><input type="text" name="Duration" id="Duration" value="<?php echo $row['Duration']; ?>"></td>
    </tr>
    
                <tr><td>&nbsp;&nbsp;</td>
                <td colspan="2"><input type="submit" value="Save" /></td></tr>
                </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
