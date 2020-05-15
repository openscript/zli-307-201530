<?php
    session_start();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter'] += 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    Counter: <?= $_SESSION['counter'] ?>
</body>
</html>