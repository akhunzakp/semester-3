<?php
session_start();

// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Putra's Guest House</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative; /* Untuk posisi kontainer login */
        }
        .thank-you-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 280px;
            margin-bottom: 10px;
        }
        .supporting-container {
            background-color: #f7f9fc;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.1);
            margin-top: 20px;
            width: 280px;
        }
        h1 {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.8em; /* Ukuran font lebih kecil */
            color: #007BFF;
            margin-bottom: 1.7em;
        }
        p {
            margin: 5px 0; /* Margin lebih kecil */
            font-size: 0.em; /* Ukuran font lebih kecil */
            color: #333;
        }
        .back-home {
            display: inline-block;
            padding: 5px 15px; /* Ukuran padding lebih kecil */
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
            font-size: 0.8em; /* Ukuran font lebih kecil */
            position: absolute; /* Untuk memposisikan di pojok kanan atas */
            top: 20px;
            right: 20px;
        }
        .back-home:hover {
            background-color: #0056b3;
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

<a href="login.php" class="back-home">Login</a> <!-- Judul diubah menjadi "Login" -->


<div class="thank-you-container">
    <div>
    <h1>Thank You for Visit!</h1>
    <p>Dear Valued Guest,</p>
    <p>We sincerely appreciate your stay at <p>
    <p><strong>Putra's Guest House</strong>.</p>
</div>



<!-- Footer -->
<div class="footer">

    <p>&copy; 2024 Putra's Guest House. All rights reserved.</p>
    <p>Address  : Jl. Soekarno Hatta No. 56, Kota Malang, Indonesia</p>
</div>

</body>
</html>
