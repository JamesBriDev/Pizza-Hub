<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

$sql = "SELECT COUNT(*) AS total_item FROM tb_items";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
$total_item = $rows['total_item'];
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Products List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="home.css">
  <style>
    body {
      background-color: #050505;
      font-family: 'Roboto', sans-serif;
      color: white;

    }
      

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
<!-- Header -->
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
                <div class="row mb-3">
                    <div class="card mt-4 mb-5 shadow-sm bg-dark rounded">
                        <h5 class="mb-0 mt-3 text-center text-white fs-1 fw-bold">ITEMS LIST</h5>

                        <!-- Search Bar -->
                        <div class="card-body">
                            <form action="" method="GET" class="row g-3 align-items-center mb-4">
                                <div class="col-12 col-md-auto">
                                    <label for="searchInput" class="fw-bold text-white">Type Item to Search:</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="searchInput" name="q" placeholder="Search items..." class="form-control">
                                </div>
                            </form>

                            <!-- Button + Counter Row -->
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-md-6 text-center">
                                    <a href="add.php" class="btn btn-primary btn-lg rounded-pill">
                                        <i class="bi bi-plus-circle"></i> Add Item
                                    </a>

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card text-center bg-warning text-dark shadow-sm rounded-pill">
                                        <div class="card-body">
                                            <i class="bi bi-basket-fill fs-1 mb-2"></i>
                                            <h5>Total Items</h5>
                                            <p class="fs-3 fw-bold"><?php echo $total_item; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <?php
                    $sql = "SELECT * FROM tb_items";
                    $result = $conn->query($sql);
                    ?>

                    <!-- Product Table -->
                    <div class="table-responsive bg-dark rounded">
                        <div class="p-3" style="max-height:600px; overflow-y:auto;">
                            <table class="table table-bordered table-dark table-hover align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>ITEMS</th>
                                        <th>CATEGORY</th>
                                        <th>PRICE</th>
                                        <th>STATUS</th>
                                        <th>OPERATIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['ITEMS']; ?></td>
                                        <td><?php echo $row['CATEGORY']; ?></td>
                                        <td><?php echo $row['PRICE']; ?></td>
                                        <td><?php echo $row['STATUS']; ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="edit.php?ID=<?php echo $row['id']; ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="delete_action.php?ID=<?php echo $row['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </main>
                </div>
        </div>

<!-- Footer -->
<footer class="footer text-center p-3 bg-warning text-dark mt-auto">
  <div class="footer-icons mb-2">
    <a href="https://www.instagram.com/offx.its_brii" class="text-dark mx-2"><i class="bi bi-instagram fs-4"></i></a>
    <a href="https://www.facebook.com/urcarelessBri" class="text-dark mx-2"><i class="bi bi-facebook fs-4"></i></a>
    <a href="https://www.tiktok.com/@bri_0001?is_from_webapp=1&sender_device=pc" class="text-dark mx-2"><i class="bi bi-tiktok fs-4"></i></a>
    <a href="https://www.youtube.com/channel/UCbacCdXfe1xg1XnikFs6wmw" class="text-dark mx-2"><i class="bi bi-youtube fs-4"></i></a>
  </div>
  <p class="mb-0">&copy; 2026 Bri. All Rights Reserved.</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById("searchInput").addEventListener("keyup", function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("table tbody tr");

            rows.forEach(row => {
                let text = row.innerText.toLowerCase();
                row.style.display = text.includes(filter) ? "" : "none";
            });
        });
    </script>

    </body>
</html>
