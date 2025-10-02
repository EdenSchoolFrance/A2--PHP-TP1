<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $usersWithAge = [
        ["name" => "John", "age" => 27],
        ["name" => "Simon", "age" => 29],
        ["name" => "Mamadou", "age" => 21],
        ["name" => "Karim", "age" => 23]
    ];
    ?>
    <div class="card">
        <h2>Utilisateurs</h2>
        <ul>
            <?php
            foreach ($usersWithAge as $user) {
                echo "<li>" . htmlspecialchars($user['name']) . " a " . htmlspecialchars($user['age']) . " ans</li>";
            };
            ?>
        </ul>
    </div>
</body>

</html>