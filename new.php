
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">


<style type="text/css">
span
{
	color: white;
	font-size: 60px;
	text-align: center;
	font-weight: bold;
	font-family: 'Kaushan Script', cursive;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: green;
}

		div.two
		{
			background-color: white;
			background-image: url("div.jpg");
			width: 20.88em;
			height:30em;
			margin-left: 100px;
			margin-top: 300px;
			border-radius: 5%;
		}
		div.one
		{
			background-color: white;
			background-image: url("div.jpg");
			width: 20.88em;
			height:30em;
			margin-left: 500px;
			margin-top:-480px;
			border-radius: 5%;
			position: absolute;
		}
		div.three
		{
			background-color: white;
			background-image: url("div.jpg");
			width: 20.88em;
			height:30em;
			margin-left: 900px;
			margin-top:-480px;
			border-radius: 5%;
			position: absolute;
		}
		div.four
		{
			background-color: white;
			background-image: url("div.jpg");
			width: 20.88em;
			height:30em;
			margin-left: 500px;
			margin-top:50px;
			border-radius: 5%;
			position: absolute;
		}
		
	</style>
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
  $sql="INSERT INTO emp(name, desig, mail,pw,dept,urole,phone,extn,mobile,agency) VALUES('$_POST[name]','$_POST[desig]','$_POST[mail]','$_POST[pw]','$_POST[dept]','$_POST[urole]','$_POST[phone]','$_POST[extn]','$_POST[mobile]','$_POST[agency]') ";
  	 if ($conn->query($sql) === TRUE) 
{
 /*   echo "Record Inserted successfully";*/
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }


$conn->close();
?>
 		

<body background="k.jpg">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<span style="color:white;font-size:80px;text-align:center;">WELCOME </span>
<br>
<span>NAME : </span>
&nbsp;

&nbsp;
<?php
echo "<span>" . $_POST["name"] . "</span>";
$_SESSION["name"]=$_POST["name"];
?>
<br>
<span>Email-Id :</span>
<?php
echo "<span>".$_POST["mail"]."</span>";
$_SESSION["m"]=$_POST["mail"];
?>
<br>
<span>Password :</span>
<?php
echo "<span>".$_POST["pw"]."</span>";
$_SESSION["s"]=$_POST["pw"];
?>

<br><br><br>
<a href="student_login.php"> Go Back to Login Page</a>
</body>
</html>
