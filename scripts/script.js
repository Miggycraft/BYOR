function addToCart(product) {
    // Retrieve the current cart from local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if the product is already in the cart
    const existingProduct = cart.find(item => item.id === product.id);

    if (existingProduct) {
        // If the product exists, increase its quantity
        existingProduct.quantity += 1;
    } else {
        // If the product doesn't exist, add it to the cart
        product.quantity = 1; // Add a quantity property
        cart.push(product);
    }

    // Save the updated cart back to local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Notify the user
    alert(`Product ${product.name} added to cart!`);

    // Update the cart count in the header
    updateCartCount();
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);

    // Update the cart count in the header
    const cartCountElement = document.querySelector('.cart-count');
    if (cartCountElement) {
        cartCountElement.textContent = cartCount;
    }
}

// Call this function when the page loads to display the current cart count
document.addEventListener('DOMContentLoaded', updateCartCount);

function checkout() {
    alert("Proceeding to checkout!");
    // Add logic to handle checkout
}