<?php
// Simulated user credentials (Replace with your own authentication logic)
$validEmail = 'user@example.com';
$validPassword = 'password123';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $validEmail && $password === $validPassword) {
        // Successful login
        echo "Login successful. Redirecting to your inbox...";
        // You can redirect the user to the inbox page or perform other actions here.
    } else {
        // Invalid login
        echo "Invalid login credentials. Please try again.";
    }
} else {
    // Handle the case where email and password are not provided.
    echo "Please enter both email and password.";
}
?>
