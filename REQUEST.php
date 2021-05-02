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
$pincode = $_POST['status'];
$sql = "UPDATE appointmentrequests SET status='ACCEPTED' WHERE pincode=$pincode";

if ($conn->query($sql) === TRUE) {
  echo "APPOINTMENT ACCEPTED";
  echo "<body><p style='color:#FCD5B5;'><a href='GOOGLE MEET.html'>CLICK HERE FOR THE MEET LINK</a></p></body>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
