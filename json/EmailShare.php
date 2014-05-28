<?php ob_start();
include('connect.php');
$emailID=$_REQUEST['email'];
$image='http://www.sicsglobal.com/projects/App_projects/LoanApp/Admin/img/logo.png';
$AppName="Loan FLow App";
$text="Creating smooth loan transactions - An application to monitor the loan status/progress and to manage various things associated with loans";

$to = $emailID;
$subject = "Loan Flow App";
$message = '
<html>
<head>
  <title>Loan Flow App</title>
</head>
<body>
  
  <table>
    
	<tr><img src="http://www.sicsglobal.com/projects/App_projects/LoanApp/Admin/img/logo.png" style="width:100px; height:100px;"></tr>
    
      <tr>'.$text.'</tr>
    
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