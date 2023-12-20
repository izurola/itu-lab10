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
        <label for="searchQuery">ID хайх :</label>
        <input type="number" id="searchQuery" name="id">
        <input type="submit" value="Search">
    </form>
    <br><br>

    

    <?php
    // $sql = "SELECT id, name FROM datas";
    // $result = $conn->query($sql);
    
    // $sql = "SELECT id, name FROM data_1";
    // $result = $conn->query($sql);
    
    // if($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "ID: ".$row["id"]." - Name: ".$row["name"]."<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    ?>

</body>

</html>