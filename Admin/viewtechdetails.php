<?php session_start();
session_start();
$uname=$_SESSION['uid'];
if(!$uname)
{
header('Location:index.php');	
}
include("connect.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<script type="text/javascript" src="ezcalendar_orange.js"></script>
<link rel="stylesheet" type="text/css" href="ezcalendar_orange.css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD0X4v7eqMFcWCR-VZAJwEMfb47id9IZao"></script>
    <script type="text/javascript">
	function getLatLangFromAddress(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('lattitude').value=latlng.lat();
				  document.getElementById('longitude').value=latlng.lng();
				   /*$("#spnCoordinates").html(latlng.lat());
				   $("#spnCoordinates1").html(latlng.lng());*/
                    placeMarker(latlng);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });  //geocoder
        }
 
        function placeMarker(latlng) {
            var location = new google.maps.LatLng(latlng.lat(), latlng.lng());
 
            var myOptions = {
                zoom: 15,
                center: location,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            var marker = new google.maps.Marker({
                /*position: location,*/
                map: map
            });
 
        }
    </script>
<script type="text/javascript">

</script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	<?php
	$id=$_REQUEST['id'];
	$selectbank="select * from tb_mail WHERE id='$id'";
$resultbank=mysql_query($selectbank) or die(mysql_error());
while($row=mysql_fetch_array($resultbank))
{
	?>
	
<div id="page">
<h1 align="center" style="margin-left: -273px;
">Tech Support</h1><br /><br />
<form method="post" action="techsupport.php" enctype="multipart/form-data" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
               <tr>
    <td style="font-size:20px;">Name</td><td>:<td>
    <td><input type="text" name="bnkname" id="bnkname" value="<?php echo $row['name'];?>" readonly="readonly"/></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Email</td><td>:<td>
    <td><input type="text" name="emailid" id="emailid" value="<?php echo $row['email']; ?>" readonly="readonly"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Phone</td><td>:<td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" readonly="readonly"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Help</td><td>:<td>
    <td><textarea name="address" id="address" rows="5" cols="15" readonly="readonly" style="height:100px;width:300px;"><?php echo $row['help']; ?></textarea></td>
    </tr>
     
                <tr><td>&nbsp;&nbsp;</td>
                <td colspan="2"><input type="submit" value="Cancel" /></td></tr>
                </table>
                <?php } ?>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
