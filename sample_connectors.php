<html>
  <head></head>
  <body>
    <?php require 'cyclrConnectorStore.php';
        $store = new cyclrConnectorStore();
        foreach($store->getConnectors(8) as $connector){ ?>
                    <div>
                        <h3><?= $connector->Name ?></h3>
                        <p><?= $connector->Description ?></p>
                        <img src='<?= $connector->Icon ?>' />
                        <p>
                            <?php foreach ($connector->Prices as  $key => $price)
                                if($key == 'USD'){?>
                                    <h4>$<?= floatval($price) ?></h4>
                                <?php } ?>
                        </p>
                    </div>
    <?php } ?>
  </body>
</html>
