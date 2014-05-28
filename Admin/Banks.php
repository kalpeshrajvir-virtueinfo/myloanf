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
	
	
<div id="page" style="overflow-x: auto; overflow-y: hidden;">
<a style="margin-left:600px" href="AddBanks.php"><img src="images/add.png" /></a>
<h1 align="center">Banks</h1><br /><br />
<table width="70%" align="center" border="1" cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<td width="10%" height="34">Bank Name</td>
<td width="10%" height="34">Bank Email</td>
<td width="18%">Password</td>
<td width="10%" height="34">Bank phoneNo </td>
<td width="14%" height="34">Address</td>
<td width="18%">Officers Name</td>
<td width="17%">Phone No</td>
<td width="18%">Email Id</td>
<td width="18%">Headshots</td>
<td width="18%">Company Logo</td>
<td width="18%">Lattitude</td>
<td width="18%">Longitude</td>
<td width="17%" colspan="2">Action</td>
</tr>
<?php
$selectbank="select * from BankDetails";
$resultbank=mysql_query($selectbank) or die(mysql_error());
while($row=mysql_fetch_array($resultbank))
{
	//$clogo=$row['company_logo'];
	?>
<tr align="center">
<td width="10%"><?php echo $row['BankName'];?></td>
<td width="10%"><?php echo $row['BankmailID'];?></td>
<td><?php echo $row['Password']; ?></td>
<td width="10%"><?php echo $row['BankPhoneNo'];?></td>
<td width="14%"><?php echo $row['Address']; ?></td>
<td><?php echo $row['officers_name']; ?></td>
<td><?php echo $row['PhoneNumber'];?></td>
<td><?php echo $row['EmailId']; ?></td>
<td><img src="company_logo/<?php echo $row['Headshots']; ?>" style="width:50px;"></td>
<td><img src="company_logo/<?php echo $row['company_logo']; ?>" style="width:50px;"></td>
<td><?php echo $row['Lattitude'];?></td>
<td><?php echo $row['Longitude'];?></td>
<td><a href="edit_bank.php?id=<?php echo $row['BankId'];?>">EDIT</a></td>
<td><a href="del_bank.php?id=<?php echo $row['BankId'];?>" onClick="return confirm('Do you want to delete?');">DELETE</a></td>
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
