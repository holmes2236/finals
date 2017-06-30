<?php
session_start();
if (isset($_POST['submit'])) 
{
 @mysql_connect('localhost','root','') or die(mysql_error());
 @mysql_select_db('mydb') or die(mysql_error());
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Issues</title>
</head>
<body>
<center><strong>Register Issue</strong></center>
<br><br><br>
<form method="POST" action="newissue.php" enctype="multipart/form-data">
<table border = 10 style = 'border-collapse: collapse;font-size:10px;'><tr><th>Machine/Equipment Number *:</th><th> <input type="text" name="machines"></th> </tr>
<tr><th>Work Order Number *:</th><th> <input type="text" name="work"></th> </tr>
<tr><th>Name *:</th><th><input type="text" name="name"></th></tr> </table>
<br><br>

<table border = 10 align="center" style = 'border-collapse: collapse;font-size:10px;'><tr><th>Date *:</th><th> <input type="date" name="date"></th><th>Product *:</th><th> <select name="product">
  <option value="ABC">ABC</option>
  <option value="DEF">DEF</option>
  <option value="GHI">GHI</option>
  <option value="JKL">JKL</option>
</select> </th> </tr>
<tr><th>Received From *:</th><th> <select name="received">
  <option value="AB">AB</option>
  <option value="DE">DE</option>
  <option value="GH">GH</option>
  <option value="JK">JK</option>
</select> </th> 
<th>Issue Description *:</th><th> <textarea name="issue" maxlength="250"></textarea></th></tr>
<tr><th>Phone Number:</th><th> <input type="tel" name="phone"></th> <th>Keywords *:</th><th> <input type="text" name="key"></th> </tr>
<tr><th>Remarks *:</th><th> <textarea maxlength="250" name="remarks"></textarea></th><th>Forward to *:</th><th> <select name="forward">
  <option value="AB">AB</option>
  <option value="DE">DE</option>
  <option value="GH">GH</option>
  <option value="JK">JK</option>
</select> </th>  </tr>
<tr><th><input type = "text" name = "t" placeholder = "Issue Attachments:" /></th><th><input type="hidden" name="MAX_FILE_SIZE" value="2000000"> <input type="file" name="attach"></th> <th>E-mail ID:</th><th> <input type="email" name="email"></th> </tr>
<tr><th>Comments:</th><th> <input type="text" name="comm"></th> <th>Final Resolution Given:</th><th> <input type="text" name="final"></th> </tr>
<tr><th>Resolution Attachments:</th><th> <input type="file" name="rattach"></th> <th>Resolution to be sent to:</th><th> <input type="text" name="keys"></th> </tr>
<tr><th>Issue Status *:</th><th> <select name="status">
  <option value="Yes">Cleared</option>
  <option value="No">Not Cleared</option>
</select> </th> <th>Root Cause:</th><th> <textarea maxlength="250" name="cause"></textarea></th> </tr>
<tr><th>Corrective Action:</th><th> <textarea maxlength="250" name="action"></textarea></th> <th>Preventive Action:</th><th> <textarea maxlength="250"></textarea></th> </tr>
<tr><th></th><th><input type="submit" name="Save"></th><th> <input type="reset" name="Reset"></th> <th>* All fields are necessary</th></tr>
</table></form>

</body>
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
 if (isset($_POST["Save"])) {

$fnn = $_FILES["attach"]["name"];
  $dst = "./images/".$fnn;
  move_uploaded_file($_FILES["attach"]["tmp_name"], $dst);
  $query="INSERT INTO demo(filename,name,path) VALUES('$_POST[attach]','$fnn','dst')";
  $ros = mysql_query($query);
 if ($ros== TRUE) {
   echo "Record Inserted successfully";   
    }
 }
?>
</html>