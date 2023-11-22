<?php
header('Content-Type: application/json');
session_start();
if (isset($_SESSION['myData'])) {
    $data = $_SESSION['myData'];
}
if (isset($_GET['query'])) {
    $utga = $_GET['query'];
    $temp = null;
    foreach ($data as $record) {
        if ($record['Ахуйн зүйл'] === $utga) {
            $temp = $record;
            break;
        }
    }
    if ($temp !== null) {
        print_r($temp);
    }else{
        echo json_encode(array('error' => 'utga baihgui baina'));
    }
} else {
    echo json_encode(array('error' => 'utga oruulna uu'));
}
?>