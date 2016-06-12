<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	
.button{
   color:white; float:right; border-color:White; margin-right: 20px;  font-size:20px; width:200px; height:40px;
   background-color:#4d9dff; ba 	
	
</style>


</head>
<body>
<img src="picture/turnitinlogo.png" alt="Logo" height="80" width="250">
<p align="right" style="color:Black; font-size:25px; "><u>Username:</u> <?php echo @$_SESSION['name']; ?>
<a href="index.php">  <button class="button">Log Out</button></a></p>
<div style="background-color: #4d9dff; height :400px;  ">

<h1 align="center" style="color:white; font-size:30px; "><u>WELCOME TO LOGIN THIS ACCOUNT</u></h1>
<div style="background-color:#000205; margin-top:350px;" align="center">
    <a style="color:white; font-size:25px;"  target="blank" href="https://owaisprofile.firebaseapp.com/">Made By Owais Khalid</a>
</div> 
	
</div>
</body>
</html>




