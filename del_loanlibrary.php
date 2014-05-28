<?php
include('connect.php');
$loan_libID=$_REQUEST['id'];
$del="DELETE FROM LoanLibrary WHERE LibraryId='$loan_libID'";
$res=mysql_query($del) or die(mysql_error());
header('Location:LoanLibrary.php')
?>