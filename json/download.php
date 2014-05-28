<?php
function zipFilesAndDownload($file_names,$archive_file_name,$file_path)
{
    $zip = new ZipArchive();
    //create the file and throw the error if unsuccessful
    if ($zip->open($archive_file_name, ZIPARCHIVE::CREATE )!==TRUE) {
        exit("cannot open <$archive_file_name>\n");
    }
    //add each files of $file_name array to archive
    foreach($file_names as $files)
    {
          $zip->addFile($file_path.$files,$files);
        //echo $file_path.$files,$files."<br>";
    }
    $zip->close();
    //then send the headers to foce download the zip file
    header("Content-type: application/zip"); 
    header("Content-Disposition: attachment; filename=$archive_file_name"); 
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    readfile("$archive_file_name");
    exit;
}

//If you are passing the file names to thae array directly use the following method
//$file_names = array('makeZipinPHP.jpg','Speed_Kills.wav','tick.jpg','webinfopedia.com.txt');
//$file_names = array('Chrysanthemum.jpg');

//if you are getting the file name from database means use the following method
//Include DB connection
//require_once('db.php');
/*---------------------------------------------------db selection ------------------*/
include('connect.php');
$filename=$_REQUEST['value'];
$files=explode('/',$filename);
//require_once('connect.php');
//Mysql query to fetch file names
foreach($files as $value)
{
$cqurfetch=mysql_query("select * from  tb_documentImage where ImageID='$value' ");

//create an empty array
$file_names = array();
//fetch the names from database
while($row = mysql_fetch_array($cqurfetch, MYSQL_NUM))
{
    //Add the values to the array
    //Below 8 ,eams the the number of the mysql table column
   $file_names[] = $row[3];
   //print_r($file_names);
}
/*--------------------------------------------------------------------------------*/
}
//Archive name
$archive_file_name=$name.'DEMOphpCreateZipTodownloadMultipleFiles.zip';

//Download Files path
  $file_path='/LoanDocuments/';
  /*$file_path='../json/LoanDocuments/';*/
//print_r($file_path);
//cal the function
zipFilesAndDownload($file_names,$archive_file_name,$file_path);

?>