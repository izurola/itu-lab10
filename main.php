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

    
</body>

</html>