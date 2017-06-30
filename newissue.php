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
  $sql="INSERT INTO rissue(machines, work, date, product, received, issue, phone, remarks, forward, attach, email, comm, final,rattach,keyword,status,cause,action,name) VALUES('$_POST[machines]','$_POST[work]','$_POST[date]','$_POST[product]','$_POST[received]','$_POST[issue]','$_POST[phone]','$_POST[remarks]','$_POST[forward]','$_POST[attach]','$_POST[email]','$_POST[comm]','$_POST[final]','$_POST[rattach]','$_POST[keys]','$_POST[status]','$_POST[cause]','$_POST[action]','$_POST[name]') ";
  
     if ($conn->query($sql) === TRUE) 
{
   echo "Record Inserted successfully";
} 
   
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }


$conn->close();
?>
    
     
<?php
if(isset($_POST['attach']) && $_FILES['attach']['size'] > 0)
{
$fileName = $_FILES['attach']['name'];
$tmpName  = $_FILES['attach']['tmp_name'];
$fileSize = $_FILES['attach']['size'];
$fileType = $_FILES['attach']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
include 'library/config.php';
include 'library/opendb.php';

$query = "INSERT INTO upload (name, size, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
mysql_query($query) or die('Error, query failed'); 
include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 
?>

<body background="k.jpg">


<a href="welcome.php"> GO BACK TO MAIN PAGE</a>
<a href="display.php">Display inserted data </a>
</body>
</html>
