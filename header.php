<?php
$pageTitle = $pageTitle ?? 'Heaven Craft';
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
        <div class="brand-logo">
            <a href="index.php">
                <img src="logo.png" alt="Heaven Craft Logo" class="logo-img"> <!-- Your logo image -->
                <span class="site-name">Heaven Craft</span> <!-- Your site name -->
            </a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Products</a></li>
            <li><a href="cart.php">Cart (<span id="cart-count">0</span>)</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="nav-user-info">
            Welcome, <span><?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>!</span>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a> / <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <div class="container">