<?php

$text = "Je suis un texte";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>PHP Vercel Video</title>
</head>
<body>
    <a href="/?page=help">Help Page</a>
    <img src="/assets/img/first.png">
    <?php foreach ($data as $paragraph) : ?>
        <div>
            <h2><?= $paragraph['title'] ?></h2>
            <p><?= $paragraph['text'] ?></p>
        </div>
    <?php endforeach ?>
</body>
</html>