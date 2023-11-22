<?php
session_start();
$data = array(
    array("Ахуйн зүйл" => "Ширээ", "Үнэ" => 400000, "Жин" => 5, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Сандал", "Үнэ" => 250000, "Жин" => 2, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Хаалга", "Үнэ" => 400000, "Жин" => 10, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Хөргөгч", "Үнэ" => 1200000, "Жин" => 10, "Материал" => "Төмөр"),
    array("Ахуйн зүйл" => "Угаалгын машин", "Үнэ" => 1500000, "Жин" => 10, "Материал" => "Төмөр"),
    array("Ахуйн зүйл" => "Номын тавиур", "Үнэ" => 200000, "Жин" => 5, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Аяга", "Үнэ" => 15000, "Жин" => 0, 1, "Материал" => "Шаазан"),
    array("Ахуйн зүйл" => "Таваг", "Үнэ" => 15000, "Жин" => 0, 1, "Материал" => "Шаазан"),
    array("Ахуйн зүйл" => "Халбага", "Үнэ" => 15000, "Жин" => 0, 1, "Материал" => "Хөнгөн цагаан"),
    array("Ахуйн зүйл" => "Ор", "Үнэ" => 150000, "Жин" => 3, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Зурагт", "Үнэ" => 3000000, "Жин" => 2, "Материал" => "Төмөр"),
    array("Ахуйн зүйл" => "Тоос сорогч", "Үнэ" => 500000, "Жин" => 3, "Материал" => "Төмөр"),
    array("Ахуйн зүйл" => "Хувцасны шүүгээ", "Үнэ" => 500000, "Жин" => 10, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Гуталны Шүүгээ", "Үнэ" => 15000, "Жин" => 4, "Материал" => "Мод"),
    array("Ахуйн зүйл" => "Толь", "Үнэ" => 100000, "Жин" => 0, 5, "Материал" => "Шил"),
    array("Ахуйн зүйл" => "Халбага", "Үнэ" => 15000, "Жин" => 0, 1, "Материал" => "Хөнгөн цагаан")
);
$_SESSION['myData'] = $data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <form action="searchdata.php" method="GET">
        <label for="searchQuery">Нэрээр хайх :</label>
        <input type="text" id="searchQuery" name="query">
        <input type="submit" value="Search">
    </form>
    <br><br>

    <form action="detail.php" method="GET">
        <label for="searchQuery">Дарааллаар хайх :</label>
        <input type="number" id="searchQuery" name="ind">
        <input type="submit" value="Search">
    </form>
    <br><br>
    
    <?php
    $table1 = array();
    foreach ($data as $record) {
        $table1[] = array("Ахуйн зүйл" => $record["Ахуйн зүйл"], "Үнэ" => $record["Үнэ"]);
    }

    $table2 = array();
    foreach ($data as $record) {
        $table2[] = array("Ахуйн зүйл" => $record["Ахуйн зүйл"], "Жин" => $record["Жин"]);
    }

    $table3 = array();
    foreach ($data as $record) {
        $table3[] = array("Ахуйн зүйл" => $record["Ахуйн зүйл"], "Материал" => $record["Материал"]);
    }

    echo '<table class="custom-table">';
    echo "<tr><th>Ахуйн эд зүйл</th><th>Үнэ</th></tr>";
    foreach ($table1 as $row) {
        echo "<tr>";
        echo "<td>" . $row['Ахуйн зүйл'] . "</td>";
        echo "<td>" . $row['Үнэ'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
    echo "<br><br>";

    echo '<table class="custom-table">';
    echo "<tr><th>Ахуйн эд зүйл</th><th>Жин</th></tr>";
    foreach ($table2 as $row) {
        echo "<tr>";
        echo "<td>" . $row['Ахуйн зүйл'] . "</td>";
        echo "<td>" . $row['Жин'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br>";

    echo '<table class="custom-table">';
    echo "<tr><th>Ахуйн эд зүйл</th><th>Материал</th></tr>";
    foreach ($table3 as $row) {
        echo "<tr>";
        echo "<td>" . $row['Ахуйн зүйл'] . "</td>";
        echo "<td>" . $row['Материал'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>