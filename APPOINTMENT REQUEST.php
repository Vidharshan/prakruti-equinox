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
$pincode = $_POST['pincode'];
$treatment = $_POST['ayush'];
$sql = "INSERT INTO appointmentrequests (email, pincode, treatment, status)
VALUES ('$email', $pincode, '$treatment', 'YET TO BE DECIDED')";

if ($conn->query($sql) === TRUE) {
  echo "<body bgcolor='#54640b'><p>YOUR REQUEST HAS BEEN SENT SUCCESSFULLY, PLEASE WAIT FOR THE CONFIRMATION<br><a href='PATIENT DASHBOARD.html'>CLICK HERE TO GO TO DASHBOARD</a></p></body>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>