<?php ob_start();
session_start();
$id=$_SESSION['id'];
include('connect.php');
$CustomerId=$_REQUEST['CustomerId'];
$selectloan="select l.loan_id,l.Customer_id,l.StartDate,l.EndDate,l.SignInTime,l.PI,l.ToMessage,c.CustomerName,b.Lattitude,b.Longitude from customersLoanDetails l join Customers c on l.Bank_ID=c.Bank_ID join BankDetails b on b.BankId=c.Bank_ID where c.CustomerId='$CustomerId' AND l.Customer_id='$CustomerId'";
$resultloan=mysql_query($selectloan) or die(mysql_error());
if(mysql_num_rows($resultloan)>0)
{
	$output=array();
	while($rowloan=mysql_fetch_assoc($resultloan))
	{
		$loanID=$rowloan['loan_id'];
		$StartDate=$rowloan['StartDate'];
		$EndDate=$rowloan['EndDate'];
		$Lattitude=$rowloan['Lattitude'];
		$Longitude=$rowloan['Longitude'];
		$signin_time=$rowloan['SignInTime'];
		$customer_name=$rowloan['CustomerName'];
		$PI=$rowloan['PI'];
		$ToMesssage=$rowloan['ToMessage'];
      //  $date1 = $StartDate;
	    $date1=date('Y-m-d');
        $date2 = $EndDate;
     
     $now = strtotime($date1); // or your date as well
     $your_date = strtotime($date2);
     $datediff =$your_date -  $now;
     $days= floor($datediff/(60*60*24));
//printf("%d years, %d months, %d days\n", $years, $months, $days);


     

	$rowloan['Days']="$days";
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