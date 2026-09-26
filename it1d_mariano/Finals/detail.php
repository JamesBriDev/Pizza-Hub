<?php
    $conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Page-2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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
                                <li><a class="dropdown-item text-white" href="#feedback">Feedback</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-white" href="admin/Login.php">Admin</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger me-5 rounded-pill" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid p-0">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM tb_items WHERE id =".$id;
            $result = $conn->query($sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>     
            <!-- Banner Image -->
            <div class="text-center">
                <img src="<?php echo $row['IMAGE']; ?>" class="img-fluid w-100" style="height:400px; object-fit:cover;" alt="Banner">
            </div>

            <div class="container mt-4 text-white">
                <h1><?php echo $row['ITEMS']; ?></h1>
                <p class="lead text-center "><?php echo $row['DESCRIPTION']; ?></p>
                
            </div>
            <?php
                    break;
                }
            } else {
                echo "No product found!";
            }
            ?>
        </div>
        
        
        
        <!--====================================================================================FOOTER============================================================================================-->        
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1">
    <!-- Your page content here -->
  </main>

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


        
       
    </body>
</html>

