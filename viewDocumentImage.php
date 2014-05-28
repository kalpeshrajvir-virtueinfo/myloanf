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
<script type="text/javascript" src="js/download.js"></script>
<style type="text/css">
</style>

</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->

	
<div id="page">
<?php

$custID=$_REQUEST['custID'];
 $selectimage="select * from  tb_documentImage where cus_id='$custID'";
$resultimage=mysql_query($selectimage) or die(mysql_error());

?>
<form name="zips" method="post" action="zips1.php" enctype="multipart/form-data" >
<h1 align="center">Document Image</h1><br /><br />

<table align="center">
<?php
while($row=mysql_fetch_array($resultimage))
{
	$imageID=$row['ImageID'];
	$image=$row['document_image'];
?>
<tr><td><input type="checkbox" name="files[]" value="<?php echo $image; ?>" /></td><td>
<img src="json/LoanDocuments/<?php echo $image ?>" style="width:100px; height:100px;margin-left: 65px;" /></td></tr>

<?php
}
?>
</table>  
<!--<input type="checkbox" name="files[]" value="Desert.jpg" />
<img src="upload/image.png" />
fun.jpg

<input type="checkbox" name="files[]" value="Penguins.jpg" />
<img src="upload/doc.png"   />
9lessons.docx
........-->
<input type="submit" name="createpdf" value="Download"  style="margin-left: 64%;"/>&nbsp;
<!--<input type="reset" name="reset"  value="Reset" />-->
</form>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
