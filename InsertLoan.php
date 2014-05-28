<?php
session_start();
$id=$_SESSION['id'];
include('connect.php');
$custid=$_POST['custid'];
$stdate=$_POST['stdate'];
$enddate=$_POST['enddate'];
$signin_time=$_POST['signin'];
$closinglocation=$_POST['clsloc'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$PI=$_POST['PI'];
$taxes=$_POST['Taxes'];
$MI=$_POST['MI'];
$total=$_POST['TM'];
$prgm_name=$_POST['pgm_name'];
$amount=$_POST['amount'];
$Interest=$_POST['Interest'];
$Progress=$_POST['Progress'];
$status=$_POST['key'];
$expiration_date=$_POST['ldate'];
$selectcustaddress="select * from  Customers where CustomerId='$custid'";
$resultcust=mysql_query($selectcustaddress) or die(mysql_error());
if(mysql_num_rows($resultcust)>0)
{
	while($rowaddress=mysql_fetch_assoc($resultcust))
	{
		$Address=$rowaddress['Address'];
$insert="insert into  customersLoanDetails (Bank_ID,Customer_id,StartDate,EndDate,SignInTime,closinglocation,Latitude,Longitude,PI,Taxes,MI,Total,loan_address,loan_program,loan_amount,interest_rate,LoanProgress,status,ExpirationDate) values ('$id','$custid','$stdate','$enddate','$signin_time','$closinglocation','$latitude','$longitude','$PI','$taxes','$MI','$total','$Address','$prgm_name','$amount','$Interest','$Progress','$status','$expiration_date')";
$result=mysql_query($insert) or die(mysql_error());
}
}
if($result)
{
	header('Location:Loan.php');
}
?>