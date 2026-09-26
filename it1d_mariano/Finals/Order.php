<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="order.css">
<style>
  .navbar-brand{
    font-family: 'Pacifico', cursive;
	}
	body {
  background-image: url('img/bg1.jpg');   /* path to your image */
  background-repeat: no-repeat;          /* prevent tiling */
  background-size: cover;                /* fill the screen */
  background-position: center;           /* keep centered */
    }


    .dropdown-menu .dropdown-item {
        color: #fff;
    }

    /* Hover effect */
    .dropdown-menu .dropdown-item:hover {
        background-color: #ffc107; 
        color: #000;
    }

    .footer-icons a:hover {
        color: #000; /* turns black on hover */
    }
</style>
    
</head>
<body>
<!--====================================================================================NAVBAR============================================================================================-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning ">
            <div class="container-fluid ">
                <img src="img/Plogo.png" alt="Logo" width="200" height="90" class="d-inline-block align-text-top">

                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5 " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active fw-bold" aria-current="page" href="home.php"><i class="bi bi-house-door-fill"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-dark " href="menu.php"><i class="bi bi-journal-text"></i> Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="menu.php?id=#order" class="nav-link fw-bold text-decoration-none text-dark">
                                <i class="bi bi-cart-fill"></i> Order </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tool
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-white" href="menu.php?id=#order">Order</a></li>
                                <li><a class="dropdown-item text-white" href="home.php?id=#feedback">Feedback</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-white" href="admin/Login.php">Admin</a></li>
                            </ul>
						</li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger me-5" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    
 
    <div class="container my-5" id="order">
        <div class="col-md-6 mx-auto rounded-4 bg-dark text-white p-4 shadow">
            <h2 class="text-center text-warning mb-4">Place Your Order</h2>
            <form id="orderForm" method="POST" action="admin/order_action.php">

                <!-- Customer Name -->
                <div class="mb-3">
                    <label for="customerName" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter your name">
                </div>

                <!-- Customer Email -->
                <div class="mb-3">
                    <label for="customerEmail" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="customerEmail" name="customerEmail" placeholder="Enter your email">
                </div>

                <!-- Pizza Selection -->
                <div class="mb-3">
                    <label for="pizzaType" class="form-label fw-bold">Select Pizza</label>
                    <select class="form-select" id="pizzaType" name="pizzaType">
                        <option selected disabled>Choose your item</option>
                        <?php
                       
                        $sql = "SELECT id, ITEMS, PRICE, STATUS FROM tb_items WHERE STATUS='Available'";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['id']."'>".$row['ITEMS']." - ₱".$row['PRICE']."</option>";
                        }
                        ?>
                    </select>

                </div>

                <!-- Quantity -->
                <div class="mb-3">
                    <label for="quantity" class="form-label fw-bold">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1">
                </div>

                <!-- Special Instructions -->
                <div class="mb-3">
                    <label for="instructions" class="form-label fw-bold">Special Instructions</label>
                    <textarea class="form-control" id="instructions" name="instructions" rows="3" placeholder="Add extra cheese, no onions, etc."></textarea>
                </div>

                <!-- Terms -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms">
                    <label class="form-check-label" for="terms">
                        I agree to the Terms and Conditions
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-warning fw-bold px-4">Order Now</button>
                </div>
            </form>
        </div>
    </div>

<!--====================================================================================FOOTER============================================================================================-->        


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



          


    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>