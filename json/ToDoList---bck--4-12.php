<?php
include('connect.php');
$CustomerId=$_REQUEST['CustomerId'];

//$rowtodo=array();
$selecttodo="select Type from Application_Package where CustomerId='$CustomerId' ";
$resulttodo=mysql_query($selecttodo) or die(mysql_error());
if(mysql_num_rows($resulttodo)>0)
{
$Details=array();
while($rowtodo=mysql_fetch_assoc($resulttodo))
{
$application[]=$rowtodo['Type'];
}
$selectcert="select Type from Certification_and_Authorization where CustomerId='$CustomerId'";
$resultcert=mysql_query($selectcert) or die(mysql_error());
if(mysql_num_rows($resultcert)>0)
{
$rowcert=mysql_fetch_assoc($resultcert);
$application[]=$rowcert['Type'];
}
$selectcurr="select Type from Current_Taxes_and_Insurance_Information where CustomerId='$CustomerId'";
$resultcurr=mysql_query($selectcurr) or die(mysql_error());
if(mysql_num_rows($resultcurr)>0)
{
$rowcurr=mysql_fetch_assoc($resultcurr);
$application[]=$rowcurr['Type'];
}
$selectdep="select Type from Deposit_Documentation where CustomerId='$CustomerId'";
$resultdep=mysql_query($selectdep) or die(mysql_error());
if(mysql_num_rows($resultdep)>0)
{
$rowdep=mysql_fetch_assoc($resultdep);
$application[]=$rowdep['Type'];
}
$selecthme="select Type from Homeowners_Insurance_Contact_Information where CustomerId='$CustomerId'";
$resulthme=mysql_query($selecthme) or die(mysql_error());
if(mysql_num_rows($resulthme)>0)
{
$rowhme=mysql_fetch_assoc($resulthme);
$application[]=$rowhme['Type'];
}
$selectother="select Type from Other_Documents where CustomerId='$CustomerId'";
$resultother=mysql_query($selectother) or die(mysql_error());
if(mysql_num_rows($resultother)>0)
{
$rowother=mysql_fetch_assoc($resultother);
$application[]=$rowother['Type'];
}
$selectpay="select Type from PayStubs where CustomerId='$CustomerId'";
$resultpay=mysql_query($selectpay) or die(mysql_error());
if(mysql_num_rows($resultpay)>0)
{
$rowpay=mysql_fetch_assoc($resultpay);
$application[]=$rowpay['Type'];
}
$selectproof="select Type from Proof_of_Assets where CustomerId='$CustomerId'";
$resultproof=mysql_query($selectproof) or die(mysql_error());
if(mysql_num_rows($resultproof)>0)
{
$rowproof=mysql_fetch_assoc($resultproof);
$application[]=$rowproof['Type'];
}
$selectself="select Type from Proof_of_Self_Employment where CustomerId='$CustomerId'";
$resultself=mysql_query($selectself) or die(mysql_error());
if(mysql_num_rows($resultself)>0)
{
$rowself=mysql_fetch_assoc($resultself);
$application[]=$rowself['Type'];
}
$selectrevolve="select Type from Revolving_Debt_Close_Out_Letter where CustomerId='$CustomerId'";
$resultrevolve=mysql_query($selectrevolve) or die(mysql_error());
if(mysql_num_rows($resultrevolve)>0)
{
$rowrevolve=mysql_fetch_assoc($resultrevolve);
$application[]=$rowrevolve['Type'];
}
$selectverfy="select Type from Verification_Of_Ownership where CustomerId='$CustomerId'";
$resultverfy=mysql_query($selectverfy) or die(mysql_error());
if(mysql_num_rows($resultverfy)>0)
{
$rowverfy=mysql_fetch_assoc($resultverfy);
$application[]=$rowverfy['Type'];
}
$selectw="select Type from W_2 where CustomerId='$CustomerId'";
$resultw=mysql_query($selectw) or die(mysql_error());
if(mysql_num_rows($resultw)>0)
{
$roww=mysql_fetch_assoc($resultw);
$application[]=$roww['Type'];
}
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode(array("ToDoList"=>$application));
echo $data;
?>