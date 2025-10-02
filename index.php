<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php
    $usersWithAge = [
        'Jonh' => "27 ans",
        'Simon' => "29 ans",
        'Mamadou' => "21 ans",
        'Karim' => "23 ans",
    ];

    foreach ($usersWithAge as $name => $age) {
    echo "$name a $age<br>";
    }
    ?>
</body>
</html>