<?php session_start();
session_destroy();
include('connect.php');
header('Location:index.php');
?>