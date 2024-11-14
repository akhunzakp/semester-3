<?php
session_start();

// Initialize error messages
$error_message = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Form validation
    if (empty($username) || empty($password)) {
        $error_message = "Must be filled.";
    } elseif (strlen($password) < 5) {
        $error_message = "Password is at least 5 characters.";
    } elseif (!preg_match('/[0-9]/', $password)) {
        $error_message = "Password must consist of letters and numbers.";
    } else {
        // If validation passes, save username and redirect to home
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Putra's Guest House</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@400&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h1 {
            font-family: 'Open Sans', sans-serif;
            font-size: 2.2em; /* Ukuran font judul */
            color: #007BFF;
            margin-bottom: 15px;
        }
        .welcome-message {
            font-size: 0.8em;
            color: #333;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF; /* Border lebih tebal */
            border-radius: 3px;
            font-size: 0.8em;
            transition: border-color 0.1s;
            box-sizing: border-box; /* Menjaga padding tidak mempengaruhi ukuran */
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #0056b3;
            outline: none;
        }
        .login-button {
            background-color: #007BFF;
            color: white;
            padding: 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.8em;
            transition: background-color 0.3s, box-shadow 0.3s; /* Tambahkan efek bayangan */
            width: 100%;
            border: 2px solid #007BFF; /* Border tombol */
        }
        .login-button:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
        }
        .error-message {
            color: red;
            margin: 10px 0;
            font-size: 0.9em;
        }
        .footer {
            position: absolute;
            bottom: 5px;
            font-size: 0.7em;
            color: #666;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Welcome to Putra's Guest House</h1> <!-- Ucapan selamat datang -->
    <p class="welcome-message">please login to enter</p> <!-- Pesan tambahan -->
    <?php if ($error_message): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" class="login-button">Login</button>
    </form>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 Putra's Guest House. All rights reserved.</p>
    <p>Address: Jl. Contoh No. 123, Malang, Indonesia</p>
</div>

</body>
</html>
