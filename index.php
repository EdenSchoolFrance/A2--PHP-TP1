<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1></h1>
</body>
</html> -->

<?php 
function test($age) {
if ($age < "18") {
    echo "<p>Je suis majeur(e)</p>";
} else {
    echo "<span>Je suis pas majeur(e)</span>";
}};

echo test("19");
