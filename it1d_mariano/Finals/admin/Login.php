<?php 
    $conn = new mysqli("sql310.infinityfree.com", "if0_40900477", "Jan42026", "if0_40900477_db_finals");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body{
            background: conic-gradient(from 0deg at center, #fbbf24, #f59e0b, #d97706, #fbbf24);
        }
        
    </style>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

    <div class="card login-card shadow-lg col-11 col-sm-8 col-md-6 col-lg-4 border-warning">
        <div class="card-body bg-dark text-white rounded ">
            <div class="text-center mb-4">
                <div class="login-brand mb-2">
                    <span class="fs-2 fw-bold text-warning">A</span>
                </div>
                <h4 class="card-title mb-1">Hello Admin!</h4>
                <p class="text-secondary">Enter your credentials to access the dashboard.</p>
            </div>
            
            <!-- Login Form -->
            <form id="user" action="login_action.php" method="POST" autocomplete="off">
                <!-- Username -->
                <div class="mb-3">
                    <label for="user" class="form-label">Username:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username here" autocomplete="off" required />
                    </div>
                    <div class="invalid-feedback">Please enter a valid Username.</div>
                </div>
                
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" minlength="8" autocomplete="off" required />
                    </div>
                    <div class="invalid-feedback">Password must be at least 8 characters.</div>
                </div>
                
                <!-- Remember + Forgot -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none text-warning">Forgot password?</a>
                </div>
                
                <!-- Submit -->
                <button type="submit" class="btn btn-warning w-100 fw-bold">Sign In</button>
            </form>
            
            <!-- Success Message -->
            <div id="loginMessage" class="mt-3 text-center text-success" style="display: none;">
                Login successful. Redirecting...
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
