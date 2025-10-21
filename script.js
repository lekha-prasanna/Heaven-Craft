// Navigation Toggle for Mobile
const hamburger = document.querySelector('.hamburger');
const navUl = document.querySelector('nav ul');

if (hamburger && navUl) { 
    hamburger.addEventListener('click', () => {
        navUl.classList.toggle('active');
    });
}

// Cart Functionality (LocalStorage-based)
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function getTotal() {
    return cart.reduce((total, item) => total + (item.price * item.quantity), 0);
}

// === CENTRALIZED CART DISPLAY FUNCTION ===
function updateCartDisplay() {
    // 1. Update navigation cart count
    const cartCountElement = document.getElementById('cart-count');
    const totalItemsInCart = cart.reduce((sum, item) => sum + item.quantity, 0);
    if (cartCountElement) {
        cartCountElement.textContent = totalItemsInCart;
    }

    // 2. Update detailed cart items (if on cart.php)
    const cartContainer = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');
    const checkoutBtn = document.getElementById('checkout-btn');

    if (cartContainer && totalElement) { // Only run if these elements exist (i.e., on cart.php)
        if (cart.length === 0) {
            cartContainer.innerHTML = '<p style="text-align: center; color: #A1887F;">Your cart is empty. <a href="services.php">Shop now and add some products!</a></p>';
            totalElement.textContent = 'Total: Rs.0.00';
            if (checkoutBtn) { // Check if checkoutBtn exists on this page
                checkoutBtn.disabled = true;
                checkoutBtn.textContent = 'Proceed to Checkout';
            }
        } else {
            cartContainer.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <div class="cart-item-info">
                        <strong>${item.name}</strong><br>
                        <small>Price: Rs.${item.price.toFixed(2)} each</small>
                    </div>
                    <div class="quantity-controls">
                        <button onclick="updateQuantity('${item.name}', -1)">-</button>
                        <span>${item.quantity}</span>
                        <button onclick="updateQuantity('${item.name}', 1)">+</button>
                    </div>
                    <button class="remove-btn" onclick="removeFromCart('${item.name}')">Remove</button>
                    <div class="cart-item-total">
                        Rs.${(item.price * item.quantity).toFixed(2)}
                    </div>
                </div>
            `).join('');
            totalElement.textContent = `Total: Rs${getTotal().toFixed(2)}`;
            if (checkoutBtn) { // Check if checkoutBtn exists on this page
                checkoutBtn.disabled = false;
                checkoutBtn.textContent = 'Proceed to Checkout';
            }
        }
    }

    // 3. Update checkout page item count and total (if on checkout.php)
    const checkoutItemCountElement = document.getElementById('checkout-item-count');
    const checkoutTotalElement = document.getElementById('checkout-total');
    if (checkoutItemCountElement && checkoutTotalElement) {
        checkoutItemCountElement.textContent = totalItemsInCart;
        checkoutTotalElement.textContent = getTotal().toFixed(2);
    }

    // 4. Update payment page total (if on payment.php)
    const paymentTotalElement = document.getElementById('payment-total');
    if (paymentTotalElement) {
        paymentTotalElement.textContent = getTotal().toFixed(2);
    }
}

function addToCart(productName, price) {
    const existingItem = cart.find(item => item.name === productName);
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ name: productName, price: price, quantity: 1 });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} added to cart!`);
    updateCartDisplay(); // Call the centralized function
}

function updateQuantity(productName, change) {
    const item = cart.find(item => item.name === productName);
    if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
            removeFromCart(productName); 
        } else {
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay(); // Call the centralized function
        }
    }
}

function removeFromCart(productName) {
    cart = cart.filter(item => item.name !== productName);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartDisplay(); // Call the centralized function
}

// Function for `checkout.php` to handle checkout submission.
function handleCheckoutSubmit(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData);
    
    // Check if cart is empty before proceeding
    if (cart.length === 0) {
        alert('Your cart is empty. Please add items before proceeding to checkout.');
        window.location.href = 'services.php';
        return;
    }

    // Basic validation for shipping details (optional but recommended)
    if (!data.name && !data.address && !data.email) {
        alert('Please provide at least your Name, Address, or Email for shipping details.');
        return;
    }

    // Store shipping info (even if partial)
    localStorage.setItem('shippingInfo', JSON.stringify(data));
    alert('Checkout details saved! Redirecting to payment options...');
    window.location.href = 'payment.php'; // Updated to .php
}


// Form Handling for Login/Register (Now connecting to PHP backend)
function handleFormSubmit(event, formType) {
    event.preventDefault(); 

    const formData = new FormData(event.target); 
    const url = formType === 'login' ? 'login_process.php' : 'register_process.php'; // Corrected URLs

    fetch(url, {
        method: 'POST',
        body: formData 
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json(); 
    })
    .then(data => {
        alert(data.message); 
        if (data.success) {
            if (formType === 'login') {
                window.location.href = 'index.php'; // Updated to .php
            } else if (formType === 'register') {
                window.location.href = 'login.php';
            }
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
        alert('An error occurred during ' + formType + '. Please check console for details.');
    });
}


// Contact Form (Basic Validation)
function handleContactSubmit(event) {
    event.preventDefault();
    const name = event.target.name.value;
    const email = event.target.email.value;
    const message = event.target.message.value;

    if (name && email && message) {
        alert('Message sent!');
        event.target.reset();
    } else {
        alert('Please fill in all required fields (Name, Email, Message)!');
    }
}

// Payment form submission
function handlePaymentSubmit(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const paymentMethod = formData.get('payment');

    if (cart.length === 0) {
        alert('Your cart is empty. No payment can be processed.');
        window.location.href = 'services.php';
        return;
    }

    if (paymentMethod) {
        // You would typically send this data to a backend payment gateway here
        // For now, we simulate success
        alert(`Payment via ${paymentMethod.toUpperCase()} successful! Order placed. (Total: Rs.${getTotal().toFixed(2)})`);
        
        // Clear cart and shipping info after successful order
        localStorage.removeItem('cart');
        localStorage.removeItem('shippingInfo'); // Clear shipping info as well
        
        window.location.href = 'index.php'; // Redirect to home
    } else {
        alert('Please select a payment method!');
    }
}


// Initialize Cart Count & Display on every page load
document.addEventListener('DOMContentLoaded', updateCartDisplay);