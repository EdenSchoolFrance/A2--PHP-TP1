<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;">📋 Liste des Pokémon</h1>
    <style>
    table { border-collapse: collapse; width: 80%; margin: 20px auto; }
    th, td { border: 1px solid #333; padding: 8px; text-align: center; }
    th { background-color: #f2f2f2; }
</style>
    <?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);



    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $dbname     = "pokemon_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    $sql    = "SELECT id, name, type1, hp, attack, defense FROM pokemon";
    $result = $conn->query($sql);
?>
