<?php
include('connect.php');
$status=$_REQUEST['status'];
$custID=$_REQUEST['custID'];
$update="update tb_customer_documents set status='$status' where cus_id='$custID'";
$result=mysql_query($update) or die(mysql_error());
?>