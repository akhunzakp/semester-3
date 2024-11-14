<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Putra's Guest House</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6f7ff;
        }
        .video-container {
            max-width: 680px; /* Set maximum width for the video */
            margin: 0 auto; /* Center the video container */
            background-color: #e6f7ff; /* White background for contrast */
            padding: 2px;
            border-radius: 3px; /* Rounded corners */
        }
        video {
            width: 100%; /* Make video responsive within the container */
            border-radius: 3px; /* Rounded corners */
        }
        .header {
            background-color: #007BFF;
            color: white;
            padding: 3px;
            text-align: center;
        }
        .nav-bar {
            display: flex;
            justify-content: right;
            background-color: #0056b3;
        }
        .nav-bar a {
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s;
            font-size: 13px;
        }
        .nav-bar a:hover {
            background-color: #003f7f;
        }
        .content {
            text-align: center;
            padding: 20px;
        }
        .footer {
            margin-top: auto;
            font-size: 0.7em;
            color: #666;
            text-align: center;
            width: 100%;
            padding: 15px 0;
        }
    </style>
</head>
<body>

<!-- Video Section -->
<div class="video-container">
    <video controls>
        <source src="hotel.mp4" type="video/mp4"> <!-- Update with your local video file -->
        Your browser does not support the video tag.
    </video>
</div>

<!-- Header -->
<div class="header">
    <h1>Putra's Guest House</h1>
</div>

<!-- Navigation Bar -->
<div class="nav-bar">
    <a href="home.php">Home</a>
    <a href="price_check.php">Check Price</a>
    <a href="logout.php">Log Out</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Welcome to your home away from home,keep healty!</p>
</div>
    <div class="footer">

    <p>&copy; 2024 Putra's Guest House. All rights reserved.</p>
    <p>Address  : Jl. Soekarno Hatta No. 56, Kota Malang, Indonesia</p>
</div>

</body>
</html>
