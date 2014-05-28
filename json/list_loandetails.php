<?php ob_start();
include('connect.php');
$customer_ID=$_REQUEST['customerID'];
$select="SELECT * FROM customersLoanDetails where Customer_id='$customer_ID'";
$res=mysql_query($select)or die(mysql_error());
if(mysql_num_rows($res)>0)
{
while($row=mysql_fetch_assoc($res))
{

  $post[]=$row;

}
}
else
{
	$post[]='NO DETAILS';
	
}
$data='content-type:application/json';
$data=json_encode(array('root'=>$post));
echo $data;

?>