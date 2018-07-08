<?php

require_once __DIR__ . "/../vendor/autoload.php";

echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
