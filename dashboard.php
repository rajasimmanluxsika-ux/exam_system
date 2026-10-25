<?php
session_start();
include 'db.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard - Whole Database</title>
<style>
table { border-collapse: collapse; margin-bottom:30px; }
th, td { border:1px solid black; padding:8px; }
th { background:#eee; }
h2 { color:blue; margin-top:40px; }
</style>
</head>
<body>
<h1>Welcome Admin! Full Database View</h1>
<a href="logout.php">Logout</a>
<hr>

<?php
// Get all tables in exam_system
$tables = $conn->query("SHOW TABLES");
while($table = $tables->fetch_array()){
    $tableName = $table[0];
    echo "<h2>Table: $tableName</h2>";
    
    $data = $conn->query("SELECT * FROM `$tableName`");
    
    if($data->num_rows > 0){
        echo "<table><tr>";
        // Show column names
        $fields = $data->fetch_fields();
        foreach($fields as $field){
            echo "<th>{$field->name}</th>";
        }
        echo "</tr>";
        
        // Show rows
        while($row = $data->fetch_assoc()){
            echo "<tr>";
            foreach($row as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p><i>Table is empty</i></p>";
    }
}
?>

</body>
</html>