<?php include 'includes/header.php'; ?>
    <main>
        <div class="container">
            <h2>Your Cart</h2>
            <div id="cart-items">
                <!-- Cart items will be dynamically added here -->
            </div>
            <div id="cart-total">
                <!-- Total price will be displayed here -->
            </div>
            <button onclick="checkout()">Checkout</button>
        </div>
    </main>

    <script src="scripts/cart-script.js"></script>
<?php include 'includes/footer.php'; ?>