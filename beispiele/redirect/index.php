<?php
    if(isset($_POST['send'])) {
        header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/other.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="other.php" method="POST">
        <input type="submit" name="send" value="Senden" />
    </form>
</body>
</html>