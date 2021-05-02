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
	$sql = "SELECT email, pincode, treatment FROM appointmentrequests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	echo "<body bgcolor='#54640b'><p><form action='REQUEST.php' method='post'><input type='checkbox' name='status' value='$row[pincode]'>EMAIL ".$row["email"]." PINCODE ".$row["pincode"]." TREATMENT ".$row["treatment"]."<input type='submit' value='ACCEPT'></form><br></p></body>";
	}
	}
    else {
	    echo "NO REQUESTS";
	}
$conn->close();
?>
</body>
</html>