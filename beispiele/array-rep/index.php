<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > * {
            display: block;
        }

        input[type='submit'] {
            margin-top: 2em;
        }
    </style>
</head>

<body>
    <?php
    $value = range(2000, 2024, 4);
    var_dump($value);
    if ($_POST['sprache']) {
        echo 'Ausgewählte Sprachen: ';
        foreach($_POST['sprache'] as $value) {
            echo $value . ' ';
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="sprache">Sprache</label>
        <select name="sprache[]" id="sprache" multiple="multiple">
            <optgroup label="Europäische Sprachen">
                <option value="de">Deutsch</option>
                <option value="fr">Französisch</option>
            </optgroup>
            <optgroup label="Andere Sprachen">
                <option value="ua">Ukrainisch</option>
                <option value="ar">Arabisch</option>
            </optgroup>
        </select>
        <input type="submit" value="Absenden" />
    </form>
</body>

</html>