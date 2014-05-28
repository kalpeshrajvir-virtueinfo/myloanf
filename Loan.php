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
<link rel="stylesheet" type="text/css" href="timepicker/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
 <link rel="stylesheet" href="timepicker/font-awesome/css/font-awesome.min.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!--<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>-->

</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<a style="margin-left:600px" href="AddLoanDetails.php"><img src="images/add.png" /></a>
<h1 align="center">Loan</h1><br /><br />
<table width="100%" align="center" border="1"  cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<!--<td>Customer ID</td>-->
<td>Customer Name</td>
<td>Start Date</td>
<td>End Date</td>
<td>Signin Time</td>
<td>Principal & Interest</td>
<td>Taxes</td>
<td>MI</td>
<td>Total</td>
<td>Program</td>
<td>Amount</td>
<td>Interest Rate</td>
<td>Loan Progress</td>
<!--<td>Status</td>-->
<!--<td>Last Expiration Date</td>-->
<td  colspan="2">Action</td>
</tr>
<?php
$selectbank="select * from customersLoanDetails where Bank_ID='$id'";
$resultbank=mysql_query($selectbank) or die(mysql_error());
while($row=mysql_fetch_array($resultbank))
{
	 
	$status=$row['status'];
	$CustomerId=$row['Customer_id'];
	$selectcust="select * from Customers where CustomerId='$CustomerId'";
	$resultcust=mysql_query($selectcust) or die(mysql_error());
	$rowcust=mysql_fetch_assoc($resultcust);
	$CustomerName=$rowcust['CustomerName'];	?>
<tr align="center">
<?php /*?><td><?php echo $row['Customer_id'];?></td><?php */?>
<td><?php echo $CustomerName; ?></td>
<td><?php echo $row['StartDate'];?></td>
<td><?php echo $row['EndDate'];?></td>
<td><?php echo $row['SignInTime'];?></td>
<td><?php echo $row['PI'];?></td>
<td><?php echo $row['Taxes'];?></td>
<td><?php echo $row['MI'];?></td>
<td><?php echo $row['Total'];?></td>
<td><?php echo $row['loan_program'];?></td>
<td><?php echo $row['loan_amount'];?></td>
<td><?php echo $row['interest_rate'];?></td>
<td><?php echo $row['LoanProgress'];?></td>
<?php /*?><td><?php echo $status ;?></td><?php */?>
<?php /*?><td><?php echo $row['ExpirationDate']; ;?></td><?php */?>
<td><a href="edit_loandetails.php?id=<?php echo $row['loan_id'];?>">EDIT</a></td>
<td><a href="del_loandetails.php?id=<?php echo $row['loan_id'];?>" onClick="return confirm('Do you want to delete?');">DELETE</a></td>
</tr>
<?php
}?>
</table>  

</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
<script>window.jQuery || document.write('<script src="timepicker/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="timepicker/bootstrap/bootstrap.min.js"></script>
<script src="timepicker/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="timepicker/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="timepicker/js/flaty.js"></script></body>  
</body>
</html>
