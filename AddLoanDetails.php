<?php
session_start();
$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
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
<link rel="stylesheet" type="text/css" href="timepicker/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
 <link rel="stylesheet" href="timepicker/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<script type="text/javascript" src="ezcalendar_orange.js"></script>
<link rel="stylesheet" type="text/css" href="ezcalendar_orange.css" />
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	$(function() {
		$( "#datepicker1" ).datepicker();
	});
	</script>
    
<script type="text/javascript">
function validation()
{
var v=true;
if(document.getElementById("custid").value=="select")
{
alert("select Customer name");
v=false;
}
else if(document.getElementById("stdate").value=="")
{
alert("Enter Start Date");
v=false;
}
else if(document.getElementById("enddate").value=="")
{
alert("Enter End Date");
v=false;
}
else if(document.getElementById("signin").value=="")
{
alert("Enter signin time");
v=false;
}
else if(document.getElementById("clsloc").value=="")
{
alert("Enter closing location");
v=false;
}
else if(document.getElementById("PI").value=="")
{
alert("Enter Principal and Interest");
v=false;
}
else if(document.getElementById("Taxes").value=="")
{
alert("Enter Taxes");
v=false;
}
else if(document.getElementById("MI").value=="")
{
alert("Enter monthly income");
v=false;
}
else if(document.getElementById("pgm_name").value=="select")
{
alert("select program name");
v=false;
}
else if((document.getElementById("amount").value==""))
{
alert("Enter Amount");
v=false;
}
else if((document.getElementById("Progress").value=="select"))
{
alert("select loan progress");
v=false;
}
else if(document.getElementById("Interest").value=="select")
{
alert("select Interest Rate");
v=false;
}
else if(document.getElementById("key").value=="select")
{
alert("select any option");
v=false;
}
else if(document.getElementById("ldate").value=="select")
{
alert("Enter last expiration date");
v=false;
}
else
{
v=true;
}
return v;
}
</script>
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyD0X4v7eqMFcWCR-VZAJwEMfb47id9IZao"></script>
<script>
function expiration(val){
	
	/*alert(val);*/
	$.ajax({
		url:'expiration.php',
		data:"value="+val,
		type: "POST",
		success:function(result){
			/*document.getElementById('nurse_data').style.display="none";
			      document.getElementById('search_data').style.display="block";*/
			
						document.getElementById("duration").innerHTML=result;
		}
	});
	return false;
}

function total(val){
	
	//alert(val);
	var pricipal=document.getElementById('PI').value;
	var Taxes=document.getElementById('Taxes').value;
	var MI=document.getElementById('MI').value;
	var TotalMonthly=document.getElementById('TM');
	TotalMonthly.value= parseInt(pricipal)+ parseInt(Taxes) + parseInt(MI);
	
}
</script>
<script>
function getLatLangFromAddress(address) {
            var geocoder;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var latlng = results[0].geometry.location;
                   /* $("#spnCoordinates").html(" Latitude " + latlng.lat() + " , Longitude " + latlng.lng());*/
				 document.getElementById('latitude').value=latlng.lat();
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
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">
<h1 align="center">Add Loan</h1><br /><br />
<form action="InsertLoan.php" method="post"  onsubmit="return validation()" >
            <table align="center" cellpadding="0" cellspacing="0" width="60%">
             <tr>
             <?php
			 $select="select * from Customers where Bank_ID='$id'";
			 $res=mysql_query($select) or die(mysql_error());
			 ?>
    <td style="font-size:20px;">Customer Name</td><td>:<td>
    <td><select name="custid" id="custid">
    <option>select</option>
    <?php while($row=mysql_fetch_array($res)) {?>
    <option value="<?php echo $row['CustomerId']; ?>"><?php echo $row['CustomerName']; ?></option>
    <?php } ?>
    </select></td>
    </tr>
   
    <tr>
    <td style="font-size:20px;">Start Date</td><td>:<td>
    <td><input type="text" name="stdate" id="stdate" placeholder="YYYY-MM-DD"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">End Date</td><td>:<td>
    <td><input type="text" name="enddate" id="enddate" placeholder="YYYY-MM-DD"></td>
    </tr>
    <tr>
    <tr>
    <td style="font-size:20px;">Signin Time</td><td>:<td>
    <td><input type="text" name="signin" class="timepicker-24" id="signin"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Closing location</td><td>:<td>
    <td><input type="text" name="clsloc"  id="clsloc" onChange="getLatLangFromAddress(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">P & I</td><td>:<td>
    <td><input type="text" name="PI"  id="PI" onchange="total(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Taxes</td><td>:<td>
    <td><input type="text" name="Taxes"  id="Taxes" onchange="total(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;" >MI</td><td>:<td>
    <td><input type="text" name="MI"  id="MI" onchange="total(this.value)"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Total Monthly</td><td>:<td>
    <td><input type="text" name="TM"  id="TM"></td>
    </tr>
    <tr>
    <?php
	$select_pgm="select * from Program where Bank_id='$id'";
	 $res_pgm=mysql_query($select_pgm) or die(mysql_error());
	?>
    <td style="font-size:20px;">Program</td><td>:<td>
    <td>
    <select name="pgm_name" id="pgm_name">
    <option>select</option>
	<?php while($row_pgm=mysql_fetch_array($res_pgm)) {?>
    <option value="<?php echo $row_pgm['program_name']; ?>"><?php echo $row_pgm['program_name']; ?></option>
    <?php } ?>
    </select>
    </td>
    </tr>
     <tr>
    <td style="font-size:20px;">Amount</td><td>:<td>
    <td><input type="text" name="amount" id="amount"></td>
    </tr>
    <tr>
    <td style="font-size:20px;">Loan Progress</td><td>:<td>
    <td><select name="Progress" id="Progress">
    <option>select</option>
    <option value="Application Received">Application Received</option>
    <option value="Pre Approved">Pre Approved</option>
    <option value="Submitted to Underwritter">Submitted to Underwritter</option>
    <option value="Appraisal Complete">Appraisal Complete</option>
    <option value="Signing Scheduled">Signing Scheduled</option></select></td>
    </tr>
      <tr>
     <?php
	$select_interest="select * from Program where Bank_id='$id'";
	 $res_interest=mysql_query($select_interest) or die(mysql_error());
	?>
    <td style="font-size:20px;">Interest Rate</td><td>:<td>
    <td>
    <select name="Interest" id="Interest">
    <option>select</option>
    <?php while($row_interest=mysql_fetch_array($res_interest)) {?>
    <option value="<?php echo $row_interest['Interest_rate']; ?>"><?php echo $row_interest['Interest_rate']; ?></option>
    <?php } ?>
    </select><select name="key" id="key" onchange="expiration(this.value)"><option>select</option><option>Locked</option><option>Not Locked</option></select>
    </td>
    </tr> 
    <input type="hidden" name="latitude"  id="latitude" >
    <input type="hidden" name="longitude"  id="longitude">
    <tr id="duration">
    
    </tr> 
                <tr><td>&nbsp;&nbsp;</td>
                <td colspan="2"><input type="submit" value="Submit" /></td></tr>
                </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
<script>window.jQuery || document.write('<script src="timepicker/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="timepicker/bootstrap/bootstrap.min.js"></script>
        <script src="timepicker/nicescroll/jquery.nicescroll.min.js"></script>
     <script type="text/javascript" src="timepicker/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        
        <script src="timepicker/js/flaty.js"></script></body>
</body>
</html>
