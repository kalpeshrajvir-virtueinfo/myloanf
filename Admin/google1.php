<?php
session_start();
include("connect.php");
$uid=$_SESSION['uid'];
/*if(!$uid)
{
header('Location:index.php');	
}*/
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
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script language="javascript">
if (google.loader.ClientLocation) 
{	
	var loc = google.loader.ClientLocation;
	if (loc.address) 
	{
		var city = loc.address.city;
		var region = loc.address.region;
		var country = loc.address.country;
		var country_code = loc.address.country_code;	
	}
	if (loc.latitude) 
	{
		var lat = loc.latitude;
		var lng = loc.longitude;	
	}
	//alert(lat);
}
/*var lat = -37.812711;
var lng = 144.962707;*/
//alert(lat);
</script>
<script src="if_gmap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function numeric(num)
{
var u=true;
var sad="0123456789()-";
for(i=0; i<num.length; i++)
{
var w=num.charAt(i);
if(sad.indexOf(w)==-1)
{
u=false;
break;
}
}
return u;
}
function validation()
{
var v=true;
if(document.getElementById("street").value=="")
{
alert("Enter Street Name");
v=false;
}
else if(document.getElementById("city").value=="")
{
alert("Enter The City");
v=false;
}
else if(document.getElementById("code").value=="")
{
alert("Enter The Postal Code");
v=false;
}
else if(document.getElementById("ph").value=="")
{
alert("Enter Phone Number");
v=false;
}
else if(document.getElementById("trip").value=="")
{
alert("Enter Trip Advisor Rating");
v=false;
}
else
{
v=true;
}
return v;
}
</script>
<style type="text/css">
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD0X4v7eqMFcWCR-VZAJwEMfb47id9IZao"></script>
    <script type="text/javascript">
        var map;
        $(document).ready(function () {
            var latlng = new google.maps.LatLng(40.748492, -73.985496);
            var myOptions = {
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapitems"), myOptions);
 
            $("#btnGo").click(function () {
                getLatLangFromAddress($("#txtAddress").val());
            }); //$("#btnGo").click()
 
        });
 
        function getLatLangFromAddress(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                 /*   $("#aa").html("Coordinates for address provided, Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
					var str2=latlng.lat();
					var str3=latlng.lng();
					$("#aa").val(str2);
					 
					$("#bb").val(str3);
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
</head>
<body>
<body onLoad="if_gmap_init();">
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->	
	
	<div id="page">
    
    <h3 align="center">ADD DETAILS</h3>
      <br />
      <br />
   <form action="gzip.php"  method="post" onsubmit="return validation()">
        
		<table style="margin-left:300px" border="0" cellpadding="0" cellspacing="0">
        
                <tr><tr align="left">
                <td colspan=2 align="right"align="center"></td></tr>
                <tr><td>&nbsp;&nbsp;</td></tr> 
                <th>
                 <label>Address : </label><input id="txtAddress" type="text" class="text"  /><br/> <input type="button" id="btnGo" value="Go" /></th></tr>
   <tr><td>&nbsp;&nbsp;</td></tr> 
                <tr>
    <td id="" style="background-color: #E0E0E0;" colspan="2" align="center">
		<div id="mapitems" style="width: 600px; height: 200px"></div>
	</td>
  </tr>
  <tr align="center">
       <td colspan="2">&nbsp;</td>
  </tr>
     <tr>
    <td><b>Latitude</b></td>
    <td><input type="text" name="aa" id="aa" /></td>
    </tr>
     <tr><td>&nbsp;&nbsp;</td></tr> 
    <tr>
    <td><b>Longitude</b></td>
    <td><input type="text" name="bb" id="bb" /></td>
    </tr>
     <tr><td>&nbsp;&nbsp;</td></tr> 
    <tr align="left">
		<td colspan=2 align="right"align="center"></td></tr>
         <tr><td>&nbsp;&nbsp;</td></tr> 
                <tr align="left"><th>Phone Number *</th><td><input type="text" name="ph" id="ph"/></td></tr>
                <tr><td>&nbsp;&nbsp;</td></tr>
                <tr align="left"><th>TripAdvisor rating *</th><td><input type="text" name="trip" id="trip"/></td></tr>
                <tr><td>&nbsp;&nbsp;</td></tr>
        <tr align="left">
			<th>About *</th>
			<td><textarea name="desc" id="desc" style="width:400px; height:100px"></textarea></td>
		</tr>
        <tr><td>&nbsp;&nbsp;</td></tr>
        <tr>
		<tr align="left">
			<th width="250">Video Information</th>
			<td><textarea name="video" id="video" style="width:230px; height:100px"></textarea></td>
		</tr>
        <tr><td>&nbsp;&nbsp;</td></tr>        
        
		<tr align="left">
			<th></th>
			<td><input type="submit" value="Submit"  /></td>
		</tr>
		</table>
        </form>
	</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
