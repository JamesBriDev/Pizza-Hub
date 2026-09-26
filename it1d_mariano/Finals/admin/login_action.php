<?php
session_start();

$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['user'];
$password = $_POST['password'];

// Use prepared statement for security
$stmt = $conn->prepare("SELECT * FROM tb_users WHERE user=? AND password=?");
$stmt->bind_param("ss", $user, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $_SESSION['user'] = $user;

    $_SESSION['user'] = $row["user"];
    $_SESSION['password'] = $row["password"];
    header("Location: Dashboard.php");
    exit();
} else {
    header("Location: Login.php");
    exit();
}

$stmt->close();
$conn->close();
?>




