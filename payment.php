<?php
include_once 'config.php';
include_once 'check_login.php'; ?>

<?php include_once 'header.php'; ?>

        <h1>Payment Options</h1>
        <div class="card">
            <h2>Total: Rs.<span id="payment-total">0.00</span></h2>
            <form onsubmit="handlePaymentSubmit(event)">
                <div class="payment-option">
                    <input type="radio" name="payment" value="cod" id="cod" required>
                    <label for="cod">Cash on Delivery</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment" value="card" id="card">
                    <label for="card">Credit/Debit Card</label>
                    <input type="text" placeholder="Card Number" id="card-number" style="display:none;" pattern="[0-9]{13,16}" title="Card number must be 13-16 digits">
                    <input type="text" placeholder="Expiry (MM/YY)" id="expiry" style="display:none;" pattern="(0[1-9]|1[0-2])\/?([0-9]{2})" title="MM/YY format, e.g., 12/25">
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment" value="upi" id="upi">
                    <label for="upi">UPI</label>
                    <input type="text" placeholder="UPI ID (e.g., username@bank)" id="upi-id" style="display:none;" pattern="[a-zA-Z0-9.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+" title="Enter a valid UPI ID">
                </div>
                <button type="submit">Complete Payment</button>
            </form>
        </div>

<?php include_once 'footer.php'; ?>
<script>
    // Toggle payment fields - moved from inline script
    document.querySelectorAll('input[name="payment"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const cardFields = document.querySelectorAll('#card-number, #expiry');
            const upiField = document.getElementById('upi-id');
            if (this.value === 'card') {
                cardFields.forEach(field => field.style.display = 'block');
                upiField.style.display = 'none';
                // Add required attribute for card fields
                document.getElementById('card-number').setAttribute('required', 'required');
                document.getElementById('expiry').setAttribute('required', 'required');
                upiField.removeAttribute('required');
            } else if (this.value === 'upi') {
                upiField.style.display = 'block';
                cardFields.forEach(field => field.style.display = 'none');
                // Add required attribute for UPI field
                upiField.setAttribute('required', 'required');
                document.getElementById('card-number').removeAttribute('required');
                document.getElementById('expiry').removeAttribute('required');
            } else { // COD
                cardFields.forEach(field => field.style.display = 'none');
                upiField.style.display = 'none';
                // Remove required attribute for all optional fields
                document.getElementById('card-number').removeAttribute('required');
                document.getElementById('expiry').removeAttribute('required');
                upiField.removeAttribute('required');
            }
        });
    });
</script>