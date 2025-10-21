<?php
include_once 'config.php'; // Only include config.php here

$pageTitle = "Login - Heaven Craft";

// If user is already logged in, redirect to home
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="cart.php">Cart (<span id="cart-count">0</span>)</a></li>
            <!-- Show login/register links when not logged in -->
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div class="container">
        <h1>Login</h1>
        <div class="card">
            <p>Please enter your credentials to log in.</p>
            <form onsubmit="handleFormSubmit(event, 'login')">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #A1887F;">
                Don't have an account? <a href="register.php">Register here</a>
            </p>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
        // Update cart count for login/register pages which don't have header.php
        document.getElementById('cart-count').textContent = JSON.parse(localStorage.getItem('cart') || '[]').reduce((sum, item) => sum + item.quantity, 0);
    </script>
</body>
</html>