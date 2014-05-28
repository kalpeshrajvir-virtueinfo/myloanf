<?php
session_start();
 $id=$_SESSION['id'];
include('connect.php');
 $customer_id=$_REQUEST['name'];
  $doc_name=$_REQUEST['doc_name'];
 $selectValue =explode(",",$doc_name);
  //print_r($selectValue);

 
 $i=0;
 foreach($selectValue as $docname){
	 
	 if($i > 0 ){
		 //print_r($docname);
		
		$select_listedValue="select * from tb_customer_documents where document_name='$docname' AND Customer_id='$customer_id' ";
		$result_listedvalue=mysql_query($select_listedValue) or die(mysql_error());
		if(mysql_num_rows($result_listedvalue)>0) 
		{
			?>
            <script type="text/javascript">
alert("Username or Email Already Exists");
window.location="Documents.php";
</script>

            <?php
			
		}
		else
		{
		$insert="insert into tb_customer_documents (Customer_id,Bank_ID,document_name,status,action_status) values ('$customer_id','$id','$docname','ToDo','disable')";
$result=mysql_query($insert) or die(mysql_error());
		}
	 }
	 
	$i++; 
 }
 /*print_r($doc_name);
foreach($doc_name as $docname){
	
echo $insert="insert into tb_customer_documents (Customer_id,Bank_ID,document_name,status,action_status) values ('$customer_id','$id','$docname','ToDo','disable')";
$result=mysql_query($insert) or die(mysql_error());

}*/
?>