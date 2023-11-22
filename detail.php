<?php
header('Content-Type: application/json');
session_start();
if (isset($_SESSION['myData'])) {
    $data = $_SESSION['myData'];
}
if (isset($_GET['ind'])) {
    $ind = $_GET['ind'];
    if ($data[$ind] !== null) {
        print_r($data[$ind]);
    } else {
        echo json_encode(array('error' => 'utga baihgui baina'));
    }
} else {
    echo json_encode(array('error' => 'utga oruulna uu'));
}
?>