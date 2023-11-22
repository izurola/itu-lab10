<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $data = array(
        array("Name", "Age", "Email"),
        array("John Doe", 30, "john@example.com"),
        array("Jane Smith", 25, "jane@example.com"),
        array("Bob Johnson", 40, "bob@example.com")
    );

    echo '<table class="custom-table">';
    echo '<tr>';
    foreach ($data[0] as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr>';

    for ($i = 1; $i < count($data); $i++) {
        echo '<tr>';
        foreach ($data[$i] as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>