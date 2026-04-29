<?php
/**
 * @var string|null $description
 * @var string|null $title
 * @var Framework\MVC\View $view
 */
?>
<!doctype html>
<html lang="<?= App::language()->getCurrentLocale() ?>" dir="<?= App::language()
    ->getCurrentLocaleDirection() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= isset($description)
        ? esc($description) : 'Website built with Webisters' ?>">
    <meta name="theme-color" content="#000">
    <title><?= isset($title) ? esc($title) : 'Webisters' ?></title>
    <link rel="icon" type="image/x-icon" href="<?= asset('favicon.ico?v=2') ?>">
    <link rel="shortcut icon" href="<?= asset('favicon.ico?v=2') ?>">
    <link rel="icon" type="image/png" href="<?= asset('webisters-light.png?v=2') ?>">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>
<?= $view->renderBlock('contents') ?>
</body>
</html>
