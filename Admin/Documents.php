<?php 
session_start();
$uname=$_SESSION['uid'];
$id=$_SESSION['id'];
if(!$uname)
{
header('Location:index.php');	
}

include("connect.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="timepicker/bootstrap/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
</style>
<script type="text/javascript">
function validation()
{

if(document.getElementById("name").value=="select")
{
alert("select customer name");
return false;
}
/*else if(document.getElementById("doc_name").value=="")
{
alert("select document name");
v=false;
}*/
else
{
	
displayResult();

}
return false;
}
</script>
<script>
function List(val)
{
 
/* var val=document.getElementById("category").value;
 alert(val);
 $.ajax({
  url: 'Listing.php',
  data: "Lists="+val,
  type: "POST",
  success: function(result) {
   
      document.getElementById("printableArea").innerHTML=result;
  }
 });
return false;*/
//var select1 = document.getElementById("doc_name");

var select1 = document.getElementById("doc_name");
select1.options[select1.options.length] = new Option(val, val);

//var x=document.getElementById('doc_name').value=val;
//var selOption = "<option value="+x+"></option>";
//$("#doc_name").val(selOption);
<!--alert(x);
-->
}
function remList(val) {
	var htmlSelect=document.getElementById('doc_name');

if(htmlSelect.options.length==0){
alert('You have removed all options');
return false;
}
var optionToRemove=htmlSelect.options.selectedIndex;
htmlSelect.remove(optionToRemove);
alert('The selected option has been removed successfully');
return true;
	}
</script>
<script>

 function add()
 {
	 var x=document.getElementById('add').style.display="block";
	
 }
 </script>
 <script type="text/javascript">
 function displayResult() {  
    var customerId=document.getElementById('name').value;
    var x = document.getElementById("doc_name");
	var y=document.getElementById('name').value;
    var txt='';
    var i;
    for (i = 0; i < x.length; i++) {
        txt = txt + "," + x.options[i].text;
    }
   /* alert(txt);*/

	$.ajax({
   url: 'Listing.php?name='+y+'&doc_name='+txt,
 
  type: "POST",
  
  success: function(result) {
	  
	  //alert(result);
	 window.location="view_document_details.php?customerID=" + customerId;
   
      //document.getElementById("printableArea").innerHTML=result;
  }
  
 });
return false;

}
</script>
<script>
function view()
{
	var customerId=document.getElementById('name').value;
	if(document.getElementById("name").value=="select")
{
alert("select customer name");
return false;
}
else
{
	
 window.location="view_document_details.php?customerID=" + customerId;

}
return false;	
}
</script>
<script type="text/javascript" src="document.js"></script>
</head>
<body>
<div id="wrapper">
	<?php include("header.php");?>
	<!-- end #header -->
	
	
<div id="page">

<h1 align="center">Add Customer Document</h1><br /><br />
<form action="#" method="post" onsubmit="return validation()" >
<!--<form action="InsertCustomer_doc.php" method="post" onsubmit="return validation()" >-->

            <table align="center" cellpadding="0" cellspacing="0" width="60%">
              <tr>
             <?php
			 $select="select * from  Customers where Bank_ID='$id'";
			 $res=mysql_query($select) or die(mysql_error());
			 ?> 
    <td style="font-size:20px;">Customer Name</td><td>:<td>
    <td>
    <select name="name" id="name">
    <option>select</option>
    <?php while($row=mysql_fetch_array($res)){ ?>
    <option value="<?php echo $row['CustomerId']; ?>"><?php echo $row['CustomerName']; ?></option>
    <?php } ?>
    </select>
    </td>
    </tr>
    <tr>
    <td><span><img src="img/view.gif" style="margin-left: 82%;" onclick="view()">View</span></td>
    </tr>
    <tr>
    <?php
	$select_doc="select * from  tb_documents where Bank_ID='$id' order by document_id DESC"; 
	$res_doc=mysql_query($select_doc) or die(mysql_error());
	?>
    <td style="font-size:20px;">Document Name</td><td>:<td>
    <td>
    <select   multiple="multiple" onclick="List(this.value)">
    <?php while($row_doc=mysql_fetch_array($res_doc)){ ?>
    <option value="<?php echo $row_doc['documents']; ?>"><?php echo $row_doc['documents']; ?></option>
    <?php } ?>
    </select>
    <p style="margin-left: 54%;margin-top: -27%;">Add customer documents</p> 
    <select multiple="multiple" style="margin-left: 236px;" name="doc_name[]" id="doc_name"  onclick="remList(this.value)">
    </select>
    </td>
    </tr>
    <input type="hidden" name="bankid" id="bankid" value="<?php echo $id; ?>"  >
    <tr><td>&nbsp;&nbsp;</td>
    <td colspan="2"><input type="submit" value="Submit" style="margin-left: 768%;"/></td>
    </tr>
   
                </table> 
                <!--<a style="margin-left:133px" href="Add_documents.php" onclick="add()"><img src="images/add.png" /></a>-->
                 
                 
                </form>
                <a style="margin-left: 331px;"  onclick="add()"><!--<img src="images/add.png" />-->Add Documents</a>
                <table align="center" style="display:none" id="add">
                 <tr>
    <td style="font-size:20px;">Document Name</td><td>:<td>
    <td><input type="text" name="name" id="name" onchange="addDetails(this.value)"/></td>
    </tr>
    <tr><td>&nbsp;&nbsp;</td>
    <td colspan="2"><input type="button" value="Add" /></td>
    </tr>
      </table>
</div>
	<!-- end #page --> 
</div>
<?php include("footer.php");?>
<!-- end #footer -->
</body>
</html>
