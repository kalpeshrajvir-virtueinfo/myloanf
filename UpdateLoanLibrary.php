<?php
include('connect.php');
$loan_libID=$_REQUEST['lib_ID'];
$libraryname=$_POST['libraryname'];
 $librarydetails=$_POST['librarydetails'];
 $updateloan="update LoanLibrary set Library_Name='$libraryname',Library_Details='$librarydetails' where LibraryId='$loan_libID'";
$resultbank=mysql_query($updateloan) or die(mysql_error());
if($resultbank)
{
	header('Location:LoanLibrary.php');
}
?>