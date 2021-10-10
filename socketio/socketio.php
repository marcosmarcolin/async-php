<?php

use Workerman\Worker;
use PHPSocketIO\SocketIO;

require_once __DIR__ . '/vendor/autoload.php';

$io = new SocketIO(2021);
$io->on('connection', function ($socket) use ($io) {

    $socket->on('newMessage', function ($message) use ($socket, $io) {
        $io->emit('message', $message);
    });

    $socket->on('addUser', function ($user) use ($io) {
        $msg = $user . ' entrou no Chat!';
        $io->emit('message', $msg);
    });

});

Worker::runAll();