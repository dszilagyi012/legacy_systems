<?php
$id = $_GET['id'] ?? null;
$apps = json_decode(file_get_contents('data/apps.json'), true);
$app = null;

foreach ($apps as $item) {
    if ($item['id'] == $id) {
        $app = $item;
        break;
    }
}

if (!$app) {
    die("App nem található.");
}

// Eredetileg: header('Location: ' . $app['file']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Letöltés – <?= $app['name'] ?></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="alert alert-success">
            <strong><?= $app['name'] ?></strong> letöltése hamarosan megkezdődik...
        </div>
        <p><a href="<?= $app['file'] ?>" class="btn btn-primary">Kattints ide, ha nem indul el automatikusan</a></p>
    </div>
</body>

</html>