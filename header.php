<title>LoanApp</title>
<?php session_start();
$uid=$_SESSION['uid'];
$type=$_SESSION['type'];
if(!$uid)
{
?>
<div id="header">
		<div id="logo">
			<h1><a href="#"><!--Loan App Admin--><img src="img/logo.png" style="height:100px;margin-top: 42px;"></a></h1>
		</div>
	</div>
    <div id="menu">
		<!--<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="view_offers.php">Offers</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="view_items.php">Items</a></li>
			<li><a href="view_gal.php">Gallery</a></li>
		</ul>-->
	</div>
<?php
}
else
{?>
<div id="header">
		<div id="logo">
			<h1><a href="#"><!--Loan App--><img src="img/logo.png" style="height:100px;margin-top: 42px;"></a></h1>
		</div>
	</div>
    <div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="Customers.php">Customers</a></li>
			<li><a href="Loan.php">Loan</a></li>
            <li><a href="Documents.php">Documents</a></li> 
           
	    <li><a href="pgmdetails.php">Program</a></li>
      <!-- <li><a href="AddContactDetails.php">Contacts</a></li>-->
     
     <!--<li><a href="loandetails.php">CustomersLoan</a></li>-->
         		<!--<li><a href="view_ferry.php">Ferry</a></li>
         <li><a href="view_taxi.php">Taxi</a></li>
            <li><a href="answers.php">FAQ</a></li>-->
			<li class="last"><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
<?php
}?>