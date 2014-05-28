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
<a style="margin-left:600px" href="AddCreditTips.php"><img src="images/add.png" /></a>
<h1 align="center">Credit  Tips</h1><br /><br />
<table width="70%" align="center" border="1" cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<td width="10%" height="34">Title</td>
<td width="14%" height="34">Description</td>
<td width="17%" colspan="2">Action</td>
</tr>
<?php
$selectbank="select * from CreditTips";
$resultbank=mysql_query($selectbank) or die(mysql_error());
while($row=mysql_fetch_array($resultbank))
{
	?>
<tr align="center">
<td width="14%"><?php echo $row['Title'];?></td>
<td><?php echo $row['Description'];?></td>
<td><a href="edit_credit.php?id=<?php echo $row['CreditId'];?>">EDIT</a></td>
<td><a href="del_credit.php?id=<?php echo $row['CreditId'];?>" onClick="return confirm('Do you want to delete?');">DELETE</a></td>
</tr>
<?php
}?>
</table>    
</div>
	<!-- end #page --> 
</div>//
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
