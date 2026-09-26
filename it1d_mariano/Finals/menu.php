<?php
$conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

?>

<?php
$sql = "SELECT * FROM tb_items";
$result = $conn->query($sql);
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
	<link rel="stylesheet" href="menu.css">
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
                            <a href="Order.php" class="nav-link fw-bold text-decoration-none text-dark">
                                <i class="bi bi-cart-fill"></i> Order </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tool
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-white" href="Order.php">Order</a></li>
                                <li><a class="dropdown-item text-white" href="home.php?id=#feedback">Feedback</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-white" href="admin/Login.php">Admin</a></li>
                            </ul>
						</li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger me-5 " type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    
    
       <!--==============================================CARDS=================================================-->
    <div class="container mt-5 mb-5">
        <div class="container-fluid rounded-5 rounded-top-0 bg-warning">
            <h2 class="text-center text-dark fs-1 fw-bold mb-3">MENU</h2>
        </div>
    <div class="row">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="<?php echo $row['IMAGE']; ?>" class="card-img-top" alt="IMAGE">
                <div class="card-body ">
                    <h5 class="card-title"><?php echo $row['ITEMS']; ?></h5>
                    <p class="card-text"><?php echo $row['DESCRIPTION']; ?></p>
                    <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">View more</a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
         <div class="container-fluid rounded-5 rounded-bottom-0 bg-warning">
            <h2 class="text-center text-dark fs-1 fw-bold mb-3">PIZZA HUB.com</h2>
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