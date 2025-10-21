<?php
include_once 'config.php';
include_once 'check_login.php'; ?>

<?php include_once 'header.php'; ?>

        <h1>Checkout</h1>
        <a href="cart.php" style="display: inline-block; margin-bottom: 1rem; color: #8D6B5B;">← Back to Cart</a>
        <div class="card">
            <h2>Order Summary</h2>
            <div id="order-summary" class="card" style="background: #FFF8E1; padding: 1rem; border-radius: 5px; margin-bottom: 1rem; border: 1px solid #D7CCC8;">
                <p>Items: <span id="checkout-item-count">0</span> | Total: Rs.<span id="checkout-total">0.00</span></p>
            </div>
            <h2>Shipping Details (Optional but Recommended)</h2>
            <form onsubmit="handleCheckoutSubmit(event)">
                <input type="text" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($_SESSION['username']); ?>">
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="address" placeholder="Address">
                <input type="text" name="city" placeholder="City">
                <input type="text" name="zip" placeholder="ZIP Code">
                <button type="submit">Proceed to Payment</button>
            </form>
            <p style="text-align: center; font-size: 0.9rem; color: #A1887F; margin-top: 1rem;">
                We'll use default shipping if details are not provided. Email is required for order confirmation.
            </p>
        </div>

<?php include_once 'footer.php'; ?>