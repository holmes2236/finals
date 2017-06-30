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
	<title>List of Issues</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<center><strong>List of Issues</strong></center>
<br><br><br>


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
$sql = "SELECT sno,issue from rissue where name = '$_SESSION[name]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     echo "<table border = 1 align='center' style = 'border-collapse: collapse;font-size:30px;'><tr><th>Serial No:</th><th> Issue Description</th><th> View Issue</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" .$row["sno"]. "</a></td><td>" . $row["issue"]. "</td><td><button class='view' action='".$row["sno"]."'>View Issue</button></td></tr>";
         

     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".view").on('click',function(){
            var action = $(this).attr('action');
            $(location).attr('href', 'eissue.php?view='+action);
        });
    });
</script>
</body>
</html>