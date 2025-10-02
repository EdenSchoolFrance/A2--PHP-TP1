<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php 
$articles = [
    "Apprendre PHP pas à pas",
    "Faire sa premiere requète SQL",
    "Créer sa première page web ",
];


?>

<div class="card">
<h2>Mes articles</h2>
<ul>
    <?php 
    foreach($articles as $article){
       echo "<li>$article</li>";
    }
    ?>
</ul>
</div>
</body>
</html>