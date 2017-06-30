<?php
session_start();
if (isset($_POST['submit'])) 
{
 @mysql_connect('localhost','root','') or die(mysql_error());
 @mysql_select_db('mydb') or die(mysql_error());
}
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<style type="text/css">
		body
		{
			background-image: url('home.jpg');
			background-repeat: no-repeat;
			background-size: cover;
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
	<p> Issues </p>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$view = $_GET['view'];
$sql = "SELECT machines, work, date,product,received,issue,phone,sno from rissue WHERE sno=$view";
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
     // output data of each row
     echo "<table border = 1 align='center' style = 'border-collapse: collapse;font-size:30px;'><tr><th>Machine Number</th><th> Work Number</th> <th>Date</th> <th>Product</th><th>Received From</th><th>Issue Description</th><th>S.No</th><th>Phone Number</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["machines"]. "</td><td>" . $row["work"]. "</td><td>" . $row["date"]."</td><td> ".$row["product"]."</td><td> ".$row["received"] . "</td><td>".$row["issue"]."</td><td>AB-".$row["sno"]."</td><td>".$row["phone"];
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>

<br><br>
<span>What do you want to update?</span>
<form method="post" action="k.php">
 <table border = 0 align='center' style = 'border-collapse: collapse;font-size:30px;'>
 <tr><td>
	<input type="checkbox" name="Date">Date : </td>
	<td>Enter the issue number</td>
	<td><input type="text" name="sno"></td>
	<td>
	Enter the new Date : </td><td>
	<input type="date" name="daten" >
	</td></tr>
	<tr><td>
	<input type="checkbox" name="ReceivedFrom">Received From : </td>	<td>Enter the issue number</td>
	<td><input type="text" name="sno"></td><td>
	Last received from : </td><td>
	<select name="receivedn">
  <option value="AB">AB</option>
  <option value="DE">DE</option>
  <option value="GH">GH</option>
  <option value="JK">JK</option>
</select>
	</td></tr><tr><td>
	<input type="checkbox" name="Remarks">Remarks: </td>	<td>Enter the issue number</td>
	<td><input type="text" name="sno"></td><td>
	Enter your new Remarks: </td><td>
	<input type="textarea" name="remarksn" >
	</td></tr><tr><td>
	<input type="checkbox" name="Issue">Issue Status : </td>	<td>Enter the issue number</td>
	<td><input type="text" name="sno"></td><td> 
	Enter your new status:</td><td>
	<select name="statusn">
  <option value="Yes">Cleared</option>
  <option value="No">Not Cleared</option>
</select>
	</td></tr>
	<tr><td>
	<input type="checkbox" name="Password">Password :</td>	<td>Enter the issue number</td>
	<td><input type="text" name="sno"></td><td> 
	Enter your new Password :</td><td> 
	<input type="password" name="pn" >
	</td></tr>
	</table>
	<input type="submit" name="submit">
	<br>

</form>
</html> 
