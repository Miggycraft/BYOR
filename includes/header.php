<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYOR - Build Your Own Rig</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Add Font Awesome for icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>BYOR</h1>
            <nav>
                <!-- Left-aligned navigation -->
                <ul class="nav-left">
                    <li style="margin-left:0px;"><a href="Home.php">Home</a></li>
                    <li><a href="Products.php">Products</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>
                <!-- Right-aligned navigation -->
                <ul class="nav-right">
                    <li><a href="Account.php">Account</a></li>
                    <li>
                        <a href="Cart.php" class="cart-icon">
                            <img src="images/cart-icon.png" alt="Cart">
                            <span class="cart-count">0</span> <!-- Optional: Display cart item count -->
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>