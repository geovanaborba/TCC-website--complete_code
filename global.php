<?php
    require_once __DIR__ ('./vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();
?>
