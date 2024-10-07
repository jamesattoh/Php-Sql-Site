<!-- inclusion des variables et fonctions -->
<?php
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>Site de recettes</h1>

        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>

        <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>

    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"
    ></script>

</body>
</html>