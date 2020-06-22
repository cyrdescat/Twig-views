<?php

require_once __DIR__ . '/../vendor/autoload.php';

echo call_user_func_array([new \App\Controller\ViewController(), "index"], []);