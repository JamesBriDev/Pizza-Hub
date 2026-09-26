<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "✅ Connected successfully to the database!";
}

$id = $_GET['ID'];
$sql = "DELETE FROM tb_items WHERE id=$id";
$result = $conn->query($sql);
header("Location: Item_management.php");
?>
