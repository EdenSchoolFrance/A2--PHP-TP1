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