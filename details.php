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
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $app['name'] ?> – RetroHub</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1><?= $app['name'] ?></h1>
        </div>
        <img src="<?= $app['image'] ?>" alt="" style="max-width:200px;">
        <p><?= $app['description'] ?></p>
        <a href="download.php?id=<?= $app['id'] ?>" class="btn btn-success">Letöltés</a>
        <a href="index.php" class="btn btn-link">← Vissza</a>
    </div>
</body>

</html>