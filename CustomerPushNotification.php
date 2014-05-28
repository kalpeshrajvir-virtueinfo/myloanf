<?php
 $url = 'https://android.googleapis.com/gcm/send';
 $serverApiKey = "AIzaSyAxB2NFsUAQw1QxDbxjFNnds87z4OzVmAE";		//"Your Api key"
  $reg=$deviceTokens;
  include('connect.php');
  
  //$msg='Your loan application is reviewed';

$headers = array(
 'Content-Type:application/json',
 'Authorization:key=' . $serverApiKey
 );

 $data = array(
 'registration_ids' => array($reg)
 , 'data' => array(
 'type' => 'New'
 , 'title' => 'LoanApp'
 , 'Message' => $msg
 , 'url' => 'http://androidmyway.wordpress.com'
 )
 ); 

 $ch = curl_init();
 
 curl_setopt($ch, CURLOPT_URL, $url);
 
 if ($headers)
 
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
 curl_setopt($ch, CURLOPT_POST, true);
 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
 curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 

 $response = curl_exec($ch); 

curl_close($ch);

print ($response);

/*---------------------------------------------------------------------------------------------------------*/

$date=date("Y-m-d");
 $insert_msg="insert into  tb_message(`customerID`,`Date`,`message`)Values('$custid','$date','$msg')";
$result_msg=mysql_query($insert_msg) or die(mysql_error());

/*----------------------------------------------------------------------------------------------------------*/

?>
