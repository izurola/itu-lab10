<!DOCTYPE html>
<html>

<head>
    <title>Search Data</title>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'datas';
    $conn = mysqli_connect($servername, $username, $password, $db);
    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    ?>
</head>

<body>
    <label for="Search">Хайх утга:</label>
    <input type="text" id="searchQuery" name="query">
    <button onclick="searchData()">Search</button>
    <div id="result"></div>
    <script src="scripts.js"></script>
    <div id="result"></div>
</body>
<?php
$sql = "SELECT * FROM data_1";
$result = $conn->query($sql);

$data1 = array();

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data1[] = $row;
    }
} else {
    echo "No data found in data_1 table";
}

$conn->close();
?>

</html>