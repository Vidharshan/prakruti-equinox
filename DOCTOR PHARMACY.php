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
$demail = $_POST['demail'];
$pemail = $_POST['pemail'];
$phemail = $_POST['phemail'];
$address = $_POST['address'];
$sql = "INSERT INTO doctorpharmacy (demail, pemail, phemail, address, status)
VALUES ('$demail', '$pemail', '$phemail', '$address', 'NOT YET DECIDED')";

if ($conn->query($sql) === TRUE) {
  echo "<body bgcolor='#54640B'><p style='text-align:center;'>YOUR ORDER HAS BEEN SENT SUCCESSFULLY.</p></body>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>