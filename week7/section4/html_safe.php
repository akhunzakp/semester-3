<?php
// Inisialisasi variabel
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = isset($_POST['input']) ? $_POST['input'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Sanitasi input
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Validasi email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $userInput = isset($_POST['userInput']) ? htmlspecialchars($_POST['userInput'], ENT_QUOTES, 'UTF-8') : '';

        echo "<div>$userInput</div>";
    } else {
        echo "<div>Invalid email address.</div>";
    }
}
?>