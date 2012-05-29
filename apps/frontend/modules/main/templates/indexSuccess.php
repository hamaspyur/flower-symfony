<?php foreach ($flowers as $flower) : ?>
  Flower Name: <?php echo $flower ?><br />
  <?php foreach($flower->getPetals() as $petal) : ?>
    -- Petal Name: <?php echo $petal->getConnection() ?><br />
  <?php endforeach ?>
  <hr />
<?php endforeach ?>