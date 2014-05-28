<?php ob_start();
include('connect.php');
$customerID=$_REQUEST['customerID'];
$select_msg="select * from tb_message where customerID='$customerID'";
$result_msg=mysql_query($select_msg) or die(mysql_error());
if(mysql_num_rows($result_msg)>0)
{
while($row_msg=mysql_fetch_assoc($result_msg))
{
	
	
	 $message[]=$row_msg;
}
}
else
{
	$message[]="None";
}
$select_licensing="select c.*,b.* from  Customers c join  BankDetails b on c.Bank_ID=b.BankId where c.CustomerId='$customerID'";
	$result_licensing=mysql_query($select_licensing);
	if(mysql_num_rows($result_licensing)>0)
	{
	$row_licensing=mysql_fetch_array($result_licensing);
     $licensing[]=$row_licensing['Licensing'];
	}
	else
	{
		$licensing[]="None";
	}
	
$final=array("Message"=>$message,"Licensing"=>$licensing);	
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($final);
echo $data;


?>