
<input type="text" name="address" id="address">
<input type="button" value="add" onClick="display()">


<?php
function display()
{
	?>
    <script type="text/javascript">
	alert('hello');
    </script>
    <?php
	echo 'hai';
$address = $_POST['address'];
$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);
echo $lat = $response_a->results[0]->geometry->location->lat;
echo "<br />";
echo $long = $response_a->results[0]->geometry->location->lng;
}
?>

<table>
<input type="text" name="lattitude" id="lattitude" value="<?php echo $lat; ?>">
<input type="text" name="longitude" id="longitude" value="<?php echo $long; ?>">
</table>
