<?php
include_once 'config.php';
include_once 'check_login.php'; ?>
<?php include_once 'header.php'; ?>
        <h1>Your Shopping Cart</h1>
        <div class="card">
            <div id="cart-items">
                <!-- Cart items will be loaded here by JavaScript -->
                <p style="text-align: center; color: #A1887F;">Your cart is empty. <a href="services.php">Shop now and add some products!</a></p>
            </div>
            <div style="text-align: right; margin-top: 1rem;">
                <span id="total" class="total">Total: Rs00,.00</span>
            </div>
            <button 
                id="checkout-btn" 
                onclick="window.location.href='checkout.php'" 
                disabled>
                Proceed to Checkout
            </button>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #A1887F;">
                (You are logged in as <?php echo htmlspecialchars($_SESSION['username']); ?>)
            </p>
        </div>

<?php include_once 'footer.php'; ?>