<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

$sql = "SELECT COUNT(*) AS total_employees FROM tb_employee";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
$total_employees = $rows['total_employees'];
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
                   <div class="card mt-4 mb-5 shadow-sm bg-dark h5 rounded-pill">
                        <h5 class="mb-0 mt-3 text-center text-white fs-1 fw-bold">EMPLOYEE'S LIST</h5>
                        <form action="" method="GET" class="row align-items-center" class="row g-2 mb-5">
                            <div class="col-12 col-md-auto">
                                <label for="searchInput" class="fw-bold text-white mb-4">Type Item to Search:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="searchInput" name="q" placeholder="Search items..." class="form-control mb-3  w-70">
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-3">
                                <div class="card text-center bg-warning text-dark shadow-sm h5 rounded-pill">
                                    <div class="card-body">
                                        <i class="bi bi-basket-fill fs-1 mb-2"></i>
                                        <h5>Total Items</h5>
                                        <p class="fs-3 fw-bold"><?php echo $total_employees; ?></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                <?php
                $sql = "SELECT * FROM tb_employee";
                $result = $conn->query($sql);
                ?>


                <div class="table-responsive bg-dark">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 bg-dark" tabindex="0"style="max-height:600px;
                    overflow-y:auto;"> <!-- 👈 Add height + scroll -->

                        <table class="table table-bordered table-dark table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">SALARY</th>
                                    <th scope="col">POSITION</th>
                                    <th scope="col">ADDRESS</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td id="simple-list-item-1"><?php echo $row['ID']; ?></td>
                                    <td id="simple-list-item-2"><?php echo $row['NAME']; ?></td>
                                    <td id="simple-list-item-3">Php <?php echo $row['SALARY']; ?></td>
                                    <td id="simple-list-item-4"><?php echo $row['POSITION']; ?></td>
                                    <td id="simple-list-item-5"><?php echo $row['ADDRESS']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                </div>
            </main>       
    </div>
    </div>

    <footer class="footer text-center p-3 bg-warning text-dark mt-auto">
        <div class="footer-icons mb-2">
            <a href="https://www.instagram.com/offx.its_brii" class="text-dark mx-2">
                <i class="bi bi-instagram fs-4"></i>
            </a>
            <a href="https://www.facebook.com/urcarelessBri" class="text-dark mx-2">
                <i class="bi bi-facebook fs-4"></i>
            </a>
            <a href="https://www.tiktok.com/@bri_0001?is_from_webapp=1&sender_device=pc" class="text-dark mx-2">
                <i class="bi bi-tiktok fs-4"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCbacCdXfe1xg1XnikFs6wmw" class="text-dark mx-2">
                <i class="bi bi-youtube fs-4"></i>
            </a>
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
