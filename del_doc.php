<?php session_start();
session_start();
$id=$_SESSION['id'];
include('connect.php');
$doc_id=$_REQUEST['doc_ids'];
$delete="Delete from tb_documents WHERE document_id='$doc_id'";
$result=mysql_query($delete) or die(mysql_error());
if($result)
{
	header('location:view_documents.php');
}
?>