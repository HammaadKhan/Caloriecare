<?php

include 'db.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $deleteQuery = "DELETE FROM tasks WHERE id=$id";
    $conn->query($deleteQuery);

    header("Location: index.php");
    exit();
}
