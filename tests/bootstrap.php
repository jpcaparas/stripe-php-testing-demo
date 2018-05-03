<?php
require_once(__DIR__ . '/../vendor/autoload.php');

(new Dotenv\Dotenv(__DIR__ . '/../', \Tests\TestConfig::ENV_FILENAME))->load();
