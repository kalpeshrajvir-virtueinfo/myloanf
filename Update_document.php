<?php session_start();
session_start();
$id=$_SESSION['id'];
include('connect.php');
$doc_name=$_REQUEST['name'];
$doc_id=$_REQUEST['doc_ID'];
$update="UPDATE tb_documents SET Bank_ID='$id',documents='$doc_name' WHERE document_id='$doc_id'";
$result=mysql_query($update) or die(mysql_error());
if($result)
{
	header('location:view_documents.php');
}
?>