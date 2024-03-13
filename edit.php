<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $updateQuery = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
    $conn->query($updateQuery);

    header("Location: index.php");
    exit();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $conn->query("SELECT * FROM tasks WHERE id=$id");
    $task = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Task</title>
</head>

<!-- <body>
    <h2>Edit Task</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
        <label for="description">Description:</label>
        <textarea name="description"><?php echo $task['description']; ?></textarea>
        <button type="submit">Update Task</button>
    </form>
    <a href="index.php">Back to Tasks</a>
</body> -->

</html>
