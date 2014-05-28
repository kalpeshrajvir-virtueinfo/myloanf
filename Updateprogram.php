<?php session_start();
session_start();
$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
include('connect.php');
$pgmID=$_REQUEST['pgm_id'];
 $program_name=$_POST['pgmname'];
 $interest_rate=$_POST['Interest'];
 $duration=$_POST['Duration'];
$insert="UPDATE Program  set program_name='$program_name',Interest_rate='$interest_rate',Duration='$duration' WHERE program_id='$pgmID'";
$res=mysql_query($insert) or die(mysql_error());
if($res)
{
	header('Location:pgmdetails.php');
}
?>