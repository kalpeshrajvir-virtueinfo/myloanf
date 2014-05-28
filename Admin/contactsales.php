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
<style type="text/css">
</style>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<h1 align="center">Contact Sales</h1><br /><br />
<table width="70%" align="center" border="1" cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<td width="10%" height="34">Name</td>
<td width="14%" height="34">Email</td>
<td width="14%" height="34">Phone</td>
<td width="14%" height="34">Company Name</td>
<td width="18%" height="34">Help Details</td>
<td width="14%" height="34">View</td>
</tr>
<?php
$selectbank="select * from tb_mail WHERE status='contact'";
$resultbank=mysql_query($selectbank) or die(mysql_error());
while($row=mysql_fetch_array($resultbank))
{
	//$clogo=$row['company_logo'];
	?>
<tr align="center">
<td width="10%" height="34"><?php echo $row['name'];?></td>
<td width="14%" height="34"><?php echo $row['email']; ?></td>
<td width="14%" height="34"><?php echo $row['phone'];?></td>
<td width="14%" height="34"><?php echo $row['companyname'];?></td>
<td width="18%" height="34"><?php echo $row['help']; ?></td>
<td width="14%" height="34"><a href="viewcontactdetails.php?id=<?php echo $row['id']; ?>">View Details</a></td>
</tr>
<?php
}?>
</table>    
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
