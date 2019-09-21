<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="icon" href="loginicon.jpg">
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		SESSION_START();
     $conn=mysqli_connect("localhost","root","","register") or die("Connection failed: " . mysqli_connect_error());

     $user=$_POST["username"];
     $pass=$_POST["password"];
     $query=mysqli_query($conn,"select * from register where Username='$user' and Password='$pass'");
     $query1=mysqli_query($conn,"select * from register where Password='$pass'");
     $query2=mysqli_query($conn,"select * from register where Username='$user'");
     if(mysqli_num_rows($query))
     {
       $_SESSION['NAME']=$user;
       header("Location:homepagewk.html");
     }
     else if((mysqli_num_rows($query1)==0)and(mysqli_num_rows($query2)==0))
     {
        echo '<script type="text/javascript">alert("username and password are wrong")</script>';
     }
     else if(mysqli_num_rows($query1)==0)
     {
     	echo '<script type="text/javascript">alert("password is not correct ")</script>';
     }
     else
     {
     	echo '<script type="text/javascript">alert("username is not correct ")</script>';
     }
     
}
	?>

<form class="lgpage" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<h1 style="font-size: 50px;"><img src="loginlogo.png" style="width:50px; height:50px;"><b>LOGIN</b></h1><br>
	<label for="username" class="label">
		Username<br>
	</label><br>
	<input class="input" type="test" name="username" placeholder="enter username" id="username"><br><br><br>
	<label for ="password" class="label">
		Password<br>
	</label><br>
	<input class="input" type="password" name="password" placeholder="enter password" id="password"><br><br><br><br>
	<input class="submit" type="submit" value="login"><br><br><br>
	<h4><a style="color: red;" href="http://localhost/web/reset%20password.php">Reset password </a> ||<a href="http://localhost/web/reset%20password1.php" style="color: red;" >Forget password<a></h4><br>
	<h5 style="font-size: 18px;">Don't have a account?<a href="http://localhost/web/register.php" style="color: red;">REGISTER</a></h5>




</form>

</body>
</html>