<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/styles/style.css" />
</head>
<body>
    <?php if (isset($content['title'])) : ?>
        <h2><?= $content['title'] ?></h2>
    <?php endif; ?>

    <?php if (isset($content['intro'])) : ?>
        <?= $content['intro'] ?>
    <?php endif; ?>

    <?php if (isset($content['main'])) : ?>
        <?= $content['main'] ?>
    <?php endif; ?>

    <?php if (isset($content['footer'])) : ?>
        <?= $content['footer'] ?>
    <?php endif; ?>
</body>