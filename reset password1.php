<!DOCTYPE html>
<html>
<head>
	<title>Reset password</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="icon" href="putu.png">
</head>
<body>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "register";

// Create connection
$conn = mysqli_connect($servername, $user, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$user=$_POST["username"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$npass=$_POST["npassword"];
$cpass=$_POST["cpassword"];
$query1=mysqli_query($conn,"select * from register where Email='$email'and Username='$user'and Mobile='$mobile'");
$query2=mysqli_query($conn,"select * from register where Username='$user'");
$query3=mysqli_query($conn,"select * from register where Email='$email'and Username='$user'");
$query4=mysqli_query($conn,"select * from register where Mobile='$mobile'and Username='$user'");

if(mysqli_num_rows($query1)!=0){
if( $npass==$cpass){
$sql = "UPDATE register SET Password='$npass' WHERE Username='$user'";
if (mysqli_query($conn, $sql)){ 
echo '<script type="text/javascript">alert("successfully changed")</script>';
header("location:rtps.html");
 }   
    else{
	echo '<script type="text/javascript">alert("not changed")</script>';
     }         
}  
else{
	echo '<script type="text/javascript">alert("confirm password and new password are not same")</script>';
}
    
}
else if((mysqli_num_rows($query2)!=0))
{
  if(mysqli_num_rows($query3)==0&&mysqli_num_rows($query4)!=0)
  {
	 echo '<script type="text/javascript">alert("entered email is wrong")</script>'; 
  }
 else if(mysqli_num_rows($query3)!=0&&mysqli_num_rows($query4)==0)
  {
	 echo '<script type="text/javascript">alert("entered mobile no. is wrong")</script>'; 
  }
  else
  {
	 echo '<script type="text/javascript">alert("entered email and mobile no. are wrong")</script>'; 
  } 
}
else{
	echo '<script type="text/javascript">alert("Username is not present")</script>';
}
    
}
?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<h1>Reset password</h1>
		<input type="text" name="username" placeholder="username"><br><br>
		<input type="text" name="email"  placeholder="email address">
		<input type="text" name="mobile"  placeholder="mobile no.">
		<input type="password" name="npassword" placeholder="create password"><br><br>
		<input type="password" name="cpassword" placeholder="confirm password"><br><br><br>
		<input id="submit" type="submit" name="submit" value="Reset">
       
	</form>

</body>
</html>