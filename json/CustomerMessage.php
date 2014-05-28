<?php ob_start();
include('connect.php');
$customerId=$_REQUEST['CustomerID'];
$message=$_REQUEST['message'];
$emailID=$_REQUEST['email'];
 $select="select * from customersLoanDetails where Customer_id='$customerId'";
$result=mysql_query($select) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
	 $bankID=$row['Bank_ID'];
	 $loanID=$row['loan_id'];

 $insert="insert into CustomerMessage(`Customer_ID`,`Bank_ID`,`Loan_ID`,`message`)values('$customerId','$bankID','$loanID','$message')";
$result_message=mysql_query($insert);
}
if($result_message)
{
	$output['Result']='Success';
}
else
{
	$output['Result']='Failed';
}

$to = $emailID;
$subject = "Loan Flow App";
$message = '
<html>
<head>
  <title>Loan Flow App</title>
</head>
<body>
  
  <table>
    
	<tr>'.$customerId.'</tr>
    
      <tr>'.$message.'</tr>
    
  </table>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "Loan Flow App" ;

mail($to,$subject,$message,$headers);
if(mail)
{
	$post['MailStatus']="Successfully send";
}
else
{
	$post['MailStatus']="Failed sending mail";
	
}

$final=array($output,$post);
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($final);
echo $data;
?>