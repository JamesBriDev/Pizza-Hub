<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$ITEMS = $_POST['ITEMS'];
$CATEGORY = $_POST['CATEGORY'];
$SIZE = $_POST['SIZE'];
$DESCRIPTION = $_POST['DESCRIPTION'];
$PRICE = $_POST['PRICE'];
$IMAGE = $_POST['IMAGE'];
$STATUS = $_POST['STATUS'];
$sql = "INSERT INTO tb_items (ITEMS,CATEGORY,SIZE,DESCRIPTION,PRICE,IMAGE,STATUS) VALUES ('$ITEMS','$CATEGORY','$SIZE','$DESCRIPTION','$PRICE','$IMAGE','$STATUS')";
$result = $conn->query($sql);
header("Location: Item_management.php");
?>
