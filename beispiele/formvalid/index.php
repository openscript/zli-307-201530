<?php
    $emailValue = '';
    $emailError = '';
    if(isset($_POST['send'])) {
        // Serverseitige Validierung
        $emailValue = $_POST['email'];
        if(!filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'E-Mail ist ungültig';
        }
        // echo 'Formular abgeschickt';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beispielformular mit serverseitiger Validierung</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="email">E-Mail</label>
            <?php if($emailError): ?>
                <div class="error">
                    <?= $emailError ?>
                </div>
            <?php endif; ?> 
            <input type="email" name="email" id="email" value="<?= $emailValue ?>" />
            <input type="submit" name="send" value="Absenden" />
        </form>
    </body>
</html>