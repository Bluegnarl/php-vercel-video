<?php

$text = "Je suis un texte";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Help Page</title>
</head>
<body>
    <a href="/">Home Page</a>
    <img src="/assets/img/second.png">
    <?php foreach ($data as $paragraph) : ?>
        <div>
            <h2><?= $paragraph['title'] ?></h2>
            <p><?= $paragraph['text'] ?></p>
        </div>
    <?php endforeach ?>
</body>
</html>