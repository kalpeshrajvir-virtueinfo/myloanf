// JavaScript Document
function addDetails(value)
{
	
	if(window.XMLHttpRequest)
   {
           xmlhttp = new XMLHttpRequest();
   }
 else
 {
           xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
 }
 xmlhttp.onreadystatechange= function ()
 {
  
	if( xmlhttp.readyState== 4 && xmlhttp.status == 200)
	{
		var result=xmlhttp.responseText;
	   location.reload();
	
	}
 }
xmlhttp.open("GET","Insert_document.php?Name="+value,true);
xmlhttp.send();
}