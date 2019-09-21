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
$username="rishabh";
$sql=" SELECT * FROM register WHERE Username='rishabh'";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "username: " . $row["Username"]. " - password: " . $row["Password"]. " " . $row["Mobile"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<?php
  session_start();
  echo "hello". $_SESSION['NAME'];
  ?>


/*body{
  background-image: url();
  background-size: cover;
  background-repeat: no-repeat;
}
.ho{
  background-color: red;
  color:white;
  border-radius: 8px;
  height: 40px;
  width:100px;
  margin-left: 45%;
}
.megro{
  background-image: url(megrobac.jpg);
  height: 380px;

}
.megro h1{
  padding-left: 40%;
  font-size: 40px;
}
p{
  font-size: 25px;
  color:white;
}
h2{
  font-size: 30px;
}
input{
  background-color: black;
  color:white;
  border-radius: 8px;
  height: 40px;
  width:100px;
  margin-left: 45%;
}
.ida{
  background-image: url(ida.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  
}
.ida h1{
  padding-left: 43%;
  font-size: 40px;
}
.ida p{
  color: rgb(255, 247, 30);
}
.ida h2{
  color: white;
}
.hac{
  background-image: url(hac.png);
  background-size: cover;
  background-repeat: no-repeat;
}
.hac h1,.gam h1{
  padding-left: 43%;
  font-size: 40px;
  color:white;
}
.hac h2,.gam h2{
  color: white;
}
.pro{
  background-image: url(pro.png);
  background-size: cover;
  background-repeat: no-repeat;
}
.pro h1{
  padding-left: 40%;
  font-size: 40px;
  color: black;
}
.hac input,.pro input,.apt input,.gam input{
  background-color: red;
}
.pro p{
  color: black;
}
.apt{
  background-image: url(apt.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
.apt h1{
  padding-left: 40%;
  font-size: 40px;
  color: rgb(251, 255, 33);
}
div{
  margin:50px;
}
.gam{
  background-image: url(gam.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  
}
.gam h1{
  padding-left: 33%;
  font-size: 40px;
  color:white;
}
*/