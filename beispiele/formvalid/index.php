<?php
    $valid = false;

    $emailValue = '';
    $emailError = '';

    $hobbiesValue = [];
    $hobbiesError = '';
    if(isset($_POST['send'])) {
        $valid = true;
        // Serverseitige Validierung
        $emailValue = $_POST['email'];
        if(!filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'E-Mail ist ungültig';
            $valid = false;
        }

        $hobbiesValue = $_POST['hobbies'];
        if(!isset($_POST['hobbies'])) {
            $hobbiesError = 'Haben Sie wirklich keine Hobbys?';
            $valid = false;
        }

        if($valid) {
            //send email
        }
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
        <?php if(!$valid): ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="email">E-Mail</label>
            <?php if($emailError): ?>
                <div class="error">
                    <?= $emailError ?>
                </div>
            <?php endif; ?> 
            <input type="email" name="email" id="email" value="<?= $emailValue ?>" />
            <fieldset>
                <legend>Hobbys</legend>
                <?php if($hobbiesError): ?>
                    <div class="error">
                        <?= $hobbiesError ?>
                    </div>
                <?php endif; ?> 
                <label>
                    Fussball spielen
                    <input type="checkbox" name="hobbies[]" value="fussball" <?= in_array('fussball', $hobbiesValue) ? 'checked' : '' ?> />
                </label>
                <label>
                    Ski fahren
                    <input type="checkbox" name="hobbies[]" value="ski" <?= in_array('ski', $hobbiesValue) ? 'checked' : '' ?> />
                </label>
                <label>
                    Vollyball spielen
                    <input type="checkbox" name="hobbies[]" value="vollyball" <?= in_array('vollyball', $hobbiesValue) ? 'checked' : '' ?> />
                </label>
            </fieldset>
            <input type="submit" name="send" value="Absenden" />
        </form>
        <?php else: ?>
            <p>Danke für Ihre Nachricht! Sie wurde an <?= $emailValue ?></p>
        <?php endif; ?>
    </body>
</html>