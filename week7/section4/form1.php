<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Safe Input</title>
</head>
<body>
    <form method="POST" action="">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="userInput">User Input:</label>
        <input type="text" id="userInput" name="userInput">

        <input type="submit" value="Submit">
    </form>
</body>
</html>