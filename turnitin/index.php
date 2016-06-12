<?php # file: logout.php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turnitin Site</title>
<style>
    
.div{
    background-color: #4d9dff;
}
.circular-image {
  border-radius:  50%;
}
.button{
    color:white; border-radius:10%; border-color:black; width:300px; height:40px; font-size:20px; background-color:#7030A0;
}

</style>
</head>
<body>
    <div> 
    <!--<p class="txt" >Try the free turnitin ipad App on instruction      -->
    <img src="picture/turnitinlogo.png" alt="Logo" height="80" width="250">
    <span style="color:silver; margin-left:550px; font-size:18px;">Try the free turnitin ipad App on instruction       
    <img src="picture/app.png" style="border-radius:10%; float:right;" alt="Logo" height="70" width="200"></span> 
</div>
<div>
    <table class="div" width="100%">
    <tr>  
    <td width="" colspan="">     
    <img src="picture/owais.jpg" alt="Owais Picture" class="circular-image" align="left" width="150" height="150">
    <br>
    <pre style="color:white; background-image:; font-size:20px;">
    write better with 
    Revision Assistant...
    it makes my writting sound more clear.
    <!--<br/>-->
    Guadalupe, Student.
    </pre>            
</div>
<br><br><br><br><br><br><br><br><br><br><br><!-- <br><br><br> -->
<div align="center" >
      <!--<input style="color:white; border-radius:10%; border-color:black; width:300px; height:40px; font-size:20px; background-color:#7030A0;" type="button" value="Discover Revision Assistant"><br><br>-->
    <button class="button">Discover Revision Assistant</button>
  <br><br>
  </div>
</td>

<td align="left" style="color:white; padding: 10px; margin-bottom: 30px; font-size:25px;" >Login In 
    <br/>
    <form method="POST">
    <input style="font-size:25px; margin-top:20px; margin-bottom:-20px;" size="25" name="username" type="text" placeholder="Email" height="200"><br><br>
    <input style="font-size:25px; margin-top: -20px; margin-bottom: -20px;" size="25" name="password" type="password" placeholder="Password" height="200"><br><br>
    <input style="color:white; float:center; margin-bottom: -20px; border-color:White;  font-size:25px; width:383px; height:40px; background-color:#4d9dff; width:25;" type="submit" name="submit" value="Login In"><br><br>
    </form>
    <a href="#" style="color:white; font-size:15px;" >Reset Password</a><br>
    <a href="index2.php" style="color:white; font-size:15px;" >Create Account</a><br><br>
<hr />    
    <br>
    <!-- <br> -->
    <p style="color:white; font-size:15px;">
    Maunal and Guides<br>
    Support
    </p>
</td>
</tr>
</table>
<div style="background-color:#000205;" align="center">
    <a style="color:white; font-size:25px;"  target="blank" href="https://owaisprofile.firebaseapp.com/">Made By Owais Khalid</a>
</div>

</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","turnitin");
    $query = "SELECT `password` FROM `login` WHERE `username` = '$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
      if($row[0] == $pass){
         $_SESSION['name'] = $_POST['username'];
                header("Location:welcome.php"); 
          }
          else {
                echo "<h2>Invalid Password</h2>";
          }
}
?>