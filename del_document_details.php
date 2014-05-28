<?php
include('connect.php');
$id=$_REQUEST['id'];
$delete="delete from tb_customer_documents where cus_id='$id'";
$res=mysql_query($delete);
if($res)
{
header('Location:view_document_details.php');
}
?>