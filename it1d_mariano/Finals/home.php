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
		<link rel="stylesheet" href="home.css">
        
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
                        <button class="btn btn-danger me-5 rounded" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    
<!--====================================================================================CAROUSEL============================================================================================-->
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
           
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/1st.png" class="d-block w-100" alt="carousel">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <a class="btn btn-danger btn-lg fs-5" href="Order.php">Order Now</a>
                        <p class="text-center">Order Now! Feel and Taste that Pizza Here at Pizza Hub.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/sec.png" class="d-block w-100" alt="2nd "style="height:90%">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <a class="btn btn-danger btn-lg fs-5" href="Order.php">Order Now</a>
                        <p class="text-center">Order Now! Feel and Taste that Pizza Here at Pizza Hub.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/3rd.png" class="d-block w-100" alt="3rd">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <a class="btn btn-danger btn-lg fs-5" href="Order.php">Order Now</a>
                        <p class="text-center">Order Now! Feel and Taste that Pizza Here at Pizza Hub.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<!--====================================================================================BOX============================================================================================-->



<!--====================================================================================CARDS============================================================================================-->
        <div class=" p-0 rounded-5 rounded-top-0 bg-warning">
            <h2 class="text-center text-dark fs-1 fw-bold mb-3">!OUR BEST SELLERS !</h2>
        </div>
        <div class="container d-flex justify-content-center bg-transparent mt-5 mb-5">
            <div class="card bg-transparent border-0" style="width: 18rem;">
                <a href="menu.php">
                    <img src="img/1one.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <p class="card-text-decoration-none fs-2 fw-bold text-center ">Pepperoni Pizza</p>
                </div>
            </div>


            <div class="card bg-transparent border-0" style="width: 18rem;">
                <a href="menu.php">
                    <img src="img/2two.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body ">
                    <p class="card-text-decoration-none fs-2 fw-bold text-center">Hawaiian Pizza</p>
                </div>
            </div>

            <div class="card bg-transparent border-0" style="width: 18rem;">
                <a href="menu.php">
                    <img src="img/3tree.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body mb-5">
                    <p class="card-text-decoration-none fs-2 fw-bold text-center">Supreme Pizza</p>
                </div>
            </div>

            <div class="card bg-transparent border-0" style="width: 18rem;">
                <a href="menu.php">
                    <img src="img/4our.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body mb-5">
                    <p class="card-text-decoration-none fs-2 fw-bold text-center">Cheese Pizza</p>
                </div>
            </div>
        </div>

        <div class="container-fluid rounded-5 rounded-bottom-0 bg-warning mb-0">
            <h2 class="text-center text-dark fs-1 fw-bold">🍕 “Need a pizza? Head to PizzaHub — eat, enjoy, repeat!”</h2>
        </div>
<!--====================================================================================VIDEO============================================================================================-->
        <div class="container my-5">
            <div class="row align-items-center">

                <!-- Video on the left -->
                <div class="col-md-6">
                    <video id="orderVideo" src="img/ORDER NOW.mp4" 
                           class="object-fit-contain border rounded w-100" autoplay muted loop>
                    </video>
                </div>

                <!-- Text on the right -->
                <div class="col-md-6 text-white bg-dark rounded-4 p-4">
                    <h2 class="text-warning fw-bold">Order Now at PizzaHub</h2>
                    <p>
                        Craving hot, cheesy pizza? At PizzaHub, ordering is quick and easy. 
                        Choose your favorite flavor, customize your toppings, and enjoy fast delivery 
                        straight to your door. Click play to see how simple it is!
                    </p>
                    <a href="Order.php" class="btn btn-warning fw-bold">Start Your Order</a>
                </div>

            </div>
        </div>



<!--====================================================================================CONTACTS============================================================================================-->        
<?php
$sql = "SELECT * FROM tb_feedback";
$result = $conn->query($sql);
?>
        <div class="container border border-black rounded-5 w-100 mt-5 mb-5" style="background-color:#FFCD1A;">
            <h2 class="text-center mb-4 fs-1 fw-bold">Contact Us</h2>
            <div class="row d-flex justify-content-center">
                <!-- Contact Form -->
                <div class="col-md-6 rounded-5 bg-dark mb-5 text-white p-4" style="max-width: 500px;">
                    <form id="feedback" action="feedback_action.php" method="POST">
                <div class="mb-3 text-center">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control mx-auto" style="max-width: 300px;" id="Name" name="Name" required>
                </div>
                <div class="mb-3 text-center">
                    <label for="Subject" class="form-label">Subject</label>
                    <input type="text" class="form-control mx-auto" style="max-width: 300px;" id="Subject" name="Subject" required>
                </div>
                <div class="mb-3 text-center">
                    <label for="Message" class="form-label">Message</label>
                    <textarea class="form-control mx-auto" style="max-width: 300px;" id="Message" name="Message" rows="5" required></textarea>
                </div>
                <div class="form-check mb-3 text-center">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">I agree to the Terms and Conditions</label>
                </div>
                <button type="submit" class="btn btn-warning w-100 fw-bold">
                    <i class="bi bi-chat-dots-fill me-2"></i> Send Message
                </button>
            </form>

                </div>
                <!-- Map + Address -->
                <div class="col-md-6">
                    <div class="ratio ratio-4x3 mb-3">
                        <iframe src="https://maps.google.com/maps?hl=en&q=tunasan%20tiosejo%20subdivision%20proverbs%20st%20block%203%20lot%2040&t=&z=14&ie=UTF8&iwloc=B&output=embed" 
                                style="border:0;" allowfullscreen="" loading="lazy"class="rounded-5"></iframe>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col-md-6">
                            <h4 class="fw-bold">Address</h4>
                            <p class="mb-2 text-dark">
                                Proverbs St. Block 3 Lot 40<br>
                                Tiosejo Subdivision<br>
                                Tunasan, Muntinlupa
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-bold">Telephone</h4>
                            <p class="mb-2">
                                <a href="tel:09127753406" class="text-dark text-decoration-none fw-semibold">
                                    <i class="bi bi-telephone-fill me-2"></i> 0912-775-3406
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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