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
function validation()
{
var v=true;
var x=document.getElementById("emailid").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var y=document.getElementById("bnkemailid").value;
var atpos1=y.indexOf("@");
var dotpos1=y.lastIndexOf(".");
if(document.getElementById("bnkname").value=="")
{
alert("Enter Bank Name");
v=false;
}
else if(document.getElementById("bnkphone").value=="")
{
alert("Enter Bank Phone Number");
v=false;
}
else if(document.getElementById("bnkemailid").value=="")
{
alert("Enter Bank Email Id");
v=false;
}
else if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=y.length)
{
alert("Not a valid e-mail address");
v=false;
}
else if(document.getElementById("password").value=="")
{
alert("Enter Password");
v=false;
}
else if(document.getElementById("officers_name").value=="")
{
alert("Enter officer name");
v=false;
}
else if(document.getElementById("phone").value=="")
{
alert("Enter Phone Number");
v=false;
}
else if(document.getElementById("emailid").value=="")
{
alert("Enter Email Id");
v=false;
}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
alert("Not a valid e-mail address");
v=false;
}
else if(document.getElementById("mobile").value=="")
{
alert("Enter mobile number");
v=false;
}
else if(document.getElementById("headshots").value=="")
{
alert("please upload your headshot");
v=false;
}
else if(document.getElementById("c_logo").value=="")
{
alert("please upload company logo");
v=false;
}
else if(document.getElementById("address").value=="")
{
alert("Enter Address");
v=false;
}
else if(document.getElementById("licensing").value=="")
{
alert("Enter Licensing and disclosure");
v=false;
}
else
{
v=true;
}
return v;
}
</script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<h1 align="center">Edit Banks</h1><br /><br />
<?php
include("connect.php");
$edit_id=$_REQUEST['id'];
$select="select * from  BankDetails where BankId='$edit_id' ";
$result=mysql_query($select);
$row=mysql_fetch_array($result);
?>
<form method="post" action="updatebank.php?editID=<?php echo $edit_id; ?>" enctype="multipart/form-data" onsubmit="return validation()" >

            <table align="center" cellpadding="0" cellspacing="0" width="60%">
               <tr>
    <td style="font-size:20px;">Bank Name</td><td>:<td>
    <td><input type="text" name="bnkname" id="bnkname" value="<?php echo $row['BankName']; ?>"/></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Bank PhoneNo</td><td>:<td>
    <td><input type="text" name="bnkphone" id="bnkphone" value="<?php echo $row['BankPhoneNo']; ?>"></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Bank EmailId</td><td>:<td>
    <td><input type="text" name="bnkemailid" id="bnkemailid" value="<?php echo $row['BankmailID']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">password</td><td>:<td>
    <td><input type="password" name="password" id="password" value="<?php echo $row['Password']; ?>"></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Officers Name</td><td>:<td>
    <td><input type="text" name="officers_name" id="officers_name" value="<?php echo $row['officers_name']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Phone No</td><td>:<td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $row['PhoneNumber']; ?>"></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Email Id</td><td>:<td>
    <td><input type="text" name="emailid" id="emailid" value="<?php echo $row['EmailId']; ?>"></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Mobile No.</td><td>:<td>
    <td><input type="text" name="mobileNo" id="mobileNo" value="<?php echo $row['MobileNo']; ?>"></td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Headshots</td><td>:<td>
    <td><input type="file" name="headshots" id="headshots" value="<?php echo $row['Headshots']; ?>">
    <img src="company_logo/<?php echo $row['Headshots']; ?>" style="width:25px">
    </td>
    </tr>
    <tr> 
    <td style="font-size:20px;">Company Logo</td><td>:<td>
    <td><input type="file" name="c_logo" id="c_logo" value="<?php echo $row['company_logo']; ?>">
    <img src="company_logo/<?php echo $row['company_logo']; ?>" style="width:25px">
    </td>
    </tr>
     <tr>
    <td style="font-size:20px;">Address</td><td>:<td>
    <td><textarea name="address" id="address" rows="5" cols="15" onChange="getLatLangFromAddress(this.value)"><?php echo $row['Address']; ?></textarea></td>
    </tr>
      <tr>
    <td style="font-size:20px;">Lattitude</td><td>:<td>
    <td><input type="text" name="lattitude" id="lattitude" value="<?php echo $row['Lattitude']; ?>"></td>
    </tr>
      <tr>
    <td style="font-size:20px;">Longitude</td><td>:<td>
    <td><input type="text" name="longitude" id="longitude" value="<?php echo $row['Longitude']; ?>"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Licensing & Disclosures</td><td>:<td>
    <td><input type="text" name="licensing" id="licensing" value="<?php echo $row['Licensing']; ?>"></td>
    </tr>
     
                <tr><td>&nbsp;&nbsp;</td>
                <td colspan="2"><input type="submit" value="Submit" /></td></tr>
                </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
