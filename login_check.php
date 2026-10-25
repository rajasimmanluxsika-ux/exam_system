<?php
include 'db.php';
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];


$sql = "SELECT * FROM `users` WHERE Id='$id' AND name= '$name' AND Email='$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<h2>Login Failed!</h2>";
    echo "You typed: ID=$id, Email=$email <br>";
    echo "Database has no matching record.<br><br>";
    echo "<a href='login.php'>Go Back</a>";
}
?>