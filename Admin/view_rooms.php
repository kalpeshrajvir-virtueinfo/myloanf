<?php session_start();
$uid=$_SESSION['uid'];
if(!$uid)
{
header('Location:index.php');	
}
include("connect.php");
$count=0;
$sel=mysql_query("SELECT * FROM hotel_rooms WHERE hotel_id='$uid'") or die(mysql_error());
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
<a style="margin-left:600px" href="addrooms.php"><img src="images/add.png" /></a>
<h1 align="center">Hotel Rooms</h1><br /><br />
<table width="70%" align="center" border="1" cellpadding="0" cellspacing="0">
<tr align="center" style="color:#900">
<td width="10%" height="34">Serial No</td>
<td width="14%" height="34">Hotel Type</td>
<td width="17%">Rate</td>
<td width="18%">Availability</td>
<td width="17%" colspan="2">Action</td>
</tr>
<?php
while($row=mysql_fetch_array($sel))
{
	$room_id=$row['id'];
	$count++;?>
<tr align="center">
<td width="10%"><?php echo $count;?></td>
<td width="14%"><?php echo $row['type'];?></td>
<td><?php echo $row['rate'];?></td>
<td><?php echo $row['availability'];?></td>
<td><a href="edit_room.php?id=<?php echo $room_id;?>">EDIT</a></td>
<td><a href="del_room.php?id=<?php echo $room_id;?>">DELETE</a></td>
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
