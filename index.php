<?php
$apps = json_decode(file_get_contents('data/apps.json'), true);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RetroHub – Tweak & App gyűjtemény</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="hero-unit">
      <h1>RetroHub</h1>
      <p>Régi iPhone-okra, Windowsra, Macre való tweakek és appok egy helyen.</p>
    </div>

    <div class="row">
      <?php foreach ($apps as $app): ?>
        <div class="span4">
          <div class="thumbnail">
            <img src="<?= $app['image'] ?>" alt="">
            <div class="caption">
              <h3><?= $app['name'] ?></h3>
              <p><?= $app['short_description'] ?></p>
              <p><a href="details.php?id=<?= $app['id'] ?>" class="btn btn-primary">Részletek</a></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>