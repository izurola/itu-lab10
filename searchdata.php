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
<?php

if(isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    $sql = "SELECT * FROM data_1 WHERE name LIKE '%$searchQuery%'";
    $result = $conn->query($sql);
    $data = array();
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        echo json_encode($data);
    } else {
        $data['message'] = "No results found";
        echo json_encode($data);
    }

} else {
    echo json_encode(array('error' => 'utga oruulna uu'));
}
?>