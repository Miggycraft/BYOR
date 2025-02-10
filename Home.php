<?php include 'includes/header.php'; ?>
<main>
    <!-- Hero Banner -->
    <section class="hero">
        <img src="images/hero.jpg" alt="Build Your Own Rig">
        <div class="hero-text">
            <h1>Build Your Dream PC</h1>
            <p>Customize your rig with the best components on the market.</p>
        </div>
    </section>

    <!-- Preview Cells -->
    <section class="preview-grid">
        <div class="preview-cell">
            <img src="images/amd_ryzen.jpg" alt="CPU">
            <h2>CPU</h2>
            <p>Choose an array of CPUs we have for your gaming and productivity needs.</p>
            <a href="Products.php?category=CPUs" class="check-button">Check</a>
        </div>
        <div class="preview-cell">
            <img src="images/rtx_4090.jpg" alt="GPU">
            <h2>GPU</h2>
            <p>Power up your rig with the latest GPUs for gaming and rendering.</p>
            <a href="Products.php?category=GPUs" class="check-button">Check</a>
        </div>
        <div class="preview-cell">
            <img src="images/more-preview.png" alt="More">
            <h2>More</h2>
            <p>Explore other components like RAM, Storage, Motherboards, and PSUs.</p>
            <a href="Products.php" class="check-button">Check</a>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>