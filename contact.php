<?php
include_once 'config.php';
include_once 'check_login.php'; ?>

<?php include_once 'header.php'; ?>

        <h1>Contact Us</h1>
        <div class="card">
            <p>Reach out to us for any inquiries, custom orders, or feedback. We'll get back to you within 24-48 hours.</p>
            <form onsubmit="handleContactSubmit(event)">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

<?php include_once 'footer.php'; ?>