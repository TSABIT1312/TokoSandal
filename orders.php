<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h1>Welcome to Shoe Cleaning Orders</h1>
    <p>You are logged in. Place your orders here!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
