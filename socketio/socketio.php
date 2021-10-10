<?php

use Workerman\Worker;
use PHPSocketIO\SocketIO;

require_once __DIR__ . '/vendor/autoload.php';

$io = new SocketIO(2021);
$io->on('connection', function ($socket) use ($io) {
    $socket->emit('message', 'Seja bem-vindo ao Socket!');
});

Worker::runAll();