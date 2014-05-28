<?php ob_start();
include('connect.php');
$seletlibrary="select * from LoanLibrary order by LibraryId ASC";
$resultlibrary=mysql_query($seletlibrary) or die(mysql_error());
if(mysql_num_rows($resultlibrary)>0)
{
	while($rowlibrary=mysql_fetch_assoc($resultlibrary))
	{
		$result[]=$rowlibrary;
	}
}
else
{
	$result[]="None";
}
header("Content-Type: application/json; charset=utf-8",true);
$data=json_encode($result);
echo $data;
?>