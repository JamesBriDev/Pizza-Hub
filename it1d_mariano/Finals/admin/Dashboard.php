<?php
    $conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

$sql_total = "SELECT COUNT(*) AS total_items FROM tb_items";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_items = $row_total['total_items'];


$sql = "SELECT COUNT(*) AS total_orders FROM tb_orders";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql_total = "SELECT COUNT(*) AS total_view FROM tb_orders WHERE DATE(order_date) = CURDATE()";
$result_total = $conn->query($sql_total);
$row_totals = $result_total->fetch_assoc();
$total_view = $row_totals['total_view'];


$sql = "SELECT COUNT(*) AS total_feedback FROM tb_feedback";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
$total_feedback = $rows['total_feedback'];





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dash Board</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
		<link rel="stylesheet" href="home.css">
        
        <style>
            /* Sidebar link hover effect */
            .nav-item .nav-link {
                color: #fff; /* default white text */
                transition: background-color 0.3s, color 0.3s;
            }

            .nav-item .nav-link:hover {
                background-color: #ffc107; /* Bootstrap warning yellow */
                color: #000;               /* black text for contrast */
                border-radius: 5px;        /* optional: rounded corners */
            }

        </style>
    </head>
    <body>
        
        
<!--====================================================================================NAVBAR============================================================================================-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid d-flex align-items-center">
                    <img src="Plogo.png" alt="Logo" width="200" height="90" class="me-3">
                    <div>
                        <h1 class="fs-1 fw-bold text-dark mb-0">ADMIN PORTAL</h1>
                    </div>
                </div>
            </nav>
        </header>



        <div class="container-fluid">
            <div class="row">            
                <button class="btn btn-warning d-md-none my-2" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#sidebarMenu" 
                        aria-controls="sidebarMenu" 
                        aria-label="Toggle navigation">
                    <i class="bi bi-list"></i> Menu
                </button>

                <nav id="sidebarMenu" class="collapse d-md-block col-md-3 col-lg-2 bg-dark text-white sidebar p-3 min-vh-100">
                    <h4 class="fw-bold pb-2 mb-4 mt-3 border-bottom border-white text-center">PizzaHub</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <h6 class="dropdown-header text-secondary">MAIN</h6>
                            <a class="nav-link text-white border-bottom border-white mb-3" href="Dashboard.php">
                                <i class="bi bi-house-door-fill"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <h6 class="dropdown-header text-secondary">MANAGEMENT</h6>
                            <a class="nav-link text-white" href="Item_management.php"><i class="bi bi-journal-text"></i> Item Management</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="Employee.php"><i class="bi bi-person-workspace"></i> Employees</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="Contact.php"><i class="bi bi-person"></i> Accounts</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="Order_list.php"><i class="bi bi-cart-fill"></i> Orders</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="Feedback.php"><i class="bi bi-chat-dots"></i> Feedback</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link text-white" href="Login.php"><i class="bi bi-box-arrow-left"></i> Log-out</a>
                        </li>
                    </ul>
                </nav>

                <!-- Main Dashboard Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2 class="mt-4 fw-bold">Dashboard Overview</h2>

                    <!-- Counters -->
                    <div class="row mt-4">
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="card text-center bg-warning text-dark shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-basket-fill fs-1 mb-2"></i>
                                    <h5>Total Items</h5>
                                    <p class="fs-3 fw-bold"><?php echo $total_items; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="card text-center bg-success text-white shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-cart-fill fs-1 mb-2"></i>
                                    <h5>Orders</h5>
                                    <p class="fs-3 fw-bold"><?php echo $row['total_orders']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="card text-center bg-danger text-white shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-eye-fill fs-1 mb-2"></i>
                                    <h5>Ordered Today</h5>
                                    <p class="fs-3 fw-bold"><?php echo $total_view; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <div class="card text-center bg-info text-dark shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-chat-dots-fill fs-1 mb-2"></i>
                                    <h5>Feedback</h5>
                                    <p class="fs-3 fw-bold"><?php echo $total_feedback; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Items Table -->
                    <div class="card mt-4 shadow-sm">
                        <div class="card-header bg-dark text-white">Recent Items</div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pepperoni Pizza</td>
                                        <td>Cheesy delight with pepperoni</td>
                                        <td><span class="badge bg-success">Available</span></td>
                                    </tr>
                                    <tr>
                                        <td>Veggie Pizza</td>
                                        <td>Loaded with fresh vegetables</td>
                                        <td><span class="badge bg-danger">Out of Stock</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cheese Burst</td>
                                        <td>Extra cheese topping</td>
                                        <td><span class="badge bg-warning text-dark">Limited</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <footer class="footer text-center p-3 bg-warning text-dark mt-auto">
            <div class="footer-icons mb-2">
                <a href="https://www.instagram.com/offx.its_brii" class="text-dark mx-2"><i class="bi bi-instagram fs-4"></i></a>
                <a href="https://www.facebook.com/urcarelessBri" class="text-dark mx-2"><i class="bi bi-facebook fs-4"></i></a>
                <a href="https://www.tiktok.com/@bri_0001?is_from_webapp=1&sender_device=pc" class="text-dark mx-2"><i class="bi bi-tiktok fs-4"></i></a>
                <a href="https://www.youtube.com/channel/UCbacCdXfe1xg1XnikFs6wmw" class="text-dark mx-2"><i class="bi bi-youtube fs-4"></i></a>
            </div>
            <p class="mb-0">&copy; 2026 Bri. All Rights Reserved.</p>
        </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>