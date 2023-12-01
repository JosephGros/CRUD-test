<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h2>User Registration</h2>

    <form action="process-form.php" method="post">
        <label for="reg_username">Användarnamn:</label>
        <input type="text" id="reg_username" name="reg_username" required>

        <br>

        <label for="reg_password">Lösenord:</label>
        <input type="password" id="reg_password" name="reg_password" required>

        <br>

        <button type="submit">Registrera</button>
    </form>


</body>
</html>