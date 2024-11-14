<?php
session_start();

// Initialize variables
$roomTypes = [
    'standard' => 5000, // Removed the dot for thousands
    'superior' => 6000,
    'deluxe' => 7000,
];
$totalPrice = null;
$error_message = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $floor = intval($_POST['floor']);
    $roomType = $_POST['roomType'];
    $lengthOfStay = intval($_POST['days']);
    $discountType = $_POST['discount'];

    // Calculate rental price
    if (array_key_exists($roomType, $roomTypes) && $lengthOfStay > 0) {
        $basePrice = $roomTypes[$roomType] * $lengthOfStay; // Base price calculation
        $additionalPrice = ($floor > 5) ? 1000 : 0; // Additional price based on floor
        $totalPrice = $basePrice + $additionalPrice; // Total price before discounts

        // Apply discount
        if ($discountType == 'member') {
            $totalPrice *= 0.9; // 10% discount for members
        } elseif ($discountType == 'birthday') {
            $totalPrice -= 500; // IDR 500 discount for birthday promo
        }

        // Ensure total is not negative
        $totalPrice = max(0, $totalPrice); 
    } else {
        $error_message = "Please enter valid inputs.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Check - Putra's Guest House</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@400&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px 15px;
            background-color: #007BFF;
            color: white;
        }
        .header h1 {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 1.5em;
        }
        .nav-links {
            display: flex;
            align-items: center;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 0.8em;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #ffd700; /* Gold color for hover effect */
        }
        .price-check-container {
            max-width: 350px; /* Perkecil ukuran kontainer */
            margin: 50px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center; /* Center content */
            display: block;
        }
        h2 {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.5em;
            color: #007BFF;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            text-align: left; /* Align label to the left */
            font-size: 13px;
        }
        input, select {
            display: flex; /* Adjust width for padding */
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #007BFF;
            border-radius: 3px;
            font-size: 0.7em;
            transition: border-color 0.3s;
        }
        input:focus, select:focus {
            border-color: #0056b3;
            outline: none;
        }
        .check-button {
            background-color: #007BFF;
            color: white;
            padding: 8px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.8em;
            transition: background-color 0.3s, box-shadow 0.3s;
            width: 100%;
            margin-top: 10px; /* Add margin to separate from inputs */
        }
        .check-button:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .result {
            margin-top: 15px;
            font-size: 1em;
            color: #333;
        }
        .footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.7em;
            color: #666;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Putra's Guest House</h1>
    <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="check Price">Check Price</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="price-check-container">
    <h2>Price Check</h2>
    <form method="POST" action="">
        <label for="floor">Floor:</label>
        <input type="number" id="floor" name="floor" min="1" max="20" required>
        
        <label for="roomType">Room Type:</label>
        <select id="roomType" name="roomType" required>
            <option value="standard">Standard - IDR 5000</option>
            <option value="superior">Superior - IDR 6000</option>
            <option value="deluxe">Deluxe - IDR 7000</option>
        </select>
        
        <label for="days">Length of Stay (Days):</label>
        <input type="number" id="days" name="days" min="1" required>
        
        <label for="discount">Discount:</label>
        <select id="discount" name="discount" required>
            <option value="none">None</option>
            <option value="member">Member - 10% Off</option>
            <option value="birthday">Birthday Promo - IDR 500 Off</option>
        </select>
        
        <button type="submit" class="check-button"><Strong>Check Price</button>
    </form>

    <?php if ($totalPrice !== null): ?>
        <div class="result">Total Price: IDR <?php echo number_format($totalPrice, 0, ',', '.'); ?></div>
    <?php elseif ($error_message): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 Putra's Guest House. All rights reserved.</p>
    <p>Address  : Jl. Soekarno Hatta No. 56, Kota Malang, Indonesia</p>
</div>

</body>
</html>
