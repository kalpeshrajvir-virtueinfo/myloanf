<?php

// Put your device token here (without spaces):
//$DeviceToken='119A2798-C39C-4693-B14A-B1C1C9A3E203';
$deviceToken='8ed1175195951a65a4f14aa974a106034a1fec2581631fbbb99ff996be36f169';
//$deviceToken =$deviceTokens;
//echo $deviceToken;
// Put your private key's passphrase here:
$passphrase = 'sics';

// Put your alert message here:
//$message = $msg;
$message = 'hai';
//echo $message;
		

////////////////////////////////////////////////////////////////////////////////

$ctx = stream_context_create();
stream_context_set_option($ctx, 'ssl', 'local_cert', 'ck.pem');
stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

// Open a connection to the APNS server
$fp = stream_socket_client(
		//for distribuition
		'ssl://gateway.push.apple.com:2195', $err,
		//for developer
	//'ssl://gateway.sandbox.push.apple.com:2195', $err,
	$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

if (!$fp)
	exit("Failed to connect: $err $errstr" . PHP_EOL);

echo 'Connected to APNS' . PHP_EOL;

// Create the payload body
$body['aps'] = array(
	'alert' => $message,
	'sound' => 'default'
	);

// Encode the payload as JSON
$payload = json_encode($body);

// Build the binary notification
$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

// Send it to the server
$result = fwrite($fp, $msg, strlen($msg));

if (!$result)
	echo 'Message not delivered' . PHP_EOL;
else
	echo 'Message successfully delivered' . PHP_EOL;

// Close the connection to the server
fclose($fp);
?>