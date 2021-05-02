<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "equinox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
	$sql = "SELECT status FROM appointmentrequests WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	   echo "<body bgcolor='#54640b'><p style='color:#FCD5B5;'>".$row["status"]."<br><a href='GOOGLE MEET.html'>CLICK HERE FOR MEET LINK ONCE REQUEST IS ACCEPTED</a></p></body>";
	   if($row["status"]=="accepted") {
		   echo "<body bgcolor='#54640B'><p><a href='GOOGLE MEET.html'>CLICK HERE FOR MEET</a></p></body>";
	}   }
	}
$conn->close();
?>
</body>
</html>