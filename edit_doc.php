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
if(document.getElementById("name").value=="")
{
alert("Enter Document name");
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
<?php
$doc_ID=$_REQUEST['doc_id'];
$select="select * from  tb_documents where document_id='$doc_ID'";
$res=mysql_query($select) or die(mysql_query($select));
$row=mysql_fetch_array($res);
?>
<h1 align="center">Edit Documents</h1><br /><br />
<form action="Update_document.php?doc_ID=<?php echo $row['document_id']; ?>" method="post" onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
              <tr>
    <td style="font-size:20px;">Document Name</td><td>:<td>
    <td><input type="text" name="name" id="name" value="<?php echo $row['documents']; ?>"/></td>
    </tr>
      <tr>
    <td></td><td><td>
    <td></td>
    </tr>
    <tr><td>&nbsp;&nbsp;</td>
    <td colspan="2"><input type="submit" value="Save" /></td>
    </tr>
                </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
