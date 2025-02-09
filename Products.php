<?php
include 'includes/header.php';
include 'includes/db.php';

$category = $_GET['category'] ?? 'all'; // Get the selected category from the URL

if ($category === 'all') {
    $stmt = $conn->query("SELECT * FROM products");
} else {
    $stmt = $conn->prepare("SELECT * FROM products WHERE category = ?");
    $stmt->execute([$category]);
}

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <div class="container">
        <h2>Products</h2>
        <div class="category-filter">
            <a href="Products.php?category=all">All</a>
            <a href="Products.php?category=CPUs">CPUs</a>
            <a href="Products.php?category=GPUs">GPUs</a>
            <a href="Products.php?category=RAM">RAM</a>
            <a href="Products.php?category=Storage">Storage</a>
            <a href="Products.php?category=Motherboard">Motherboard</a>
            <a href="Products.php?category=PSU">PSU</a>
        </div>
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['description']; ?></p>
                    <p><strong>Price:</strong> $<?php echo $product['price']; ?></p>
                    <p><strong>Category:</strong> <?php echo $product['category']; ?></p>
                    <button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>