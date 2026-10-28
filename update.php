<?php
$conn = new mysqli("localhost", "root", "", "exam_system");
$table = $_POST['table'];
$col = $_POST['col'];
$id = $_POST['id'];

$set = "";
foreach($_POST as $k=>$v){
    if($k!="table" && $k!="col" && $k!="id"){
        $set .= "`$k`='$v', ";
    }
}
$set = rtrim($set, ", ");

$sql = "UPDATE `$table` SET $set WHERE `$col`='$id'";
if($conn->query($sql)){
    header("Location: dashboard.php");
} else {
    echo "Error: " . $conn->error;
}
?>