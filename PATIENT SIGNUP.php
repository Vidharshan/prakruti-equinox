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
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$sql = "INSERT INTO patientsignup (name, password, email, address, gender, age)
VALUES ('$name', '$pass', '$email', '$address', '$gender', '$age')";
if ($conn->query($sql) === TRUE) {
  echo "<body bgcolor='#54640B'><p style='text-align:center;color:#FCD5B5;'>YOU HAVE SUCCESSFULLY REGISTERED.<br/><a href='LOGIN.html'>CLICK HERE TO LOGIN</a></p></body>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>