// Retrieve cart data from local storage
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Display cart items
const cartItemsElement = document.getElementById('cart-items');
const cartTotalElement = document.getElementById('cart-total');

function renderCart() {
    if (cart.length === 0) {
        cartItemsElement.innerHTML = '<p>Your cart is empty.</p>';
        cartTotalElement.innerHTML = '';
        return;
    }

    let cartHTML = '';
    let total = 0.0;

    cart.forEach((item, index) => {
        console.log('Item:', item, 'Index:', index);
        const itemTotal = (item.price * item.quantity).toFixed(2);
        total += parseFloat(itemTotal);

        cartHTML += `
                    <div class="cart-item">
                        <img src="images/${item.image}" alt="${item.name}">
                        <div class="cart-item-details">
                            <h3>${item.name}</h3>
                            <p>₱${item.price}</p>
                            <div class="quantity-controls">
                                <button onclick="updateQuantity(${index}, ${item.quantity - 1})">-</button>
                                <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                                <button onclick="updateQuantity(${index}, ${item.quantity + 1})">+</button>
                            </div>
                            <p>Total: ₱${itemTotal}</p>
                            <button onclick="removeFromCart(${index})">Remove</button>
                        </div>
                    </div>
                `;
    });

    cartItemsElement.innerHTML = cartHTML;
    cartTotalElement.innerHTML = `<h3>Total: ₱${total.toFixed(2)}</h3>`;
}

// Function to update the quantity of a product
function updateQuantity(index, newQuantity) {
    if (newQuantity < 1) newQuantity = 1; // Ensure quantity is at least 1
    cart[index].quantity = parseInt(newQuantity); // Update quantity
    localStorage.setItem('cart', JSON.stringify(cart)); // Save to local storage
    renderCart(); // Re-render the cart
}

// Function to remove an item from the cart
function removeFromCart(index) {
    cart.splice(index, 1); // Remove the item
    localStorage.setItem('cart', JSON.stringify(cart)); // Save to local storage
    alert('Product removed from cart!');
    renderCart(); // Re-render the cart
    updateCartCount(); // Update the cart count in the header
}

// Function to handle checkout
function checkout() {
    if (cart.length === 0){
        alert('Your cart is empty!');
        return;
    }
    alert('Proceeding to checkout!');
    // Add logic to handle checkout (e.g., redirect to a payment page)
}

// Render the cart when the page loads
document.addEventListener('DOMContentLoaded', renderCart);
