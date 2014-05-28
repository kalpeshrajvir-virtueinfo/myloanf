<?php
include('connect.php');
$libraryname=$_POST['libraryname'];
 $librarydetails=$_POST['librarydetails'];
 $insertloan="insert into  LoanLibrary (Library_Name,Library_Details) values ('$libraryname','$librarydetails')";
$resultbank=mysql_query($insertloan) or die(mysql_error());
if($resultbank)
{
	header('Location:LoanLibrary.php');
}
?>