<?php session_start();
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
<script type="text/javascript">
function login(){
		username	=	document.getElementById("username").value;
		password	=	document.getElementById("password").value;
		if(username==""){
			document.getElementById("alert").innerHTML	=	"Username is Required.";
			return false;
		}
		else if(password==""){
			document.getElementById("alert").innerHTML	=	"Password is Required.";
			return false;
		}
		else
		{
		return true;
		}
}
</script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
	<div id="page">
	<div id="alert" class="alert" style="color:#F00; font-weight:bold; margin-bottom:5px;height: 40px;" align="center">
        <?php 
		$flag=$_REQUEST['flag'];
		if($flag==2)
		{
			echo 'Invalid Username or Password';	
		}
		?>
        </div>
			<h1 align="center">LOGIN</h1><br /><br />
        <form action="login.php"  method="post" onsubmit="return login();">
		<table border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<th>Username</th><td>&nbsp;&nbsp;</td>
			<td><input type="text"  class="login-inp" id="username" name="username"/></td>
		</tr>
        <tr><td>&nbsp;&nbsp;</td></tr>
		<tr>
			<th>Password</th><td>&nbsp;&nbsp;</td>
			<td><input type="password" id="password" name="password" /></td>
		</tr>
        <tr><td>&nbsp;&nbsp;</td></tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Submit"  /></td>
		</tr>
		</table>
        </form>
	</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
