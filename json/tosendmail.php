<?php ob_start();
include('connect.php');
$name=$_REQUEST['name'];
$emailID=$_REQUEST['email'];
$phoneno=$_REQUEST['phoneNo'];
$helpdetails=$_REQUEST['helpdetails'];
$to = "jenniferhjones@yahoo.com";
$subject = "Your Details";
$message = '
<html>
<head>
  <title>Your details</title>
</head>
<body>
  
  <table>
    <tr>
      <th>Name</th><th>Email</th><th>PhoneNo</th><th>HelpDetails</th>
    </tr>
    <tr>
      <td>'.$name.'</td><td>'.$emailID.'</td><td>'.$phoneno.'</td><td>'.$helpdetails.'</td>
    </tr>
    
  </table>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "Loan APP" ;

mail($to,$subject,$message,$headers);
if(mail)
{
	$insert=mysql_query("insert into tb_mail (name,email,phone,help,companyname,status) values ('$name','$emailID','$phoneno','$helpdetails','','tech')");
	$post['result']="Successfully send";
}
else
{
	$post['result']="Failed sending mail";
	
}
$data='content-type:application/json';
$data=json_encode($post);
echo $data;
?>