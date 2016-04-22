<html>
<head>
</head>
<body>
<?php
  require 'cyclrConnectorStore.php';

  $connectorId = $_GET["id"];
  if($connectorId == null) {
    echo 'Need a connector id as \'id\' in querystring!';
  }
  else {
    $store = new cyclrConnectorStore();
    $connector = $store->getConnector($connectorId);
    ?>
  <h1><?= $connector->Name ?></h1>
  <p><?= $connector->Description ?></p>
  <img src='<?= $connector->Icon ?>' />
  <p>
    <?php foreach ($connector->Prices as  $key => $price)
        if($key == 'USD'){?>
            <h4>$<?= floatval($price) ?></h4>
        <?php } ?>
  </p>
  <?php foreach ($connector->MethodCategories as $category) { ?>
    <h6><?= $category->Category ?></h6>
    <ul>
    <?php foreach ($category->Methods as $method)
      {
        echo '<li>'.$method.'</li>';
      }
    ?>
    </ul>
<?php
  }
 }
?>
</body>
</html>
