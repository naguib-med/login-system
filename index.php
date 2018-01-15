<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hard-coded credentials for simplicity
    if ($username == "admin" && $password == "password") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
