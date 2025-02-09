<?php
include 'includes/header.php';
include 'includes/db.php';

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
            echo "<script>alert('Login successful!');</script>";
        } else {
            echo "<script>alert('Invalid credentials!');</script>";
        }
    } elseif (isset($_POST['logout'])) {
        session_destroy();
        echo "<script>alert('Logged out successfully!');</script>";
    }
}
?>
<main>
    <div class="container">
        <h2>Account</h2>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
            <form method="POST">
                <button type="submit" name="logout">Logout</button>
            </form>
        <?php else: ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        <?php endif; ?>
    </div>
</main>
<?php include 'includes/footer.php'; ?>