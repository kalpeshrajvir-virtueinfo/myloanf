<?php 
session_start();
$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
include('connect.php');
 $doc_name=$_REQUEST['Name'];
 $insert="INSERT INTO tb_documents(`Bank_ID`,`documents`) VALUES('$id','$doc_name')";
$result=mysql_query($insert) or die(mysql_error());
echo "success";
?>