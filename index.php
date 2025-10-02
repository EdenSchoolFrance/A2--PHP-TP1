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
function test($name, $lastname){
    return $name." ".$lastname;
};

echo test("Romain", "Brival");