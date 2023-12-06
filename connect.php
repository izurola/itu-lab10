<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'datas';
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT id, name FROM datas";
$result = $conn->query($sql);

$sql = "SELECT id, name FROM data_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
