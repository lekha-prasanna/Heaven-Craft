<?php
// Step 1: Include config.php first to establish DB connection and start session
include_once 'config.php';

include_once 'check_login.php';

$pageTitle = "Home - My Website";

include_once 'header.php';
?>

        <h1>Welcome to Heaven Craft</h1>
        <div class="card">
            <p>Your journey begins here. Explore our exquisite collection of handcrafted products, made with passion and precision. We believe in quality that speaks for itself.</p>
            <p style="text-align: center; margin-top: 1rem;">
                <a href="services.php" class="button">View Products</a>
                <a href="about.php" class="button">Learn About Us</a>
            </p>
        </div>


        <!-- NEW OFFERS SECTION -->
        <h2 style="margin-top: 4rem;">Exclusive Offers Just For You!</h2>
        <div class="offer-grid">
            <div class="offer-card">
                <img src="https://via.placeholder.com/200x120/5D4037/FFFFFF?text=OFFER+1" alt="Offer 1">
                <h3>Limited Time: 20% Off All Trays!</h3>
                <p>Don't miss out on beautiful serving trays.</p>
                <a href="services.php" class="offer-button">Shop Trays</a>
            </div>
            <div class="offer-card">
                <img src="https://via.placeholder.com/200x120/A1887F/FFFFFF?text=OFFER+2" alt="Offer 2">
                <h3>Free Shipping on Orders Over Rs.100</h3>
                <p>Fill your cart and we'll cover the shipping.</p>
                <a href="services.php" class="offer-button">Start Shopping</a>
            </div>
            <div class="offer-card">
                <img src="https://via.placeholder.com/200x120/8D6B5B/FFFFFF?text=OFFER+3" alt="Offer 3">
                <h3>Buy One, Get One 50% Off Coasters</h3>
                <p>Perfect for gifts or expanding your collection.</p>
                <a href="services.php" class="offer-button">Grab Coasters</a>
            </div>
            <div class="offer-card">
                <img src="https://via.placeholder.com/200x120/4E342E/FFFFFF?text=OFFER+4" alt="Offer 4">
                <h3>New User Discount: 10% Off Your First Order!</h3>
                <p>Welcome to our family, enjoy a special treat.</p>
                <a href="register.php" class="offer-button">Register Now</a>
            </div>
            <div class="offer-card">
                <img src="https://via.placeholder.com/200x120/6D4C41/FFFFFF?text=OFFER+5" alt="Offer 5">
                <h3>Seasonal Sale: Up to 30% Off Selected Items</h3>
                <p>Find incredible deals on your favorites.</p>
                <a href="services.php" class="offer-button">Explore Sale</a>
            </div>
        </div>

<?php include_once 'footer.php'; ?>