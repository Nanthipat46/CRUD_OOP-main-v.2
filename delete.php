<?php
include_once 'database.php';
include_once 'person.php';

$database = new Database();
$conn = $database->getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    Person::deleteFromDatabase($conn, $id);
    header("Location: index.php");
}

$conn->close();
?>