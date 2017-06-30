<?php
session_start();
?>

</html> 
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
		span
{
	color: white;
	font-size: 60px;
	text-align: center;
	font-weight: bold;
	font-family: 'Kaushan Script', cursive;
}
input[type="submit"]{
	padding: 10px;
	color: #fff;
	background: #0098cb;
	width: 320px;
	margin: 20px auto;
	margin-top: 0px;
	border: 0px;
	border-radius: 3px;
	cursor: pointer;
}

input[type="submit"]:hover{
	background: #00b8eb;
}
	</style>
</head>
<body>
<p>Welcome to Site Issues Management System <br>Your details are : </p>
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
$sql = "SELECT mail, pw from emp where mail = '$_SESSION[mail]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     echo "<table border = 10 align='center' style = 'border-collapse: collapse;font-size:40px;'><tr><th>Mail</th><th> Password</th> <th>Email</th> <th>PW</th><th>E-mail</th><th>PWD</th><th>email</th><tr>";


     while($row = $result->fetch_assoc()) {
     	
         echo "<tr><td>" . $row["mail"]. "</td><td>" . $row["pw"]. "</td><td>" . $row["mail"]."</td><td> ".$row["pw"]."</td><td> ".$row["mail"] ."</td><td>".$row["pw"]."</td><td>".$row["mail"]."</td></tr>";
         $_SESSION['tyu'] = $row["mail"];

     }
     echo "</table>";

} else {
     echo "0 results";
}
$conn->close();
?>

<br>

	<a href="logout.php"><center>Logout</center></a>

<br>
<br>


<table border="10" align="center" style="border-collapse: collapse;font-size: 30px;">
<tr><td>
<form action="rissue.php" method="post">
	<center><input type="submit" name="Register Issues" value="Register Issues"></center>
</form></td>
</tr>
<tr><td>
<form action="missue.php" method="post">
	<center><input type="submit" name="My Issues" value="My Issues"></center>
</form>
</td></tr>
</table>



</body>

</html> 
