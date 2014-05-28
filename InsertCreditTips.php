<?php
include('connect.php');
$Title=$_POST['Title'];
 $Description=$_POST['Description'];
  $insertloan="insert into  CreditTips (Title,Description) values ('$Title','$Description')";
$resultbank=mysql_query($insertloan) or die(mysql_error());
if($resultbank)
{
	header('Location:CreditTips.php');
}
?>