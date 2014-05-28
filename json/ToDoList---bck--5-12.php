<?php
include('connect.php');
$CustomerId=$_REQUEST['CustomerId'];

//$rowtodo=array();
$selecttodo="select Type,Application_Package from Application_Package where CustomerId='$CustomerId' ";
$resulttodo=mysql_query($selecttodo) or die(mysql_error());
if(mysql_num_rows($resulttodo)>0)
{
$Details=array();
while($rowtodo=mysql_fetch_assoc($resulttodo))
{
$application1['Type']=$rowtodo['Type'];
if($rowtodo['Application_Package']!="")
{
	$application1['status']='true';
}
else
{
	$application1['status']='false';
}
$application[]=$application1;
}
$selectcert="select Type,Certification_and_Authorization from Certification_and_Authorization where CustomerId='$CustomerId'";
$resultcert=mysql_query($selectcert) or die(mysql_error());
if(mysql_num_rows($resultcert)>0)
{
while($rowcert=mysql_fetch_assoc($resultcert))
{
	$application2['Type']=$rowcert['Type'];
if($rowcert['Certification_and_Authorization']!="")
{
	$application2['status']='true';
}
else
{
	$application2['status']='false';
}
$application[]=$application2;
}
}
$selectcurr="select Type,Current_TaxesDoc from Current_Taxes_and_Insurance_Information where CustomerId='$CustomerId'";
$resultcurr=mysql_query($selectcurr) or die(mysql_error());
if(mysql_num_rows($resultcurr)>0)
{
while($rowcurr=mysql_fetch_assoc($resultcurr))
{
	$application3['Type']=$rowcurr['Type'];
if($rowcurr['Current_TaxesDoc']!="")
{
	$application3['status']='true';
}
else
{
	$application3['status']='false';
}
$application[]=$application3;
}

}

$selectdep="select Type,Deposit_Documentation from Deposit_Documentation where CustomerId='$CustomerId'";
$resultdep=mysql_query($selectdep) or die(mysql_error());
if(mysql_num_rows($resultdep)>0)
{
while($rowdep=mysql_fetch_assoc($resultdep)){
	$application4['Type']=$rowdep['Type'];
if($rowdep['Deposit_Documentation']!="")
{
	$application4['status']='true';
}
else
{
	$application4['status']='false';
}
$application[]=$application4;
}

}

$selecthme="select Type,Homeowners_InsuranceDoc from Homeowners_Insurance_Contact_Information where CustomerId='$CustomerId'";
$resulthme=mysql_query($selecthme) or die(mysql_error());
if(mysql_num_rows($resulthme)>0)
{
while($rowhme=mysql_fetch_assoc($resulthme)){
	
	$application5['Type']=$rowhme['Type'];
if($rowhme['Homeowners_InsuranceDoc']!="")
{
	$application5['status']='true';
}
else
{
	$application5['status']='false';
}
$application[]=$application5;
}
}
$selectother="select Type,Other_Documents from Other_Documents where CustomerId='$CustomerId'";
$resultother=mysql_query($selectother) or die(mysql_error());
if(mysql_num_rows($resultother)>0)
{
while($rowother=mysql_fetch_assoc($resultother)){
$application6['Type']=$rowother['Type'];
if($rowother['Other_Documents']!="")
{
	$application6['status']='true';
}
else
{
	$application6['status']='false';
}
$application[]=$application6;
}
}
$selectpay="select Type,PayStubsDoc	from PayStubs where CustomerId='$CustomerId'";
$resultpay=mysql_query($selectpay) or die(mysql_error());
if(mysql_num_rows($resultpay)>0)
{
while($rowpay=mysql_fetch_assoc($resultpay))
{
	$application7['Type']=$rowpay['Type'];
if($rowpay['PayStubsDoc']!="")
{
	$application7['status']='true';
}
else
{
	$application7['status']='false';
}
$application[]=$application7;
}
}
$selectproof="select Type,Proof_of_AssetsDoc from Proof_of_Assets where CustomerId='$CustomerId'";
$resultproof=mysql_query($selectproof) or die(mysql_error());
if(mysql_num_rows($resultproof)>0)
{
while($rowproof=mysql_fetch_assoc($resultproof))
{
	$application8['Type']=$rowproof['Type'];
if($rowproof['PayStubsDoc']!="")
{
	$application8['status']='true';
}
else
{
	$application8['status']='false';
}
$application[]=$application8;
}
}
$selectself="select Type,`Proof_of_Self-Employment` from Proof_of_Self_Employment where CustomerId='$CustomerId'";
$resultself=mysql_query($selectself) or die(mysql_error());
if(mysql_num_rows($resultself)>0)
{
while($rowself=mysql_fetch_assoc($resultself))
{
	$application9['Type']=$rowself['Type'];
if($rowself['Proof_of_Self-Employment']!="")
{
	$application9['status']='true';
}
else
{
	$application9['status']='false';
}
$application[]=$application9;

}
}
$selectrevolve="select Type,Revolving_Debt_Close_Out_Letter from Revolving_Debt_Close_Out_Letter where CustomerId='$CustomerId'";
$resultrevolve=mysql_query($selectrevolve) or die(mysql_error());
if(mysql_num_rows($resultrevolve)>0)
{
while($rowrevolve=mysql_fetch_assoc($resultrevolve))
{
	$application10['Type']=$rowrevolve['Type'];
if($rowrevolve['Revolving_Debt_Close_Out_Letter']!="")
{
	$application10['status']='true';
}
else
{
	$application10['status']='false';
}
$application[]=$application10;
}
}
$selectverfy="select Type,`Verification_Of _OwnershipDoc` from Verification_Of_Ownership where CustomerId='$CustomerId'";
$resultverfy=mysql_query($selectverfy) or die(mysql_error());
if(mysql_num_rows($resultverfy)>0)
{
while($rowverfy=mysql_fetch_assoc($resultverfy))
{
$application11['Type']=$rowverfy['Type'];
if($rowverfy['Verification_Of _OwnershipDoc']!="")
{
	$application11['status']='true';
}
else
{
	$application11['status']='false';
}
$application[]=$application11;
}
}
$selectw="select Type,`W_2Doc` from W_2 where CustomerId='$CustomerId'";
$resultw=mysql_query($selectw) or die(mysql_error());
if(mysql_num_rows($resultw)>0)
{
while($roww=mysql_fetch_assoc($resultw)){
$application12['Type']=$roww['Type'];
if($roww['W_2Doc']!="")
{
	$application12['status']='true';
}
else
{
	$application12['status']='false';
}
$application[]=$application12;
}
}
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode(array("ToDoList"=>$application));
echo $data;
?>