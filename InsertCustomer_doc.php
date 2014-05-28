<?php 
session_start();
echo $id=$_SESSION['id'];
include('connect.php');
echo $customer_id=$_POST['name'];
 //$doc_name=$_POST['doc_name'];
 print_r($doc_name);
foreach($_POST['doc_name'] as $docname){
	
echo $insert="insert into tb_customer_documents (Customer_id,Bank_ID,document_name,status,action_status) values ('$customer_id','$id','$docname','ToDo','disable')";
$result=mysql_query($insert) or die(mysql_error());

}
if($result)
{
	header('Location:view_document_details.php');
}
?>