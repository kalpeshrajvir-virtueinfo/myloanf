<?php session_start();
$id=$_SESSION['uid'];
include('connect.php');
$address=$_POST["txtAddress"];
$address=addslashes($address);
$latval=addslashes($_POST['latval']);
$longval=addslashes($_POST['longval']);

/*$street=$_POST["street"];
$street=addslashes($street);
$city=$_POST["city"];
$city=addslashes($city);
$code=$_POST["code"];
$zip=addslashes($code);*/

$trip=$_POST["trip"];
$trip=addslashes($trip);
$ph=$_POST["ph"];
$ph=addslashes($ph);
$desc=$_POST['desc'];
$desc=addslashes($desc);
$video=$_POST['video'];
$video=addslashes($video);
/*$address = $street.",".$city;
$doc = new DOMDocument();
$doc->load("http://maps.google.com/maps/api/geocode/xml?address=".$address."&sensor=false"); //input address
 $status = $doc->getElementsByTagName("status");
$status = $status->item(0)->nodeValue; 
if($status=='OK')
{
//traverse the nodes to get to latitude and longitude
$results = $doc->getElementsByTagName("result");
$results = $results->item(0);
$results = $results->getElementsByTagName("geometry");
$results = $results->item(0);
$results = $results->getElementsByTagName("location");
 
foreach($results as $result)
{
$lats = $result->getElementsByTagName("lat");
$lat = $lats->item(0)->nodeValue;
 
$lngs = $result->getElementsByTagName("lng");
$lng = $lngs->item(0)->nodeValue;
}*/
echo $up="UPDATE owners SET address='$address',description='$desc', phone='$ph', video='$video',latitude='$latval',longitude='$longval',TripAdvisor_rating='$trip' WHERE id='$id'";
$res=mysql_query($up);
header('Location:home.php');
/*}
else
{*/ ?>

<?php
//}
?>