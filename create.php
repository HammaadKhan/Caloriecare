<?php
include 'index.php';
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    $insertQuery = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    $conn->query($insertQuery);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Add Task</title>
</head>

<body>
    <h2>Add Task</h2>
    <form method="post" action="create.php">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <button type="submit">Add Task</button>
    </form>
    <a href="index.php">Back to Tasks</a>
</body>

</html>
