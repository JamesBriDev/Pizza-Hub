<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="home.css">
    <style>
        body{
            background-color:#050505;
            font-family:'Roboto', sans-serif;
            color:white;
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
                    <div class="col mt-4">
                        <h1 class="fs-2 fw-bold text-center">PRODUCT - ADD PRODUCTS</h1>
                    </div>
                    <div class="conatiner-fluid ">
                        <form action="add_action.php" method="POST" id="ITEMS">
                            <div class="mb-3 ">
                                <label for="ITEMS" class="form-label">Item Name</label>
                                <input type="text" class="form-control " id="ITEMS" name="ITEMS"placeholder="Input item name here....">
                                <span id="ITEMS_error" class="message text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="CATEGORY" class="form-label">Category</label>
                                <input type="text" class="form-control" id="CATEGORY" name="CATEGORY"placeholder="Input it tion here....">
                                <span id="CATEGORY_error" class="message text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="SIZE" class="form-label">Size</label>
                                <input type="text" class="form-control" id="SIZE" name="SIZE" placeholder="Input it here....">
                                <span id="SIZE_error" class="message text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="DESCRIPTION" class="form-label">Description </label>
                                <input type="text" class="form-control" id="DESCRIPTION" name="DESCRIPTION"placeholder="Input it here....">
                                <span id="DESCRIPTION_error" class="message text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="PRICE" class="form-label">Price </label>
                                <input type="text" class="form-control" id="PRICE" name="PRICE"placeholder="Input it here....">
                                <span id="PRICE_error" class="message text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="IMAGE" class="form-label">Image </label>
                                <input type="text" class="form-control" id="IMAGE" name="IMAGE"placeholder="Input it here....">
                                <span id="IMAGE_error" class="message text-danger"></span>
                            </div>

                            <div class="mb-3">
                                <label for="STATUS" class="form-label">Status </label>
                                <input type="text" class="form-control" id="STATUS" name="STATUS"placeholder="Input it here....">
                                <span id="STATUS_error" class="message text-danger"></span>
                            </div>
                            <a class="btn btn-secondary" href="Item_management.php">Cancel</a>  <input type="submit" class="btn btn-success" />
                        </form>
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
    


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>
