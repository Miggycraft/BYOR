<?php
include 'includes/header.php';
include 'includes/db.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            setcookie('user', $username, time() + (86400 * 30), "/"); // Set cookie for 30 days
            echo "<script>alert('Login successful!'); window.location.href = 'Home.php';</script>";
        } else {
            echo "<script>alert('Invalid credentials!');</script>";
        }
    } elseif (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt->execute([$username, $password])) {
            echo "<script>alert('Registration successful! Please login.');</script>";
        } else {
            echo "<script>alert('Registration failed!');</script>";
        }
    } elseif (isset($_POST['logout'])) {
        // Destroy session and cookie
        session_destroy();
        setcookie('user', '', time() - 3600, "/"); // Delete cookie
        echo "<script>alert('Logged out successfully!'); window.location.href = 'Account.php';</script>";
    }
}

// Check if the user is logged in (cookie or session exists)
$username = $_COOKIE['user'] ?? $_SESSION['username'] ?? null;
?>
<main>
    <div class="account-container">
        <?php if ($username): ?>
            <!-- Display welcome message and logout option -->
            <div class="account-box">
                <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                <form method="POST">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        <?php else: ?>
            <!-- Display login/register form -->
            <div class="account-box">
                <h2 id="form-title">Login</h2>
                <form method="POST" action="process.php" id="account-form">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login" id="submit-button">Login</button>
                </form>
                <p id="toggle-text">Don't have an account? <a href="#" id="toggle-link">Sign-Up</a></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<script src="scripts/login-logout.js"></script>
<?php include 'includes/footer.php'; ?>