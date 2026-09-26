<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id    = intval($_POST['id']); // i use this instead in the vid demo coz not working in here huhu..
$ITEMS = $conn->real_escape_string($_POST['ITEMS']);
$cATEGORY    = $conn->real_escape_string($_POST['CATEGORY']);
$SIZE    = $conn->real_escape_string($_POST['SIZE']);
$DESCRIPTION    = $conn->real_escape_string($_POST['DESCRIPTION']);
$PRICE    = $conn->real_escape_string($_POST['PRICE']);
$IMAGE    = $conn->real_escape_string($_POST['IMAGE']);
$STATUS    = $conn->real_escape_string($_POST['STATUS']);



$sql = "UPDATE tb_items 
        SET ITEMS='$ITEMS', CATEGORY='$cATEGORY', SIZE='$SIZE', DESCRIPTION='$DESCRIPTION', PRICE='$PRICE' , IMAGE='$IMAGE', STATUS='$STATUS' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "✅ Record updated successfully!";
    header("Location: Item_management.php"); 
    exit();
} else {
    echo "❌ Error updating record: " . $conn->error;
}
?>


