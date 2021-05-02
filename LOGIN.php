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
$username = $_POST['email'];
$password = $_POST['name'];
$user = $_POST['user'];
if($user=="PATIENT") {
	$sql = "SELECT password, name FROM patientsignup WHERE email='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if($row["password"]==$password) {
	   echo "<body bgcolor='#54640b'><p style='color:#FCD5B5;'>Welcome ".$row["name"]."<br><a href='PATIENT DASHBOARD.html'>CLICK HERE TO GO TO DASHBOARD</a></p></body>";
	   }
	else {
		echo "LOGIN FAILED";
	}
	}
	}
}
if($user=="DOCTOR") {
	$sql = "SELECT password, name FROM doctorsignup WHERE email='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if($row["password"]==$password) {
	   echo "<body bgcolor='#54640b'><p style='color:#FCD5B5;'>Welcome ".$row["name"]."<br><a href='DOCTOR DASHBOARD.html'>CLICK HERE TO GO TO DASHBOARD</a></p></body>";
	   }
	else {
		echo "LOGIN FAILED";
	}
	}
	}
}
if($user=="PHARMACIST") {
	$sql = "SELECT password, name FROM pharmacysignup WHERE email='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if($row["password"]==$password) {
	   echo "<body bgcolor='#54640b'><p style='color:#FCD5B5;'>Welcome ".$row["name"]."<br><a href='PHARMACY DASHBOARD.html'>CLICK HERE TO GO TO DASHBOARD</a></p></body>";
	   }
	else {
		echo "LOGIN FAILED";
	}
	}
	}
}
$conn->close();
?>
</body>
</html>