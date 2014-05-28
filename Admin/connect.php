<?php
$con=mysql_connect("myloanflow.com","myloan","Gwenny156") or die(mysql_error());
mysql_select_db("loanapp") or die(mysql_error());
if( function_exists('mysql_set_charset') ){
    mysql_set_charset('utf8', $con);
}else{
    mysql_query("SET NAMES 'utf8'", $con);
}
?>