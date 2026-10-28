<?php
$conn = new mysqli("localhost", "root", "", "exam_system");
$table = $_GET['table'];
$col = $_GET['col'];
$id = $_GET['id'];
$conn->query("DELETE FROM `$table` WHERE `$col`='$id'");
header("Location: dashboard.php");
?>