<!DOCTYPE html>
<html lang="en-US">
 <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>::Maps ::</title>
      
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
                    $("#spnCoordinates").html("Coordinates for address provided, Latitude " + latlng.lat() + " , Longitude " + latlng.lng());
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
    <style type="text/css">
        html,body { height: 100%; margin: 0px; padding: 0px; }
        #map_canvas {
            width:500px;
            height:500px;
        }
         
        .text
        {
            border:1px solid black;
            width:300px;
        }
        label
        {
            width:100px;
        }
    </style>
</head>
<body >
<div>
    <label>Address : </label><input id="txtAddress" type="text" class="text" value="350 W 34th St, Manhattan, NY 10001" /> <input type="button" id="btnGo" value="Go" />
    <span id="spnCoordinates" style="color:Green;font-weight:bold;"></span>
</div>
<div id="map_canvas">
 
</div>
<!--main-->
<div id="mapitems"></div>
</body>  
</html>