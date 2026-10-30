<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>daysarray</title>
    </head>
    <body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
    $daysEnglish = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    $daysFrench = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    ?>
    <p>
        The days of the week in English are:<br>
        <?= implode(", ", $daysEnglish) ?>.
    </p>
    <p>
        The days of the week in French are:<br>
        <?= implode(", ", $daysFrench) ?>.
    </p>
</body>
</html>