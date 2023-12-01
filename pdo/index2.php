<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PGO Example</title>
</head>
<body>

    <h1>PDO</h1>
    <p>Låt oss testa CRUD med PDO!</p>

    <ul>
        <li><a href="create.php">Create</a></li>
        <li><a href="read.php">Read</a></li>
        <!-- <li><a href="update.php">Update</a></li> -->
        <form action="update.php" method="get">
            <label>Update - </label>
            <input name="param" type="number" value="1">
            <input type="submit">
        </form>
        <!-- <li><a href="delete.php">Delete</a></li> -->
        <form action="delete.php" method="get">
            <label>Delete - </label>
            <input name="param" type="number" value="1">
            <input type="submit">
        </form>
        
    </ul>
    
</body>
</html>