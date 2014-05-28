<?php 
session_start();
$customerID=$_REQUEST['customerID'];
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
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
</style>
<script>
function status(val,b)
{
	 //var custID=document.getElementById("custID").value;
 //alert(b);
 $.ajax({
  url: 'updatestatus.php?status='+val+'&custID='+b,
  
  type: "POST",
  success: function(result) {
   
   //alert(result);
      //document.getElementById("printableArea").innerHTML=result;
  }
 });
return false;
}
</script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->

	
<div id="page">

<h1 align="center">Customers</h1><br /><br />
<table width="70%" align="center" border="1" cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<td width="17%">Document name</td>
<td width="18%">Status</td>
<td width="14%" height="34">Received?</td>
<td width="18%">Date/time Received</td>
<td width="18%">Document File</td>
</tr>
<?php
$select="select * from tb_customer_documents where Bank_ID='$id' AND Customer_id='$customerID'";
$result=mysql_query($select) or die(mysql_error());
while($row=mysql_fetch_array($result))
{
	$cust_ID=$row['cus_id'];
	$cusID=$row['Customer_id'];
	$status=$row['status'];
    $selectdate="select * from  tb_message where customerID='$cusID'";
	$resultdate=mysql_query($selectdate) or die(mysql_error());
	$rowdate=mysql_fetch_array($resultdate);
	$date=$rowdate['Date'];
	?>
<tr align="center">
<input type="hidden" value="<?php echo $cust_ID;  ?>"  id="custID">
<td><?php echo $row['document_name'];?></td>
<td><select onchange="status(this.value,<?php echo $cust_ID ?>)">
<option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
<?php
if($status=='ToDo')
{
?>
<option value="Under Review">Under Review</option>
<option value="completed">completed</option>
<?php
}
else if($status=='Under Review')
{
?>
<option value="ToDo">ToDo</option>
<option value="completed">completed</option>
<?php
}
else if($status=='completed')
{
?>
<option value="ToDo">ToDo</option>
<option value="Under Review">Under Review</option>
<?php
}
?>
</select></td>
<td width="14%"><select>
<?php if($status=='ToDo') {?>
<option>Not Received</option>
<?php } else { ?>
<option>Received</option>
<?php } ?>
</select></td>
<td><?php echo $date; ?></td>
<td><a href="viewDocumentImage.php?custID=<?php echo $cust_ID; ?>">View Documents</a></td>

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
