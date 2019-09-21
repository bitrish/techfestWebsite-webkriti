<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="icon" href="profileic.png">
</head>
<body>
	<center><h1>Profile</h1></center>
	<div class="body">
	<?php
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
session_start();
$sql=" SELECT * FROM register WHERE Username='{$_SESSION['NAME']}'";
$result=mysqli_query($conn,$sql);
$institute=$mobile=$email=$user="";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $user=$row["Username"];
        $email=$row["Email"];
        $mobile=$row["Mobile"];
        $institute=$row["Institute"];
} 
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
<center><h2>Details</h2>
<p>Username:<?php echo $user;?></p>
<p>Mobile no:<?php echo $mobile;?></p>
<p>Email address:<?php echo $email;?></p>
<p>Institute name:<?php echo $institute;?></p></center>		
	</div>
	<div>
		<?php
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
$sql=" SELECT * FROM events WHERE Username='{$_SESSION['NAME']}'";
$result=mysqli_query($conn,$sql);
$ev1=$ev2=$ev3=$ev4=$ev5=$ev6="";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $ev1=$row["megro"];
        $ev2=$row["ida"];
        $ev3=$row["hac"];
        $ev4=$row["pro"];
        $ev5=$row["apt"];
        $ev6=$row["gam"];
} 
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
		<center>
		<h2>Registered Events</h2>
		<p><?php if($ev1==1)echo "Mega Robo War";?></p>
		<p><?php if($ev2==1)echo "Pinnacle";?></p>
		<p><?php if($ev3==1)echo "Hackathon";?></p>
		<p><?php if($ev4==1)echo "Programming Quiz";?></p>
		<p><?php if($ev5==1)echo "Aptitude Quiz";?></p>
		<p><?php if($ev6==1)echo "Counter Strike global offensive";?></p>
	</center>
</div>
<center><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<input type="submit" name="logout" value="Log Out">
</form><br>
<a href="http://localhost/web/homepagewk.php"><input type="button" value="Home"></a></center>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:homepagewk.html');
}
?>
</body>
</html>