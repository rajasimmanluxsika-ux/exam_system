<?php
session_start();
$conn = new mysqli("localhost", "root", "", "exam_system");
$table = $_GET['table'];
$col = $_GET['col'];
$id = $_GET['id'];

$data = $conn->query("SELECT * FROM `$table` WHERE `$col`='$id'")->fetch_assoc();
?>
<h2>Edit: <?php echo $table; ?></h2>
<form method="post" action="update.php">
<input type="hidden" name="table" value="<?php echo $table; ?>">
<input type="hidden" name="col" value="<?php echo $col; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<?php
foreach($data as $key=>$val){
    echo "$key: <input type='text' name='$key' value='$val'><br><br>";
}
?>
<input type="submit" value="Update">
</form>