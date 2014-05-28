<?php
include('connect.php');
$value=$_REQUEST['value'];
if($value=='Locked')
{
	?>
	<td style="font-size:20px;">Lock Expiration Date</td><td>:<td>
    <td><input type="text" name="ldate" id="ldate" placeholder="YYYY-MM-DD"></td>
<?php
}
?>