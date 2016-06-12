<!DOCTYPE html>
<html>
<head>
	<title>Turnitin Site</title>
<style>
.div{background-color: #4d9dff;}
</style>
</head>
<body>
<div> 
      <img src="picture/turnitinlogo.png" alt="Logo" height="80" width="" >      
</div>
<table  align="center" width="50%">
<tr>
	<td style="font-size: 25px; color: white; padding: 15px; background-color:#4d9dff; text-align: justify;  ">Create A User Profile</td>
<!-- </tr>
<tr>
 -->	
 <td style="font-size: 15px; background-color:#D8D8D8; text-align: justify; padding: 10px;">
<pre> 
<b>You Ever Used Turnitin?</b>
If you've used Turnitin before, you can use the same email and password to log in. You 
can keep all your papers and grades together, even if you're now in a different class or a 
different school!
</pre>
<form method="POST">
	<b>Email Address</b><br/>
	<input size="50" type="text" name="username" required="requried" style="border-radius: 10%;" ><br><br>
    <b>Password (Login to Turnitin)</b><br>
    <input size="50" type="password" name="password" required="requried" style="border-radius: 10%;"><br><br>
    <pre>
Forgot your password? Click here.

Create a New Account

Please select whether you will be using the service as an instructor or a student.
</pre>
<ol>
<li>Student</li>
<li>Instructor</li>
<li>Teaching assistant</li>
</ol>
<input type="submit" name="submit" value="Create Account" style="border-radius: 10%;"><br>

<br>
	</td>
</tr>
</form>
</table>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turnitin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit'])) 
{
	$name = $_POST['username'];
	$pass = $_POST['password'];

$sql = "INSERT INTO `login` (`username`,`password`) VALUES ('".$name."','".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>New record created successfully .</h3>.<br>";
	echo "<a href='index.php'>Return to Home Page</a>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

