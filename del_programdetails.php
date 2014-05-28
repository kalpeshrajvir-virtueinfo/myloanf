<?php
include('connect.php');
$del_ID=$_REQUEST['id'];
$delete="DELETE FROM Program WHERE program_id='$del_ID'";
$res=mysql_query($delete) or die(mysql_error());
if($res)
{
header('Location:pgmdetails.php');	
}
?>