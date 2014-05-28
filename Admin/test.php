<?php
ob_start();
include("connect.php");
$selFerry="select * from owners where type='Ferry'";
$selFerryResult=mysql_query($selFerry) or die(mysql_error());

if(mysql_num_rows($selFerryResult)>0)
{		
while($postFerry = mysql_fetch_assoc($selFerryResult)) 
{
	$ferry_details=array();
	$ferry_id=$postFerry['id'];
	$post['image_link']="http://sicsglobal.com/projects/App_projects/Ometepe/admin/upload/".$postFerry['image'];
	$selectFerry="select * from ferry where ferryId='$ferry_id'";
	$selectFerryResult=mysql_query($selectFerry) or die(mysql_error());
	while($rowFerry = mysql_fetch_assoc($selectFerryResult)) 
	{
		$ferry_details[]=$rowFerry;
	}
	$postFerry["ferry_details"] =$ferry_details;
	$posts2[] =$postFerry;
}
}
else
{
	$post['result']= "NO_FERRY";
	$posts2[] =$post;
}
$postsss[] =array('ferry'=>$posts2);
header("Content-Type: application/json; charset=utf-8",true);
//echo json_encode(array('root'=>$posts));
$data=json_encode(array('root'=>$postsss));
echo $data;

?>