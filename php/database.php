<?php
$config = [
    'db_engine' => 'mysql',      // DATABASE ENGINE
    'db_host' => 'localhost',    // HOST DATABASE (usare localhost oppure IP)
    'db_name' => '',             // NOME DATABASE. IMPORTANTE !
    'db_user' => 'root',             // UTENTE DATABASE (ROOT/{nome})
    'db_password' => '',         // NON E' SEMPRE OBBLIGATORIA
];

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";dbname=" . $config['db_name'];

try {
    $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit("Error during database connection: " . $e->getMessage());
}