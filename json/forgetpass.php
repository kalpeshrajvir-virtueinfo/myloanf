<?php ob_start();
$mail=$_REQUEST['mailID'];
include('connect.php');
$select="select Password from Customers where EmailId='$mail' ";
$result=mysql_query($select) or die(mysql_error());
if(mysql_num_rows($result)>0){
	
$row=mysql_fetch_array($result);
$pass=$row['Password'];
$to = "$mail";
$subject = "Your Password";

$headers = "Loan App" ;

mail($to,$subject,$pass,$headers);
if(mail)
{
	$post['result']="Successfully send";
}
}
else
{
	
	$post['result']="Failed sending mail";
	
}
$data='content-type:application/json';
$data=json_encode($post);
echo $data;

?>