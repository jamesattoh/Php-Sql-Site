<?php

/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */

$postData = $_GET;

if (
    !isset($postData['email']) //isset() verifie si une variable est definie ou 
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL) //validité de l'email ou non
    || empty($postData['message'])
    || trim($postData['message']) === '' //supprime l'espace ou autre caractere(à preciser) en début et en fin de chaîne
) {
    echo ('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Contact reçu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>Message bien reçu !</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo ($postData['email']); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo (strip_tags($postData['message'])); ?></p>
            </div>
        </div>
    </div>
</body>

</html>