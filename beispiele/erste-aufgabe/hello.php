<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erste Aufgabe</title>
  </head>

  <body>
    <?php
    for ($index = 0; $index < 5; $index++) {
      echo('<p style="color:#ff0000">hello world ' . $index . '</p>');
    }
    ?>
  </body>
</html>