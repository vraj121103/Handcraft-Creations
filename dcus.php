<?php
$obj  =new mysqli("localhost","root","","handcraft");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['delid'];

$r = $obj->query("delete from customer where id='$id'");
if ($r) 
{
	echo "<script>alert('Delete Sucessfull');window.location='customer.php'</script>";
}
else
{
	echo "<script>alert('Error')</script>";
}

?>