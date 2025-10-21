
<?php 
include_once 'config.php';
include_once 'check_login.php'; ?>

<?php include_once 'header.php'; ?>

        <h1>Our Products</h1>
        <div class="product-grid">
            <div class="product">
                <img src="craft1.jpg" alt="Wodden box">
                <h3>Rustic Wooden Boxes</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Rustic Wooden Boxes', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft2.jpg" alt="Painted cart">
                <h3>Joyful Trinket Trolley</h3>
                <p>Rs.3200.50</p>
                <button onclick="addToCart('Joyful Trinket Trolley', 3200.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft3.jpg" alt="Blossom organiser">
                <h3>Vibrant Blossom Organiser</h3>
                <p>Rs.2800.00</p>
                <button onclick="addToCart('Vibrant Blossom Organiser', 2800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft4.jpg" alt="Wodden toys">
                <h3>The Wildwood Wander set</h3>
                <p>Rs.6000.00</p>
                <button onclick="addToCart('The Wildwood Wander set', 6000.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft7.jpg" alt="Wodden Camel">
                <h3>Painted Desert Dromedary</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Painted Desert Dromedary', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft8.jpg" alt="Art set">
                <h3>Folk art set</h3>
                <p>Rs.2200.50</p>
                <button onclick="addToCart('Folk art set', 2500.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft9.jpg" alt="Exquisite Kerala Wooden Craft Combo - Handcrafted Wooden Artistry ">
                <h3>Exquisite Kerala Wooden Craft Combo </h3>
                <p>Rs.4800.00</p>
                <button onclick="addToCart('Exquisite Kerala Wooden Craft Combo', 4800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft10.jpg" alt="Vase">
                <h3>Wooden Vases</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Wooden Vases', 600.00)">Add to Cart</button>
            </div>
                <div class="product">
                <img src="craft12.jpg" alt="Appetizer platter">
                <h3>Round wooden appetizer platter</h3>
                <p>Rs.5000.00</p>
                <button onclick="addToCart('Round wooden appetizer platter', 5000.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft13.jpg" alt="Jewel boxes">
                <h3>Jaipur Jewel boxes</h3>
                <p>Rs.300.00</p>
                <button onclick="addToCart('Jaipur Jewel boxes', 300.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft11.jpg" alt="Masala Box">
                <h3>Handicraft Wooden Masala Box</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Handicraft Wooden Masala Box', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft14.jpg" alt="Ambari">
                <h3>Handicraft Ambari</h3>
                <p>Rs.2200.50</p>
                <button onclick="addToCart('Handicraft Ambari', 2200.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="Coasters">
                <h3>Set of 4 Wooden Coasters</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 4 Wooden Coasters', 1800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/4E342E/FFFFFF?text=Chopping+Board" alt="Chopping Board">
                <h3>Artisan Chopping Board</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Chopping Board', 6000.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="toys.png" alt="Rustic Wooden Toys">
                <h3>Rustic Wooden Toys</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Rustic Wooden Toys', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="craft8.jpg" alt="">
                <h3>Wooden Clock</h3>
                <p>Rs.2200.50</p>
                <button onclick="addToCart('Wooden Clock', 2500.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="stools">
                <h3>Set of 2 Wooden stools</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 2 Wooden Stools', 2800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/4E342E/FFFFFF?text=Chopping+Board" alt="frame">
                <h3>Artisan Frame</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Frames', 6550.00)">Add to Cart</button>
            </div>
                <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="stools">
                <h3>Set of 2 Wooden stools</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 2 Wooden Stools', 2800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/4E342E/FFFFFF?text=Chopping+Board" alt="frame">
                <h3>Artisan Frame</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Frames', 6550.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/5D4037/FFFFFF?text=Wooden+Tray" alt="Wooden Tray">
                <h3>Rustic Wooden Serving Tray</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Rustic Wooden Serving Tray', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/A1887F/FFFFFF?text=Candle+Holder" alt="Candle Holder">
                <h3>Hand-Turned Candle Holder</h3>
                <p>Rs.2200.50</p>
                <button onclick="addToCart('Hand-Turned Candle Holder', 2200.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="Coasters">
                <h3>Set of 4 Wooden Coasters</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 4 Wooden Coasters', 1800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/4E342E/FFFFFF?text=Chopping+Board" alt="Chopping Board">
                <h3>Artisan Chopping Board</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Chopping Board', 6000.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/5D4037/FFFFFF?text=Wooden+Tray" alt="Rustic Wooden Toys">
                <h3>Rustic Wooden Toys</h3>
                <p>Rs.3500.00</p>
                <button onclick="addToCart('Rustic Wooden Toys', 3500.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/A1887F/FFFFFF?text=Candle+Holder" alt="Clock">
                <h3>Wooden Clock</h3>
                <p>Rs.2200.50</p>
                <button onclick="addToCart('Wooden Clock', 2500.50)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="stools">
                <h3>Set of 2 Wooden stools</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 2 Wooden Stools', 2800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/250x150/4E342E/FFFFFF?text=Chopping+Board" alt="frame">
                <h3>Artisan Frame</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Frames', 6550.00)">Add to Cart</button>
            </div>
                <div class="product">
                <img src="https://via.placeholder.com/250x150/8D6B5B/FFFFFF?text=Coasters" alt="stools">
                <h3>Set of 2 Wooden stools</h3>
                <p>Rs.1800.00</p>
                <button onclick="addToCart('Set of 2 Wooden Stools', 2800.00)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="frame.png" alt="frame">
                <h3>Artisan Frame</h3>
                <p>Rs.600.00</p>
                <button onclick="addToCart('Artisan Frames', 6550.00)">Add to Cart</button>
            </div>
        </div>

<?php include_once 'footer.php'; ?>
