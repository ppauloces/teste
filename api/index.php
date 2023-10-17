<?php
  $dsn = "mysql:host={'aws.connect.psdb.cloud';dbname={'greencoleta'}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
  );

  $pdo = new PDO($dsn, 'ia6ndbnewx4cniu6kg4g', 'greencoleta', $options);
?>
  
