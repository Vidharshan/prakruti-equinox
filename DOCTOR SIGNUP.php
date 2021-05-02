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
$gender = $_POST['gender'];
$department = $_POST['department'];
$branch = $_POST['Ayurveda'];
$qualification = $_POST['qualification'];
$pincode = $_POST['pincode'];
$sql = "INSERT INTO doctorsignup (name, password, number, email, address, gender, department, branch, qualification, pincode)
VALUES ('$name', '$pass', $number, '$email', '$address', '$gender', '$department', '$branch', '$qualification', $pincode)";

if ($conn->query($sql) === TRUE) {
  echo "<body bgcolor='#54640B'><p style='text-align:center;color:#FCD5B5;'>YOU HAVE SUCCESSFULLY REGISTERED.<br/><a href='LOGIN.html'>CLICK HERE TO LOGIN</a></p></body>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>