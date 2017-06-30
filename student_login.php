
<?php
session_start();
if(isset($_POST['submit']))
{
 @mysql_connect('localhost','root','') or die(mysql_error());
 @mysql_select_db('mydb') or die(mysql_error());
 $mail=$_POST['mail'];
 $pw=$_POST['pw'];




if($mail!=''&&$pw!='')
 {
   $query=mysql_query("select * from emp where mail='".$mail."' and pw='".$pw."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['mail']=$mail;
    header('Location:welcome.php');     
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>

<!DOCTYPE html>
<head>
  <title>Login Form</title>
<style>
body {
  color: #404040;
  background: #0ca3d2;
  color: white;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: lighter;
}
span
{
  color: white;
  font-size: 60px;
  text-align: center;
  font-weight: bold;
  font-family: 'Kaushan Script', cursive;
}

input[type=checkbox]
{
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
width: 1.25em;
height: 1.25em;
background: #fff;
-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;

}

.container {
  margin: 50px auto;
  width: 640px;
  border-radius:30;
}

.login {
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 310px;
  background: white;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
body
{
  background-image: url("bg.jpg");
}


.login h1 {
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
p.r
{
  text-align: center;
  font-size: 50px;
  color: white;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: lighter;
}

.login p {
  margin: 20px 0 0;
}

.login input[type=text], .login input[type=password] {
  width: 278px;
}

.login p.remember_me {
  float: left;
  line-height: 31px;
}

.login p.remember_me label {
  font-size: 12px;
  color: #777;
  cursor: pointer;
}

.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}

.login p.submit {
  text-align: right;
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
input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}

input[type=text], input[type=password] {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
 
}

input[type="submit"]{
  padding: 10px;
  color: #fff;
  background: #CB1D1D;
  width: 320px;
  margin: 20px auto;
  margin-top: 0px;
  border: 0px;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover{
  background: #D31F1F;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">


</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
  <div class="container">
    <div class="login">
      <h1>LOGIN</h1>
      <form name="forml" method="post" action="" onsubmit="return ed()">
        <p><input type="text" name="mail" value="" placeholder="EMAIL-ID"></p>
        <p><input type="password" name="pw" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
  </div>
  </form>

  <div class="container">
    <div class="login">
      <h1>SIGN UP</h1>
      <form method="post" action="new.php" name="formk""
      >
        <p><input type="text" name="name" value="" id="name" placeholder="Name"></p>
    <p><input type="text" name="desig" value="" placeholder="Designation"></p>
<p><input type="text" name="mail" value="" placeholder="Email"></p>
    <p><input type="password" name="pw" value="" placeholder="Password"></p>
    <p><input type="password" name="rpw" value="" placeholder="Confirm Password"></p>
 <p ><font color="black">Department:</font> <select name="dept" placeholder = "Department">
  <option value="AB">AB</option>
  <option value="DE">DE</option>
  <option value="GH">GH</option>
  <option value="JK">JK</option>
</select></p>
    <p><input type="text" name="urole" value="" placeholder="UROLE"></p>
    <p><input type="text" name="phone" value="" placeholder="Phone Number"></p>
    <p><input type="text" name="extn" value="" placeholder="Extension"></p>
    <p><input type="text" name="mobile" value="" placeholder="Mobile Number"></p>
    <p><input type="text" name="agency" value="" placeholder="agency"></p>
        <p class="submit"><input type="submit" name="commit" value="Sign Up"></p>
      </form>
    </div>
  </div>
</body>
</html>