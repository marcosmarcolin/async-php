<?php

use Workerman\Worker;

require_once __DIR__ . '/vendor/autoload.php';

$Worker = new Worker('websocket://0.0.0.0:2021');

$Worker->onConnect = function ($connection) {
    echo "New connection\n";
};

$Worker->onMessage = function ($connection, $data) use($Worker) {
    $connection->send('Server says: ' . $data);
};

$Worker->onClose = function ($connection) {
    echo "Connection closed\n";
};

Worker::runAll();