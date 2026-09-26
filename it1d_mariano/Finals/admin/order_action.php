<?php
    $conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customerName'];
    $email = $_POST['customerEmail'];
    $pizza = $_POST['pizzaType'];
    $qty = $_POST['quantity'];
    $instructions = $_POST['instructions'];

    $sql = "INSERT INTO tb_orders (customer_name, customer_email, pizza_type, quantity, instructions)
            VALUES ('$name', '$email', '$pizza', '$qty', '$instructions')";

    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
        header("Location: ../home.php"); // redirect back to dashboard
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customerName'];
    $email = $_POST['customerEmail'];
    $item_id = $_POST['pizzaType']; // this is the item id
    $qty = $_POST['quantity'];
    $instructions = $_POST['instructions'];

    // Get item price
    $itemQuery = mysqli_query($conn, "SELECT PRICE FROM tb_items WHERE id='$item_id'");
    $itemData = mysqli_fetch_assoc($itemQuery);
    $price = $itemData['PRICE'] * $qty;

    $sql = "INSERT INTO tb_orders (customer_name, customer_email, item_id, quantity, instructions, total_price, status)
            VALUES ('$name', '$email', '$item_id', '$qty', '$instructions', '$price', 'Pending')";

    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
        header("Location: ../home.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


