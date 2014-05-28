<?php
ob_start();
include("connect.php");
$uname=$_REQUEST['uname'];
$uname=addslashes($uname);
$pwd=$_REQUEST['pwd'];
$pwd=addslashes($pwd);
/*$snooze=$_REQUEST['snooze'];
$snooze=addslashes($snooze);
$credit=$_REQUEST['credit'];
$credit=addslashes($credit);*/
$posts = array();
$sel="SELECT * FROM app_users WHERE username='$uname' AND password='$pwd'";
$res=mysql_query($sel) or die(mysql_error());
    if(mysql_num_rows($res)>0)
		{
			while($post = mysql_fetch_assoc($res)) 
			{
				$posts[] = array('login'=>$post);
			}
		}	
	else
		{
			$post['result']= "Invalid login";
	   		$posts[] = array('login'=>$post);
		}

//print_r($posts);
$data='Content-type: application/json';
//echo json_encode(array('posts'=>$posts));
$data=json_encode(array('root'=>$posts));
//echo $data;

//@mysql_close($link);

$handle = fopen("login.json", 'w+');

if($handle)
{

	if(!fwrite($handle,$data ))
		die("couldn't write to file.");

	//echo "success writing to file";
	
	header('Location: login.json');
}
?>