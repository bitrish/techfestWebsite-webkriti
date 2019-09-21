<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<link rel="icon" href="eventic.png">
	<link rel="stylesheet" type="text/css" href="event.css">
</head>
<body>
	<?php
	if(isset($_POST['megro']))
	{
      session_start();
      if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "UPDATE events SET megro=1 WHERE Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
}

	}
	else
		{echo '<script type="text/javascript">alert("not Logined")</script>';}
}

	else if(isset($_POST['ida']))
	{
		session_start();
		if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "UPDATE events SET ida=1 WHERE Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
	}
	
}
else
	{	echo '<script type="text/javascript">alert("not Logined")</script>';
	}
}
	else if(isset($_POST['hac']))
	{
		session_start();
		if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "UPDATE events SET hac=1 WHERE Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
	}
	}
	else
		{echo '<script type="text/javascript">alert("not Logined")</script>';}
	}
	else if(isset($_POST['pro']))
	{
		session_start();
		if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "UPDATE events SET pro=1 WHERE Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
}
	}
	else
		{echo '<script type="text/javascript">alert("not Logined")</script>';}
}
	else if(isset($_POST['apt']))
	{
		session_start();
if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "UPDATE events SET apt=1 WHERE Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
}
}
	else
		{echo '<script type="text/javascript">alert("not Logined")</script>';}
	}
	else if(isset($_POST['gam']))
	{
		SESSION_START();
		if($_SESSION['NAME']!=null)
      {
      $servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'register';


// Create connection
$conn = mysqli_connect($servername,$username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "update events set gam=1 where Username='{$_SESSION['NAME']}'";

if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">alert("successfully registered")</script>';
}
else{
	echo '<script type="text/javascript">alert("not registered")</script>';
	echo $_SESSION['NAME'];
}
}
	else
		{echo '<script type="text/javascript">alert("not Logined")</script>';}
	}
	?>

	<a href="http://localhost/web/homepagewk.php"><BUTTON class="ho">Home</BUTTON></a>
	<div class="megro"><h1>Mega Robo War</h1>
		<h2>Description</h2>
		<b><p>Two bots will fight against each other in the arena. Their aim will be to overpower opponents and throw them out of the arena, or drop them into the pit made in the arena. It will have fixed time duration.</p></b>
		<h2>Prizes</h2>
		<b><p>Worth ₹18k</p></b>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="submit" name="megro" value="Register" >
	</form>
</div>
<div class="ida">
	<h1>Pinnacle</h1>
	<h2>Description</h2>
	<b><p>If you have a unique idea that carves you out as a successful entrepreneur, then we welcome you to the most appreciated event of Infotsav. It provides your idea, a platform and eventually a spark just sufficient to ignite you. Pinnacle is the flagship event of Infotsav’19 which is attracting students from the best B-schools and Engineering colleges all over the country.</p></b>
	<h2>Prizes</h2>
	<b><p>Worth ₹25k</p></b>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="submit" name="ida" value="Register" >
</form>
	</div>
	<div class="hac">
	<h1>Hackathon</h1>
	<h2>Description</h2>
	<b><p>Our one of the flagship events will be Hackathon which has attracted widespread enthusiasm and huge participation in the previous years. Hackathon provides platform for coders, software programmers, developers to build and design something unconventional. Nerve wrecking problem statements and an environment full of code and logic, hackin'city will provide a platform to the participants to make a website, android app or desktop app in limited time period based on a problem related to real life.</p></b>
	<h2>Prizes</h2>
	<b><p>Worth ₹60k</p></b>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="submit" name="hac" value="Register" >
</form>
	</div>
	<div class="pro"><h1>Programming Quiz</h1>
		<h2>Description</h2>
		<b><p>This quiz will test the participants coding knowledge in various languages such as C, C++, Java, Python etc.</p></b>
		<h2>Prizes</h2>
		<b><p>Worth ₹15k</p></b>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="submit" name="pro" value="Register" >
	</form>
</div>
<div class="apt"><h1>Aptitude Quiz</h1>
		<h2>Description</h2>
		<b><p>A standardized test designed to predict an individual's ability to learn certain skills compare intelligence test. An aptitude test is an assessment that evaluates the talent/ability/potential to perform a certain task, with no prior knowledge and/or training.</p></b>
		<h2>Prizes</h2>
		<b><p>Worth ₹10k</p></b>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="submit" name="apt" value="Register" >
	</form>
</div>
<div class="gam"><h1>Counter Strike global offensive</h1>
		<h2>Description</h2>
		<b><p>Global Offensive, like prior games in the Counter-Strike series, is an objective-based, multiplayer first-person shooter. Two opposing teams, known as the Terrorists and the Counter Terrorists, compete in game modes to complete objectives, such as securing a location to plant or defuse a bomb and rescuing or guarding hostages. At the end of each round, players are rewarded based on their individual performance with in-game currency to spend on more powerful weapons in subsequent rounds. Winning rounds results in more money than losing, and completing objectives such as killing enemy players gives cash bonuses.</p></b>
		<h2>Prizes</h2>
		<b><p>Worth ₹17.5k</p></b>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="submit" name="gam" value="Register" >
	</form>
</div>

</body>
</html>