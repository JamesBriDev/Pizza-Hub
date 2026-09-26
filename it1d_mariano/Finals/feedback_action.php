<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['Name'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $sql = "INSERT INTO tb_feedback (Name, Subject, Message) VALUES ('$Name', '$Subject', '$Message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

