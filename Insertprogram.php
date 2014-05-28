<?php session_start();
session_start();
$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
include('connect.php');
 $program_name=$_POST['pgmname'];
 $interest_rate=$_POST['Interest'];
 $Duration=$_POST['Duration'];
$insert="INSERT INTO Program (`Bank_id`,`program_name`,`Interest_rate`,`Duration`) VALUES('$id','$program_name','$interest_rate','$Duration')";
$res=mysql_query($insert) or die(mysql_error());
if($res)
{
	header('Location:pgmdetails.php');
}
?>