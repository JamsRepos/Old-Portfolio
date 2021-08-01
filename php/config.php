<?php
    require "vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();

    // Here is a list of all pre-defined variables for the whole site.

    $is_live = filter_var($_ENV['IS_LIVE'], FILTER_VALIDATE_BOOLEAN);

    $base_url = $_ENV['BASE_URL'];
    $full_name = $_ENV['FULL_NAME'];
    $meta_description = $_ENV['META_DESCRIPTION'];
    $meta_tags = $_ENV['META_TAGS'];

    if ($is_live) {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    } else {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
?>