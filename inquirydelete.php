<?php
$obj  =new mysqli("localhost","root","","handcraft");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delid'];

$r = $obj->query("delete from inquiry where id='$id'");
if ($r) 
{
	header('location:inquiry.php');
}
else
{
	echo "<script>alert('Error')</script>";
}

?>