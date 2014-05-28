<?php ob_start();
include('connect.php');
$CustomerId=$_REQUEST['CustomerId'];
$status=$_REQUEST['status'];
//$rowtodo=array();
if($status=='ToDo'){
$select="SELECT * FROM  tb_customer_documents WHERE Customer_id='$CustomerId' ";
$result=mysql_query($select) or die(mysql_error());
}
else {
$select="SELECT * FROM  tb_customer_documents WHERE Customer_id='$CustomerId' AND status='$status' ";
$result=mysql_query($select) or die(mysql_error());
}
if(mysql_num_rows($result)>0)
{
$Details=array();
while($row=mysql_fetch_assoc($result))
{
	$application1['cus_id']=$row['cus_id'];
	$application1['CustomerId']=$row['Customer_id'];
	$application1['Bank_ID']=$row['Bank_ID'];
	$status=$row['status'];
	$application1['Type']=$row['document_name'];
if(($status=='Under Review')||($status=='completed'))
{
	$application1['status']='true';
}
else
{
	$application1['status']='false';
}
$application[]=$application1;
}
}
else
{
	$application[]="None";
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode(array("ToDoList"=>$application));
echo $data;
?>