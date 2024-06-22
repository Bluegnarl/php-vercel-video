<?php

$title = "PHP Vercel";
$data = json_decode(file_get_contents(__DIR__ . "/datas/data.json"), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <img src="/assets/first.png" alt="">
    <?php foreach($data as $text) : ?>
        <p><?= $text['value'] ?></p>
    <?php endforeach ?>
</body>
</html>
