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
if(isset($_GET['id'])) {
    $searchId = $_GET['id'];
    $sql_data_1 = "SELECT * FROM data_1 WHERE id = $searchId";
    $result_data_1 = $conn->query($sql_data_1);

    $data = array();
    if($result_data_1->num_rows > 0) {
        while($row_data_1 = $result_data_1->fetch_assoc()) {
            $data['data_1'] = $row_data_1;
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo json_encode(array('message' => 'No results found for the provided ID'));
    }
} else {
    echo json_encode(array('message' => 'Invalid or no ID provided'));
}

// Close connection
$conn->close();
?>