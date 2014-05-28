<?php /*session_start();
$uid=$_SESSION['uid'];
if(!$uid)
{
header('Location:index.php');	
}*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
</style>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
	<div id="page">
			<h1 align="center">WELCOME USER</h1><br /><br />
        <ul>
            <li> Make sure the browser supports Client Side Scripting(JavaScript) and that it is enabled.</li>
            <li> This site is best viewed on Internet Explorer 5.x or above.</li>
            <li> Browser should also support cookies and should be enabled.</li>
         </ul>
	</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
