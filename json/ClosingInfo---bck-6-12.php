<?php
include('connect.php');
$CustomerId=$_REQUEST['CustomerId'];
$selectloan="select * from LoanDetails where CustomerId='$CustomerId'";
$resultloan=mysql_query($selectloan) or die(mysql_error());
if(mysql_num_rows($resultloan)>0)
{
	$output=array();
	while($rowloan=mysql_fetch_assoc($resultloan))
	{
		$StartDate=$rowloan['StartDate'];
		$EndDate=$rowloan['EndDate'];
		$Lattitude=$rowloan['Lattitude'];
$date1 = $StartDate;
$date2 = $EndDate;

     $now = strtotime($date1); // or your date as well
     $your_date = strtotime($date2);
     $datediff =$your_date -  $now;
     $days= floor($datediff/(60*60*24));
//printf("%d years, %d months, %d days\n", $years, $months, $days);


	$rowloan['Days']=$days;
		$output=$rowloan;
	}

	
}
else
{
	$output['Details']="None";
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($output);
echo $data;
?>