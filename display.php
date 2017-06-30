<?php
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
 $query = "SELECT * FROM demo";
 $query1 = mysql_query($query);
while($ros = mysql_fetch_array($query1))
{
	$path = $ros['path'];
	$id = $ros['id'];
	echo '<img src ="'.$path.'" width ="200px" height="200px" />';
}

$conn->close();
 ?>
 <a href="download.php?id=<?echo $id ?>" >download </a>
<body>

</body>
</html>