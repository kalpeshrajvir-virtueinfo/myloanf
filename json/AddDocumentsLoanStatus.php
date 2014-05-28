<?php ob_start();
include('connect.php');
$Cus_Id=$_REQUEST['cus_id'];
$LoanId=$_REQUEST['LoanId'];
$CustomerId=$_REQUEST['CustomerId'];
$Image=$_FILES['Image']['name'];
if($Image!="")
{
	$ext=substr(strrchr($Image,'.'),1);
$rander=rand();
$img=$rander.".".$ext;
move_uploaded_file($_FILES['Image']['tmp_name'],"LoanDocuments/".$img);
}
//move_uploaded_file($_FILES['Image']['tmp_name'],"LoanDocuments/".$_FILES['Image']['name']);
if($img!='')
{
$insertreview="insert into tb_documentImage(`cus_id`,`LoanID`,`document_image`) Values('$Cus_Id','$LoanId','$img')";
$resultreview=mysql_query($insertreview) or die(mysql_error());

if($resultreview)
{
	$update="update tb_customer_documents set status='Under Review' where cus_id='$Cus_Id'";
	$result_update=mysql_query($update)or die(mysql_error());
	 $selectdevice="select * from Customers where DeviceToken != '' and CustomerId='$CustomerId'";
	$resultdevice=mysql_query($selectdevice) or die(mysql_error());
	if(mysql_num_rows($resultdevice)>0)
	{
		while($rowdevice=mysql_fetch_assoc($resultdevice))
		{
			$DeviceToken=$rowdevice['DeviceToken'];
			$devicetype=$rowdevice['DeviceType'];
			if($devicetype=='Android')
			{
				
	include('statuschangepushcustomer.php');
			}
			else if($devicetype=='iphone')
			{
				//include('CustomerPushNotification.php');
				$date=date("Y-m-d");
  $insert_msg="insert into  tb_message(`customerID`,`Date`,`message`)Values('$CustomerId','$date','Your loan application is reviewed')";
$result_msg=mysql_query($insert_msg) or die(mysql_error());

			}
	$result['LoanStatus']="Added";
	}
	}
}
}
else
{
	$result['LoanStatus']="Failed";
}

header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($result);
echo $data;
?>