<?php session_start();
include('connect.php');
//$uid=$_SESSION['uid'];
$id=$_POST['id'];
$type=$_POST['type'];
$type=addslashes($type);
$rate=$_POST['rate'];
$rate=addslashes($rate);
$av=$_POST['av'];
$av=addslashes($av);
$sql="UPDATE hotel_rooms SET type='$type',rate='$rate',availability='$av' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());
header('Location:view_rooms.php');
?>