<?php
session_start();
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<style type="text/css">
		body
		{
			
			background-image: url('bg1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			color:orange;
			font-family: 'Kaushan Script', cursive;
		}
		p
		{
			text-align: center;
			font-size: 60px;
			font-weight: bold italic;
		}
	</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$counter=0;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

	$sql = "UPDATE rissue SET date='$_POST[daten]' WHERE sno='$_POST[sno]'";
	if ($conn->query($sql) == TRUE) {
        	echo "done";
        	$counter++;
        	echo "done";
		}
		 else 
		 {
		 	echo "done";
    	$counter=$counter+0;
	}


	$sql = "UPDATE rissue SET received='$_POST[receivedn]' WHERE sno='$_POST[sno]'";
	if ($conn->query($sql) == TRUE) {
		echo "done";
        	$counter++;
		}
		 else 
		 {
		 	echo "done";
    	$counter=$counter+0;
	}

	$sql = "UPDATE rissue SET remarks='$_POST[remarksn]' WHERE sno='$_POST[sno]'";
	if ($conn->query($sql) == TRUE) {
		echo "done";
        	$counter++;
		}
		 else 
		 {
		 	echo "done";
    	$counter=$counter+0;
	}

	$sql = "UPDATE rissue SET status='$_POST[statusn]' WHERE sno='$_POST[sno]'";
	if ($conn->query($sql) == TRUE) {
        	$counter++;
        	echo "done";
		}
		 else 
		 {
		 	echo "done";
    	$counter=$counter+0;
	}

if($counter=8)
{
 echo "Record updated successfully <br>";
}
else
{
	echo "Error updating record: ";
}


$conn->close();

?>
</body>
</html>