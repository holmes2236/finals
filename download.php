<?
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection
if ($conn->connect_error) 
{     die("Connection failed: " . $conn->connect_error);
 }
 $id = $_GET['id'];
 $query = "SELECT * FROM demo WHERE id = '$id'";
 $query1 = mysql_query($query);
 while ($ros = mysql_fetch_array($query1)) {
 	$path = $ros['path'];
 	header('content-Disposition: attachment; filename = '.$path);
 	header('content-type:application/octent-strem');
 	header('content-length='.filesize($path));
 	readfile($path);
 }
 ?>
 </html>