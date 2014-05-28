<?php
include('connect.php');
$id=$_REQUEST['customer_id'];
$select="select * from  tb_customer_documents where cus_id='$id'";
$res=mysql_query($select);
$row=mysql_fetch_array($res);
$status=$row['action_status'];
if($status=='enable')
{
	$update="update tb_customer_documents set action_status='disable',status='Under Review' where cus_id='$id'";
	$result=mysql_query($update) or die(mysql_error());
}

else if($status=='disable')
{
	$update="update tb_customer_documents set action_status='enable',status='Completed' where cus_id='$id'";
	$result=mysql_query($update) or die(mysql_error());
}

if($result)
{
header('Location:view_document_details.php');
}
?>