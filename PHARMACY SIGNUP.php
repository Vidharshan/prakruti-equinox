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
$name = $_POST['name'];
$pass = $_POST['password'];
$number = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$department = $_POST['department'];
$city = $_POST['district'];
$sql = "INSERT INTO pharmacysignup (name, password, number, email, address, pincode, department, city)
VALUES ('$name', '$pass', '$number', '$email', '$address', $pincode, '$department', '$city')";

if ($conn->query($sql) === TRUE) {
  echo "<body bgcolor='#54640B'><p style='text-align:center;'>YOU HAVE SUCCESSFULLY REGISTERED.<br/><a href='LOGIN.html'>CLICK HERE TO LOGIN</a></p></body>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>