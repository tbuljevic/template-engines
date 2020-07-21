<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP view</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/styles/style.css" />
</head>
<body>

    <h2>Hello world from my awesome site</h2>

    <p>This is a very crude example of templating with PHP.</p>

    <?php foreach ($this->passedValues as $passedKey => $passedValue) : ?>
        <?php if ($passedKey == 'title') : ?>
            <header><h2><?= $passedValue ?></h2></header>
        <?php endif; ?>

        <?php if ($passedKey == 'data') : ?>
            <section>
                <nav>
                    <ul>
                        <?php foreach ($passedValue as $item):?>
                            <li><a href="<?= $item['url'] ?>"><?= $item['name'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <?php foreach ($passedValue as $item): ?>
                    <?php if (!empty($item['description'])): ?>
                        <article>
                            <h1><?= $item['name'] ?></h1>
                            <?= $item['description'] ?>
                        </article>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
    <?php endforeach ?>

    <footer><p>Footer</p></footer>
</body>