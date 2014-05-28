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
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<script type="text/javascript" src="ezcalendar_orange.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> 
<link rel="stylesheet" type="text/css" href="ezcalendar_orange.css" />
<script type="text/javascript">
function validation()
{
var v=true;
if(document.getElementById("libraryname").value=="")
{
alert("Enter Library Name");
v=false;
}
/*else if(document.getElementById("librarydetails").value=="")
{
alert("Enter Description");
v=false;
}*/

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
<h1 align="center">Edit Loan Library </h1><br /><br />
<?php
    $loanlib_id=$_REQUEST['id'];
   $select="select * from LoanLibrary where LibraryId='$loanlib_id'";
$result=mysql_query($select) or die(mysql_error());
$row=mysql_fetch_assoc($result);

   ?>
<form action="UpdateLoanLibrary.php?lib_ID=<?php echo $loanlib_id; ?>" method="post"  onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
             <tr>
    <td style="font-size:20px;">Library name</td><td>:<td>
    <td><input type="text" name="libraryname" id="libraryname" value="<?php echo $row['Library_Name']; ?>"/></td>
    </tr>
   
    <tr>
    <td style="font-size:20px;">Description</td><td>:<td>
    <td><textarea name="librarydetails" id="librarydetails" class="ckeditor" rows="10" cols="25" ><?php echo $row['Library_Details']; ?></textarea></td>
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
