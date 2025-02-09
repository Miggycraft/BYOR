<?php
session_start();
$conn = new mysqli("localhost", "root", "", "byor");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function createUserSessionAndCookie($username)
{
    $_SESSION["user"] = $username;
    setcookie("user", $username, time() + (86400 * 30), "/"); // 30 days
    header("Location: Home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashedPassword);

        if ($stmt->num_rows > 0) {
            $stmt->fetch();
            if (password_verify($password, $hashedPassword)) {
                createUserSessionAndCookie($username);
            } else {
                echo "<p>Invalid credentials.</p>";
                header("refresh:1;url=Account.php");
            }
        } else {
            echo "<p>User not found.</p>";
        }
        $stmt->close();
    } elseif (isset($_POST["register"])) {
        $username = $_POST["username"];

        $stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "<p>Username already exists. Please choose a different username.</p>";
            $stmt->close();
            header("refresh:1;url=Account.php");
            exit();
        }
        $stmt->close();

        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            createUserSessionAndCookie($username);
        } else {
            echo "<p>Error: Could not register user.</p>";
        }
        $stmt->close();
    }
}
$conn->close();
